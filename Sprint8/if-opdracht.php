<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>if-opdracht</title>
</head>
<body>
<?php
    $gewerkteuren = 45;
    $uurtarief = 15.00;
    $bonus = 100.00;
    $bruto = $gewerkteuren * $uurtarief;
    $belasting = 0.40 * $bruto;
    $belasting2 = 0.45 * $bruto;
    $netto = $bruto - $belasting;
    if($gewerkteuren <= 40)
    {
        echo "Uw basissalaris is: € ". $bruto;
        echo "<br>Uw belasting is: € ". 0.40 * $bruto;
        echo "<br>Uw nettobedrag is: € ". $netto;
    }
    elseif($gewerkteuren > 40)
    {
        echo "Uw basissalaris is: € ". $bruto;
        echo "<br>Uw basissalaris plus bonus is: € ". ($bruto + $bonus);
        echo "<br>Uw belasting is: € ". 0.45 * $bruto;
        echo "<br>Uw nettobedrag is: € ". ($bruto - $belasting2);
    }

    $ternary = ($gewerkteuren < 40 ? "<br>Belasting is 40%" : "<br>Belasting is 45%");
    echo $ternary;
?>
</body>
</html>