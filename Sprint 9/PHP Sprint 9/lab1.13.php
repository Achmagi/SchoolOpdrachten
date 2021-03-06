<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
        content="text/html;
        charset=utf-8">
    <style>
        .album{clear: left; width: 100%;}
        .omslag{float: left;}
        .gegevens{float: left; padding-left: 20px;}
        .korting{clear: left;}
        .aantal{background-color: #f8ce6c;}
    </style>
    <title>Winkelmandje</title>
</head>
<body style="font-family: Verdana; font-size: 9px;">
<h3>Mijn winkelmandje<h3>
<form name="albums" action="" method="post">
    <div class="album">
        <div class="omslag">
            <img src="Animal_Crossing_New_Horizons.jpg" width="50px" alt="X">
        </div>
        <div class="gegevens">
            Cesaria Evora "Em Um Concerto"  Prijs: $9
            <input type="hidden" name="albumcode[0]" value="001">
            <input type="hidden" name="artiest[0]" value="Cesaria Evora">
            <input type="hidden" name="album[0]" value="Em Um Concerto">
            <input type="hidden" name="prijs[0]" value="9">
            <input type="hidden" name="genre[0]" value="World">
        <br />Aantal:
                <input type="text" size=2 maxlength=3 name="aantal[0]" class="aantal" value="0">
        </div>
    </div>

    <div class="korting">
    <br><hr />Korting:<br />
    <input type="checkbox" name="student" value="15" />
    Student: 15%<br />
    <input type="checkbox" name="klant" value="10" />
    Klant: 10%<br />
    </div>

    <div class="betalingswijze">
    <p>Selecteer een betalingswijze:</p>
    <select name="betaling" value="true">
        <option value="Visa">Visa</option>
        <option value="MasterCard">MasterCard</option>
        <option value="PayPal">PayPal</option>
        <option value="Ideal">Ideal</option>
    </select>
    <input type="submit" name="submit"
    value="Bestelling">
    </div>
    </form>

<?php
    $aantal = 0;
    $korting = 0;
    
    if(!empty($_POST["aantal"][0]))
    {
        $aantal = $_POST["aantal"][0];
    }
    echo "<br>Bestelde albums: $aantal";
    
    if(isset($_POST["student"]))
    {
        $korting = $korting + 15;
    }
    if(isset($_POST["klant"]))
    {
        $korting = $korting + 10;
    }
    echo "<br>Korting is: $korting%";

    if(isset($_POST["submit"]))
    {

        include_once("externe_functions.php");
        echo "<br>De korting()-function: " . korting() . "%";
        $betalingswijze = $_POST['betaling'];
        $serviceKosten = serviceKosten($betalingswijze);
        echo "<br>Servicekosten zijn: €" . $serviceKosten;

        switch($_POST['betaling'])
        {
            case "Visa" :
                echo"<p>Betalingswijze: Paypal</p>";
            break;

            case "MasterCard" :
                echo"<p>Betalingswijze: MasterCard</p>";
            break;

            case "PayPal" :
                echo"<p>Betalingswijze: PayPal</p>";
            break;

            case "Ideal" :
                echo"<p>Betalingswijze: Ideal</p>";
            break;

            default :
                echo"<p>Geen betalingswijze geselecteerd</p>";
            break;
        }
    }
?>
</body>
</html>