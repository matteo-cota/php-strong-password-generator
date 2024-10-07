<?php
session_start();
if (!isset($_SESSION['password'])) {
    echo "Nessuna password generata.";
    exit;
}
$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Password Generata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <div class="container my-5">
        <div class="alert alert-success">
            <strong>Password generata:</strong> <?php echo htmlspecialchars($password); ?>
        </div>
        <a href="index.php" class="btn btn-secondary">Torna indietro</a>
    </div>
</body>

</html>