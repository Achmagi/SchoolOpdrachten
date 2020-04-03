<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Lab1.07</title>
</head>
<body>
<?php
    $boeken = array(
        array("titel" => "Stoner", "auteur" => "John Williams", "genre" => "Fiction", "prijs" => 19.99),
        array("titel" => "De cirkel", "auteur" => "Dave Eggers", "genre" => "Fictie", "prijs" => 22.50),
        array("titel" => "Rayuela", "auteur" => "Cortazar", "genre" => "Fictie", "prijs" => 25.50)
    );

    function prijslijst($boeken, $confirm)
    {
        for ($i = 1; $i < 2; $i++)
        {
            echo "<br>Prijs: " . $boeken["prijs"];
        }
    }

    array_walk($boeken, "prijslijst");
?>
</body>
</html>