<?php
function korting()
{
    $korting = 0;
    if(isset($_POST['student'])) $korting = $korting + 15;
    if(isset($_POST['klant'])) $korting = $korting + 10;
    return($korting);
}

function serviceKosten($betalingswijze)
{
    switch($betalingswijze)
    {
        case "Visa" :
           return(2);
        break; 

        case "MasterCard" :
            return(2.5);
        break;

        case "PayPal" :
            return(1.5); 
        break;

        case "Ideal" : 
            return(1);
        break;
    }
}

function facturering()
{
    $totaal = 0;
    $korting = korting();
    echo "<table>".
        "<tr>
                <th>
                    Genre
                </th>
                <th>
                    Bedrijf
                </th>
                <th>
                    Game
                </th>
                <th>
                    Aantal
                </th>
                <th>
                    Prijs
                </th>
                <th>
                    Bedrag
                </th>
             </tr>";
    for($i=0;$i<count($_POST['albumcode']);$i++)
    {
        $bedrag = (int) $_POST['aantal'][$i] * (float) $_POST['prijs'][$i];
        $totaal += (float) $bedrag;
        echo "<tr><td>".
            $_POST['genre'][$i].
            "</td><td>".
            $_POST['artiest'][$i]."</td><td>".
            $_POST['album'][$i]."</td><td>".
            $_POST['aantal'][$i]."</td><td>".
            $_POST['prijs'][$i]."</td><td>";
            printf("%.2f",$bedrag);
            echo "</td></tr>";
    }
    $korting_totaal = $totaal * ($korting/100);
    $servicekosten = serviceKosten($_POST['betaling']);
    $betalen = ($totaal - $totaal * ($korting/100)) + $servicekosten;
    ?>
    <tr>
        <td colspan="5">Totaal</td>
        <td><?php printf("%.2f",$totaal);?></td>
    </tr>
    <tr>
        <td colspan="5">Korting</td>
        <td><?php printf("%.2f",$korting_totaal);?></td>
    </tr>
    <tr>
        <td colspan="5">
            Servicekosten
        </td>
        <td>
            <?php printf("%.2f",$servicekosten);?>
        </td>
    </tr>
    <tr>
        <td colspan="5">Te betalen</td>
        <td><?php printf("%.2f",$betalen);?></td>
    </tr>
    <?php
    echo "</table>";
}

function premium()
{
    foreach($_POST['aantal'] as $aantal)
    {
        if($aantal > 5)
        {
            echo "<br>Word lid van onze premium club";
        }
    }
}
?>