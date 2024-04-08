<?php


$vandaag = date_create('now');
$datum = $vandaag->format('d-M-Y');

$voornaam = $_GET['voornaam'];

$naam = $voornaam;

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Hallo <?= $naam ?>.<br>
    Het is vandaag <?= $datum ?>.
</body>
</html>