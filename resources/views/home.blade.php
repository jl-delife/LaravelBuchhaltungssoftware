@php
if(session('id') == null) {
    $url = "http://localhost:8000/login?error=" . urlencode('Keine ID mitgegeben!');
    header("Location: " . $url);
    exit;
}

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
                <button id="newTransaction" class="fs-12">Neue Transaktion</button>
            </div>

            <article id="transactionsSection"></article>

            <div id="vueSetRange"></div>
        </section>

        <section class="newTransaction">
            <div class="transactionsAreaHeader">
                <h2>Neue Transaktion:</h2>
            </div>
            
            <div id="vueNewTransaction"></div>
        </section>
    </main>

    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        document.getElementById('newTransaction').addEventListener('click', () => {
            document.querySelector(".newTransaction").style.display = 'block';
            document.querySelector(".showTransactionsArea").style.display = 'none';
        });

        document.getElementById('cancel').addEventListener('click', () => {
            document.querySelector(".newTransaction").style.display = 'none';
            document.querySelector(".showTransactionsArea").style.display = 'block';
        });

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
            newTransaction.innerHTML = `${valueIsPositive(transaction.amount) ? '+' : '-'}
                <span class="additionalInfo">Name:</span> <strong>${transaction.name}</strong> |
                <span class="additionalInfo">Datum:</span> <strong>${convertedDate}</strong> |
                <span class="additionalInfo">Betrag:</span> <strong>${(transaction.amount).toFixed(2)} Euro</strong>`;
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
        };

        getTransactions();

    </script>
</body>

</html>