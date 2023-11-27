<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$paragrafo = $_POST["paragrafo"];
$parolaCensurare = $_POST["parola_censurare"];

// Stampa il paragrafo e la sua lunghezza
echo "<p>Paragrafo inserito: $paragrafo</p>";
echo "<p>Lunghezza del paragrafo: " . strlen($paragrafo) . " caratteri</p>";

// Sostituisce la parola da censurare con tre asterischi
$paragrafoCensurato = str_ireplace($parolaCensurare, '***', $paragrafo);

// Stampa il paragrafo censurato e la sua lunghezza
echo "<p>Paragrafo censurato: $paragrafoCensurato</p>";
echo "<p>Lunghezza del paragrafo censurato: " . strlen($paragrafoCensurato) . " caratteri</p>";
?>
</body>
</html>