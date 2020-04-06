<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
          content="text/html";
          charset="UTF-8" />
    <title>Inschrijfformulier</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<h3>Inschrijfformulier</h3>
<form action="lab1.08Verwerken.php">
    <table style="width:10%">
        <tr><td>Achternaam:</td> <td><input type="text" name="achternaam" placeholder="Achternaam"><br></td></tr>
        <tr><td>Voornaam: </td><td><input type="text" name="voornaam" placeholder="Voornaam"><br></td></tr>
        <tr><td>Straat: </td><td><input type="text" name="straat" placeholder="Straatnaam"><br></td></tr>
        <tr><td>Postcode:</td><td> <input type="text" name="postcode" placeholder="Postcode"><br></td></tr>
        <tr><td>Plaats: </td><td><select id="plaats" name="plaats">
                    <option value=""></option>
                    <option value="Hengelo">Hengelo</option>
                    <option value="Borne">Borne</option>
                    <option value="Enschede">Enschede</option></td></tr>
        </select><br>
        <tr><td> E-mailadres:</td><td><input type="text" name="email" placeholder="Plaatsnaam"><br></td></tr>
    </table>
    <div class="keuze">
        <br>Kies een opleiding: <br />
        <input type="checkbox" name="ict" value="ICT"/>
        ICT<br/>
        <input type="checkbox" name="engels" value="Engels"/>
        Engels<br/>
        <input type="checkbox" name="techniek" value="Techniek"/>
        Techniek<br/>
        <input type="checkbox" name="nederlands" value="Nederlands"/>
        Nederlands<br/><br>
        <input type="submit" value="Versturen">
        <input type="reset" value="Reset">
</form>
</body>
</html>
<?php
if ( ! empty($_POST['achternaam'])){
    $achternaam = $_POST['achternaam'];
}
if ( ! empty($_POST['voornaam'])){
    $voornaam = $_POST['voornaam'];
}
if ( ! empty($_POST['straat'])){
    $straat = $_POST['straat'];
}
if ( ! empty($_POST['postcode'])){
    $postcode = $_POST['postcode'];
}
if ( ! empty($_POST['ict'])){
    $ict = $_POST['ict'];
}
if ( ! empty($_POST['engels'])){
    $engels = $_POST['engels'];
}
if ( ! empty($_POST['techniek'])){
    $techniek = $_POST['techniek'];
}
if ( ! empty($_POST['nederlands'])){
    $nederlands = $_POST['nederlands'];
}
if ( ! empty($_POST['email'])){
    $email = $_POST['email'];
}
if ( ! empty($_POST['plaats'])){
    $plaats = $_POST['plaats'];
}
?>