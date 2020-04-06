<?php
$achternaam = "";
$voornaam = "";
$straat = "";
$postcode = "";
$plaats = "";
$email = "";
if ( ! empty($_GET['achternaam'])){
    $achternaam = $_GET['achternaam'];
}
if ( ! empty($_GET['voornaam'])){
    $voornaam = $_GET['voornaam'];
}
if ( ! empty($_GET['straat'])){
    $straat = $_GET['straat'];
}
if ( ! empty($_GET['postcode'])){
    $postcode = $_GET['postcode'];
}
if ( ! empty($_GET['email'])) {
    $email = $_GET['email'];
}
if ( ! empty($_GET['plaats'])){
    $plaats = $_GET['plaats'];
}
if ( ! empty($_GET['ict'])){
    $keuze = "ICT opleidingen zijn vol. Kies een andere opleiding.";
}
if ( ! empty($_GET['engels'])){
    $keuze = "Engels";
}
if ( ! empty($_GET['techniek'])){
    $keuze = "Techniek";
}
if ( ! empty($_GET['nederlands'])){
    $keuze = "Nederlands";
}
echo "<br><h3><b>". "Uw gegevens zijn". "</b></h3>";
echo "<br><b>". "Achternaam: " . "</b>", $achternaam;
echo "<br><b>". "Voornaam: " . "</b>", $voornaam;
echo "<br><b>". "Straat: " . "</b>", $straat;
echo "<br><b>". "Postcode: " . "</b>", $postcode;
echo "<br><b>". "Plaats: " . "</b>", $plaats;
echo "<br><b>". "E-mailadres: " . "</b>", $email . "<br>";
echo "<br><b>". "U word ingeschreven voor de volgende opleiding: " . "</b>";
echo "<br>". $keuze;
?>