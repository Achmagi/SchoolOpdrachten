<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
    content="text/html;charset=UTF-8" />
    <title>for-lus</title>
</head>
<body>
<h3>Voorbeeld van de for-lus</h3>
<?php
    echo "We willen de for-lus 10 rondjes laten lopen<br />";
    echo "Klaar voor de START...<br />";
    for($teller = 5; $teller < 13; $teller++)
    {
        echo "Dit is rondje $teller <br>";
    }
    echo "FINISH...";
?>
</body>
</html>