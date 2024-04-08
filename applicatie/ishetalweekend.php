
<?php

function isHetAlWeekend($dag) {
    switch($dag) {
        case 1:
            return 'Nee, nog lang niet.';
        break;
        case 2:
            return 'Nee, nog lang niet.';
        break;
        case 3:
            return 'Nog even wachten.';
        break;
        case 4:
            return 'Nog even wachten.';
        break;
        case 5:
            return 'Bijna!';
        break;
        case 6:
            return 'Jaaaa, het is weekend!';
        break;
        case 7:
            return 'Jaaaa, het is weekend!';
        break;
    }
}

$vandaag = date_create('now');
$dagTelling = $vandaag->format('w');

$isHetAlWeekendEcho = isHetAlWeekend($dagTelling);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $isHetAlWeekendEcho ?>
</body>
</html>