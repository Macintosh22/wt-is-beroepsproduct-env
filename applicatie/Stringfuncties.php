<?php

//Hier een aantal string functies

strlen($var); //Geeft het aantal tekens terug van de string
strtoupper($var): //Tekst naar hoofdletters omzetten
strtolower($var); //Tekst naar kleine letters omzetten
strip_tags($var); //Haalt alle tags weg van een HTML of PHP tag


//Meerdere regels in een string wil opslaan dan kan ik dat doen met

$mijnTekst = <<<EOT
Hier komt nu een enorm lange tekst over
allemaal dingen die stopt als de bovenstaande karakters
worden aangeroepen zoals hieronder:
EOT;

?>