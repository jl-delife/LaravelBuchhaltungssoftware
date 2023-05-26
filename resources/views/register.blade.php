<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <section class="header-content">
            <h1>Buchhaltungssoftware</h1>
            <a href="#">
                <a href="/login">
                    <p>Login</p>
                </a>
            </a>
        </section>
    </header>

    <main>
        <h2>Register</h2>

        <form action="/registerRequest" method="POST">
            @csrf
            <div>
                <label for="username">Benutzername</label>
                <input type="text" id="username" name="username" minlength="3" maxlength="15">
            </div>
            <div>
                <label for="password">Passwort</label>
                <input type="password" id="password" name="password" minlength="4" maxlength="15">
            </div>

            <input id="submit" type="submit" value="Registrieren">
        </form>

        <p>Du hast bereits einen Account? -> <a href="/login">Login</a></p>
    
        @php 
        if(!isset($success)) $success = null;
        if(!isset($error)) $error = null;
        @endphp
    </main>

    <script>
        let successMessage = "{{ $success }}";
let errorMessage = "{{ $error }}";

if (successMessage) {
    showToastNotificationSuccess(successMessage);
}

if (errorMessage) {
    showToastNotificationError(errorMessage);
}


        function showToastNotificationSuccess(message) {
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

        function showToastNotificationError(message) {
            let toastNotification = document.createElement('div');

            toastNotification.innerHTML = "<strong>" + message + "</strong>";
            toastNotification.classList.add('toastNotification', 'negativeBc');

            document.querySelector('header').appendChild(toastNotification);

            setTimeout(function() {
                toastNotification.style.translate = '100%';
            }, 5000);

            setTimeout(function() {
                document.querySelector('header').removeChild(toastNotification);
            }, 6500);
        }
    
    </script>
</body>

</html>