<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Dobbel1</title>
</head>

<body>

<form action="dobbel1.php" method="post">
    <input type="submit" value="Gooi de dobbelstenen">
</form>

<?php

    $randomNumbers = array(rand(1, 7), rand(1, 7), rand(1, 7), rand(1, 7), rand(1, 7));
    echo "Dobbelsteen 1: " . $randomNumbers[0];
    echo "<br>Dobbelsteen 2: " . $randomNumbers[1];
    echo "<br>Dobbelsteen 3: " . $randomNumbers[2];
    echo "<br>Dobbelsteen 4: " . $randomNumbers[3];
    echo "<br>Dobbelsteen 5: " . $randomNumbers[4];

?>

</body>

</html>