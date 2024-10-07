<?php
session_start();
require_once 'functions.php';
$password = '';


if (isset($_GET['lunghezza']) && $_GET['lunghezza'] > 0) {
    $lunghezza = intval($_GET['lunghezza']);
    $password = generaPassword($lunghezza);
    $_SESSION['password'] = $password;
    header('Location: mostra_password.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Generatore di Password Sicure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <div class="container my-5">
        <h1 class="text-center mb-4">Strong Password Generator</h1>
        <h3 class="text-center">Genera una password sicura</h3>
        <div class="card p-4">
            <form method="GET" action="">
                <div class="form-group py-3">
                    <label for="lunghezza">Lunghezza password:</label>
                    <input type="number" name="lunghezza" id="lunghezza" min="1" required class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Genera</button>
            </form>
        </div>
    </div>
</body>

</html>