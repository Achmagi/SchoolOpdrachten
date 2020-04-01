<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Onzegroep1</title>
</head>
<body>
<?php
    $Studenten = array(
        array("<br>0320952" => "<br>Studentennummer: 0320952</br>" . "<br>Naam: Emre Kara</br>" . "<br>Leeftijd: 16</br>" . "<br>Adres: Enschede"),
        array("<br>0322086" => "<br>Studentennummer: 0322086</br>" . "<br>Naam: Ahmed Boutaleb Charki</br>" . "<br>Leeftijd: 16</br>" . "<br>Adres: Enschede"),
        array("<br>0320287" => "<br>Studentennummer: 0320287</br>" . "<br>Naam: Dylan Leppink</br>" . "<br>Leeftijd: 16</br>" . "<br>Adres: Haaksbergen"),
    );

    function printArray($Studenten)
    {   
        echo $Studenten;
    }

    array_walk_recursive($Studenten[array_rand($Studenten, 1)], 'printArray');
?>      
</body>
</html>