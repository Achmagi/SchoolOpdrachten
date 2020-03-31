<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Datatypen</title>
</head>
<body>

<?php

    $playlist = array(
        array("genre" => "Hiphop", "auteur" => "John Williams", "titel" => "My Girl"),
        array("genre" => "Jazz", "auteur" => "John Coltrane", "titel" => "New York"),
        array("genre" => "Hiphop", "auteur" => "Shakira", "titel" => "Obsession")
    );

    function printArray($item, $key){
        echo "<br>$key" . ": " . "<i> $item <i>";
    }

    array_walk_recursive($playlist, 'printArray');

    $playlist[3] = array("Genre" => "Latin", "auteur" => "Ceatano Veloso", "titel" => "Cafe Atlantico");

    echo "<br>Track 0: HipHop|John Williams|MyGirl";
    echo "<br>Track 1: Jazz|John Coltrane|New York";
    echo "<br>Track 2: HipHop|Shakira|Obsession";
    echo "<br>Track 3: Latin|Caetano Veloso|Cafe Atlantico";

?>


</body>
</html>