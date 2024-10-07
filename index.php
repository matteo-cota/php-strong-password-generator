<?php
function generaPassword($lunghezza)
{
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&()';
    $password = '';

    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $caratteri[random_int(0, strlen($caratteri) - 1)];
    }

    return $password;
}

$password = '';

if (isset($_GET['lunghezza'])) {
    $lunghezza = intval($_GET['lunghezza']);
    $password = generaPassword($lunghezza);
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

            <?php if ($password): ?>
                <div class="alert alert-success mt-4">
                    <strong>Password generata:</strong> <?php echo htmlspecialchars($password); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>