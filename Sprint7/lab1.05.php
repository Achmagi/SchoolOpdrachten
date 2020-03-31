<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Datatypen</title>
</head>
<?php
    $fromage = [];
    $fromage[0] = "een";
    $fromage[1] = "twee";
    $fromage[2] = 3;
    $fromage[3] = "vier";

    echo "Stap 3 <br>"; 
    array_push($fromage, 5);
    print_r($fromage);
    echo "<br>";
    var_dump($fromage[4]);
    array_pop($fromage);
    echo "<br>";
    print_r($fromage);
    echo "<br>";
    array_unshift($fromage, "");
    print_r($fromage);
    array_shift($fromage);
    echo "<br>";
    print_r($fromage);
    array_shift($fromage);
    echo "<br>";
    print_r($fromage);
    array_shift($fromage);
    echo "<br>";
    print_r($fromage);
?>
</html>