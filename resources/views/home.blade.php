@php
if(session('id') == null) {
    $url = "http://localhost:8000/login?error=" . urlencode('Keine ID mitgegeben!');
    header("Location: " . $url);
    exit;
}
//dd(session('categoryInformation'));
$categoryInformationJson = json_encode(session('categoryInformation'));
//dd($categoryInformationJson);
$transactionSuccess = session('transactionSuccess');
@endphp

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <title>Home</title>

    <link rel="stylesheet" href="{{ asset('/css/home2.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="userId" content="{{ session('id') }}">
</head>

<body>
    <header>
        <section class="header-content">
            <h1>Buchhaltungssoftware</h1>
            <a href="/login">
                <p>Logout</p>
            </a>
        </section>
    </header>

    <main>
        <h2 id="welcome">Willkommen <strong>{{ session('name') }}</strong>, dein aktueller Kontostand beträgt {{ session('balance') > 0 ? '+' : ''}}<strong>{{ number_format(session('balance'), 2) }} Euro</strong></h2>

        <section class="showTransactionsArea">
            <div class="transactionsAreaHeader">
                <h2>Deine Transaktionen:</h2>
                <div>
                    <button id="newTransaction" class="fs-12">Neue Transaktion</button>
                    <button id="editTransactions" class="fs-12">Transaktion bearbeiten</button>
                    <button id="showEvaluation" class="fs-12">Auswertung</button>
                </div>
            </div>

            <article id="transactionsSection"></article>


            <div class="rangeAndDelete">
                <div id="vueSetRange"></div>

                <form action="/deleteRequest" method="POST" id="deleteRequestForm">
                    <input type="hidden" name="userId" id="userIdDeleteRequest">
                    <input type="hidden" name="transactions" id="transactionsDeleteRequest">
                    <input type="hidden" name="_token" id="tokenDeleteRequest">

                    <input id="deleteTransaction" class="fs-12 d-none" type="submit" value="Löschen">
                </form>
            </div>

            
        </section>

        <div id="vueNewTransaction"></div>

        
        
        <section class="evaluation">
            <div class="transactionsAreaHeader">
                <h2>Auswertung:</h2>

                <button class="cancel fs-12">Zurück</button>
            </div>
            

            <article>
                <div class="circleChart">
                    <canvas id="myChart"></canvas>
                </div>

                <div class="legends">
                    <p><span id="food">■</span> Nahrung</p>
                    <p><span id="restaurants">■</span> Restaraunts</p>
                    <p><span id="shopping">■</span> Einkaufen</p>
                    <p><span id="transportation">■</span> Transport</p>
                    <p><span id="living">■</span> Wohnen</p>
                    <p><span id="travel">■</span> Reisen</p>
                    <p><span id="health">■</span> Gesundheit</p>
                    <p><span id="education">■</span> Bildung</p>
                    <p><span id="entertainment">■</span> Unterhaltung</p>
                    <p><span id="wage">■</span> Lohn/Gehalt</p>
                    <p><span id="other">■</span> Andere</p>
                </div>
            </article>
        </section>
    </main>

    <script src="{{ mix('js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        let categoryInformation = new Array(@php echo($categoryInformationJson); @endphp)[0];
        let totalTransactionAmount = 0;
        let totalTransactionCount = 0;

        console.log(categoryInformation);

        Object.entries(categoryInformation).forEach(category => {
            totalTransactionAmount += category[1].amount;
        });

        let dataInformation = [];
        let backgroundColorInformation = [];

        Object.entries(categoryInformation).forEach(category => {
            let percent = (category[1].amount * 100 / totalTransactionAmount).toFixed(2).toString();
            dataInformation.push(percent);
            backgroundColorInformation.push(category[1].color);
            console.log(category[0]);

            document.getElementById(category[0]).parentElement.innerHTML += (" - " + percent + "%");
            document.getElementById(category[0]).parentElement.style.display = 'block';
            
        });

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            datasets: [{
            data: dataInformation,
            backgroundColor: backgroundColorInformation,
            }]
        },
        options: {
            legend: {
            display: false
            }
        }
        });
    </script>

    <script>
        document.getElementById('newTransaction').addEventListener('click', () => {
            document.querySelector(".newTransaction").style.display = 'block';
            document.querySelector(".showTransactionsArea").style.display = 'none';
            document.querySelector(".evaluation").style.display = 'none';
        });

        document.querySelectorAll('.cancel').forEach(button => {
            button.addEventListener('click', () => {
            document.querySelector(".newTransaction").style.display = 'none';
            document.querySelector(".showTransactionsArea").style.display = 'block';
            document.querySelector(".evaluation").style.display = 'none';
        });
        })
        
        document.getElementById('showEvaluation').addEventListener('click', () => {
            document.querySelector(".newTransaction").style.display = 'none';
            document.querySelector(".showTransactionsArea").style.display = 'none';
            document.querySelector(".evaluation").style.display = 'block';
        });

        document.getElementById('editTransactions').addEventListener('click', () => {
            document.querySelectorAll(".sign").forEach(sign => {
                sign.classList.toggle('show');
            });
            document.querySelectorAll(".checkbox").forEach(checkbox => {
                checkbox.classList.toggle('show');
                checkbox.firstChild.checked = false;
            });

            document.getElementById('deleteTransaction').classList.add('d-none');

            document.querySelectorAll('.transactionEditButton').forEach(button => {
                button.remove();
            })
        });

        let checkboxes;
        

        let transactionSuccess = "{{ $transactionSuccess }}";
        if (transactionSuccess) showToastNotification(transactionSuccess);

        const userId = {{session('id')}};

        function showToastNotification(message) {
            let toastNotification = document.createElement('div');

            toastNotification.innerHTML = "<strong>" + message + "</strong>";
            toastNotification.classList.add('toastNotification', 'positiveBc');

            document.querySelector('header').appendChild(toastNotification);

            setTimeout(function() {
                toastNotification.style.translate = '100%';
            }, 5000);

            setTimeout(function() {
                document.querySelector('header').removeChild(toastNotification);
            }, 6500);
        }

        function isValidDate(dateString) {
        const timestamp = Date.parse(dateString);
        return !isNaN(timestamp);
        }

        const compareDates = (a, b) => {
            const dateA = new Date(a.date);
            const dateB = new Date(b.date);
            return dateB - dateA;
        };

        const valueIsPositive = (amount) => {
            return amount >= 0;
        };

        const convertDate = (date) => {
                const [year, month, day] = date.split('-');
                return `${day}.${month}.${year}`;
        };

        const renderTransaction = (transaction) => {
            const newTransaction = document.createElement("p");
            let convertedDate = convertDate(transaction.date);
            newTransaction.className = valueIsPositive(transaction.amount) ? "positive" : "negative";
            newTransaction.innerHTML = `${valueIsPositive(transaction.amount) ? '<span class="sign show">+</span>' : '<span class="sign show">-</span>'}
                <label class="checkbox"><input type="checkbox" name="${transaction.id}"></label>
                <span class="additionalInfo">Name:</span> <strong class="transactionName">${transaction.name}</strong> |
                <span class="additionalInfo">Datum:</span> <strong class="transactionDate">${convertedDate}</strong> |
                <span class="additionalInfo">Betrag:</span> <strong class="transactionAmount">${(transaction.amount).toFixed(2)} Euro</strong> 
                <strong class="transactionCategory d-none">${transaction.category}</strong>`;
            return newTransaction;
        };

        const getTransactions = async (startDate = null, endDate = null) => {
            try {
                const response = await fetch(`http://localhost:8000/getTransactions/${userId}`);
                const data = await response.json();
                const sortedData = data.sort(compareDates);
                const transactionSection = document.getElementById('transactionsSection');

                transactionSection.innerHTML = "";

                sortedData.forEach(transaction => {
                    console.log(transaction);
                    if (startDate !== null && endDate !== null) {
                        if (new Date(transaction.date) >= new Date(startDate) && new Date(transaction.date) < new Date(endDate)) {
                            const newTransaction = renderTransaction(transaction);
                            transactionSection.appendChild(newTransaction);
                        }
                    } else {
                        const newTransaction = renderTransaction(transaction);
                        transactionSection.appendChild(newTransaction);
                    }
                });
            } catch (error) {
                console.error("Fehler beim Abrufen der Transaktionen:", error);
            }

            checkboxes = document.querySelectorAll('input[type="checkbox"]');
            activateCheckboxFunctions();
        };

        getTransactions();


        let countActiveCheckboxes = () => {
            let checkboxCounter = 0;

            checkboxes.forEach(checkbox => {
                checkbox.checked ? checkboxCounter++ : '';
            });

            return checkboxCounter;
        }

        let getActiveCheckbox = () => {
            let selctedCheckbox;
            checkboxes.forEach(checkbox => {
                if(checkbox.checked) selctedCheckbox = checkbox;
            });
            return selctedCheckbox;
        }
        
        let getActiveCheckboxesId = () => {
            let selctedCheckboxes = [];
            checkboxes.forEach(checkbox => {
                if(checkbox.checked) selctedCheckboxes.push(checkbox.name);
            });
            return selctedCheckboxes;
        }

        let buttonExists = (checkbox) => {
            let buttonCheck = checkbox.parentElement.parentElement.querySelector('button');

            console.log(buttonCheck);

            if(buttonCheck == null) {
                return false;
            }else {
                return true;
            }
        }

        const convertDateReverse = (date) => {
                const [day, month, year] = date.split('.');
                return `${year}-${month}-${day}`;
        };

        let showEditTransactionField = () => {
            document.querySelector(".newTransaction").style.display = 'block';
            document.querySelector(".showTransactionsArea").style.display = 'none';
            document.querySelector(".evaluation").style.display = 'none';

            document.getElementById('transactionAction').innerHTML = ('Transaktion bearbeiten:');
            document.getElementById('transactionName').value = getActiveCheckbox().parentElement.parentElement.querySelector('.transactionName').innerHTML;
            document.getElementById('transactionAmount').value = parseInt(getActiveCheckbox().parentElement.parentElement.querySelector('.transactionAmount').innerHTML);
            document.getElementById('transactionDate').value = convertDateReverse(getActiveCheckbox().parentElement.parentElement.querySelector('.transactionDate').innerHTML);
            document.getElementById('categorys').value = getActiveCheckbox().parentElement.parentElement.querySelector('.transactionCategory').innerHTML;;
            document.getElementById('submitNewTransaction').value = ('Transaktion aktualisieren');
            document.getElementById('transactionId').value = getActiveCheckbox().name;
        }

        let activateCheckboxFunctions = () => {
            console.log('Jetzt aktiv');
            checkboxes.forEach(checkbox => {
            checkbox.addEventListener('input', () => {
            
                try {
                    !checkbox.checked ? checkbox.parentElement.parentElement.querySelector('button').remove() : '';
                }catch{}
                

                if(countActiveCheckboxes() == 1 && !buttonExists(getActiveCheckbox())){
                    console.log('Eine Transaktion bearbeiten');

                    let button = document.createElement('button');
                    button.innerHTML = "Bearbeiten";
                    button.classList.add('transactionEditButton');

                    button.addEventListener('click', () => {
                        console.log('Übergebe an view Edit mit ID: ' + getActiveCheckbox().name);
                        showEditTransactionField();
                    })

                    getActiveCheckbox().parentElement.parentElement.appendChild(button);

                    console.log(getActiveCheckbox().parentElement.parentElement.lastChild);
                }


                
                if(countActiveCheckboxes() > 1) {
                    console.log('Mehrere Transaktionen bearbeiten');

                    document.querySelectorAll('.transactionEditButton').forEach(transactionEditButton => {
                        transactionEditButton.remove();
                    })
                } 

                if(countActiveCheckboxes() >= 1) {
                    document.getElementById('deleteTransaction').classList.remove('d-none');
                }else {
                    document.getElementById('deleteTransaction').classList.add('d-none');
                }  
            });
        });

        document.getElementById('deleteTransaction').addEventListener('click', (e) => {
            e.preventDefault();
            if(getActiveCheckboxesId().length > 0) {
                let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                document.getElementById('userIdDeleteRequest').value = userId;
                document.getElementById('transactionsDeleteRequest').value = JSON.stringify(getActiveCheckboxesId());
                document.getElementById('tokenDeleteRequest').value = csrfToken;

                document.getElementById('deleteRequestForm').submit()

            }
        })
        }

    </script>
</body>

</html>