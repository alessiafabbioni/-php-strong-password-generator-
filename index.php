<?php
// Funzione per generare una password casuale
function generaPasswordCasuale($lunghezza) {
    $caratteriMinuscoli = 'abcdefghijklmnopqrstuvwxyz';
    $caratteriMaiuscoli = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $simboli = '!@#$%^&*()_+[]{}|;:,.<>?';

    $tuttiCaratteri = $caratteriMinuscoli . $caratteriMaiuscoli . $numeri . $simboli;

    // Mescola i caratteri per ottenere una password più casuale
    $tuttiCaratteri = str_shuffle($tuttiCaratteri);

    // Estrai la lunghezza desiderata della password
    $passwordGenerata = substr($tuttiCaratteri, 0, $lunghezza);

    return $passwordGenerata;
}

// Verifica se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["mail"])) {
    // Ottieni l'email dall'input del form
    $mail = $_GET["mail"];

    // Ottieni la lunghezza della password dall'input del form
    $lunghezzaPassword = $_GET["lunghezza_password"];

    // Genera la password casuale
    $passwordCasuale = generaPasswordCasuale($lunghezzaPassword);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <form method="get">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password Length</label>
                <input type="number" name="lunghezza_password" class="form-control" id="exampleInputPassword1" required min="1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        // Mostra la password generata se è disponibile
        if (isset($passwordCasuale)) {
            echo "<p class='mt-3'>La tua password casuale è: <strong>$passwordCasuale</strong></p>";
        }
        ?>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    

</body>
</html>