<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Kaartspel1</title>
</head>
<body>

<?php

    $vormen = array("ruiten", "harten", "klaveren", "schoppen");
    $waarden = array("boer", "vrouw", "heer", "1", "2", "3", "4", "5". "6", "7", "8", "9", "10");

    $kaart = rand(0, 3);
    $kaart1 = rand(0, 12);
    echo "<img src='kaarten/$vormen[$kaart]_$waarden[$kaart1].svg'>";
?>
</body>
</html>