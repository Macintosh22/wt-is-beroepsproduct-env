<?php
$naam = "Jan Janssen";
$leeftijd = 27;
$spaarsaldo = 1050.68;
$getrouwd = false;


//Werken met constanten in PHP

define("PI", "3.15");
define("PI2", '3.1415');


//Handige methodes om te debuggen

echo gettype($naam);
echo gettype($leeftijd);

//In html code

echo var_dump($var);
echo var_dump($var):

//Controleren of getal een waarde is

is_numeric($var)  //Contoleren of een waarde een getal is
round($var) // Om een getal met decimalen af te ronden
floor($var) // Om een getal naar het laagst dichtbijzijnde getal af te ronden
ceil($var) //Om een getal naar het hoogst dichtbijzijnde getal af te ronden
number_format($var) //Om een getal om te zetten naar een optimaal leesbare string
intval($var) //Om een string naar een int om te zetten
floatval($var) //Om een string naar en float om te zetten

//Aanhalingstekens

$naam = 'Marie';
$bericht = "Dag $naam!"

$bedrijf = "In PHP is dit een string: "

echo 'Dit zijn ' .$artikels. ' van ' .$naam;
echo "Dit zijn $artikels van $naam";


$naamFunctie = "Meron";

$html = "<h1>{$naam}</h1>";

function titel($titelTekst) {
    return "<h1>{$titelTekst}</h1>";
}

$html = . titel($naam);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$html?>
</body>
</html>
