<!DOCTYPE html>
<html lang="nl">
<head>
    <title>do-while-lus</title>
</head>
<body>
    <h3>Voorbeeld van de do-while-lus</h3>
    <?php
        echo "<br>Reken het saldo uit zolang saldo lager dan 2000 is";
        $saldo = 100;
        $rente = 0.1;
        $maand = 1;
        echo "<br>Beginsaldo is: $saldo";
        echo "<br>START...";
        do
        {
            if($maand !=2)
            {
                $saldo += ($saldo * $rente);
                $saldo = sprintf("%0.2f", $saldo);
            }
            else
            {
                echo "<br>Februari betaalt geen rente";
                $maand++;
                continue;
            }
            echo "<br>Maand: $maand je saldo is: $saldo";
            $maand++;  
        }
        while($saldo < 2000 && $maand <=5);
        echo "<br>FINISH";
    ?>
</body>
</html>