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


?>
