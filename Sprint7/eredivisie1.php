<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Eredivisie</title>
</head>
<?php

$VoetballClubs = array(
    array("<br>VoetballClub: Heracles","<br>Nummer: 7","<br>Plaats: Almelo","<br>Wedstrijden gespeeld: 15","<br>Wedstrijden gewonnen: 11","<br>Wedstrijden verloren: 3","<br>Wedstrijden gelijk gespeeld: 4<br>"),
    array("<br>VoetballClub: PSV","<br>Nummer: 1","<br>Plaats: Eindhoven","<br>Wedstrijden gespeeld: 17","<br>Wedstrijden gewonnen: 12","<br>Wedstrijden verloren: 2","<br>Wedstrijden gelijk gespeeld: 2<br>")
);

function printArray($VoetballClubs)
{
    echo $VoetballClubs;
}

array_walk_recursive($VoetballClubs,'printArray');

?>
</html>
