<?php

$vandaag = date_create('now');

$evenement = $_GET['evenement'];
$dateevent = date_create($_GET['dateevent']);

$intervalDatum = date_diff($vandaag, $dateevent);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hoelangnog.php" method="get">
        <label for="evenement">Evenement:</label>
        <input type="text" name="evenement" id="evenement" required>
        <label for="dateevent">Datum:</label>
        <input type="date" name="dateevent" id="dateevent" required>
        <input type="submit" value="Submit">
    </form>

    <?= "Het duurt nog " . $intervalDatum->format('%a dagen') . " tot $evenement"; ?>
    
</body>
</html>