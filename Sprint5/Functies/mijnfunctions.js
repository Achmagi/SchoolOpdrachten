function afmelden()
{
    var antwoord = confirm("Wilt u zich afmelden?")
    if (antwoord)
    {
        alert("U word afgemeld!!!")
        window.close()
    }
}

function begroeten()
{
    var d = new Date()
    uur = d.getHours()
    if (uur >= 0 && uur <= 11)
    {
        document.write("<br>Goedemorgen!")
    }
    else if (uur >= 12 && uur <= 17)
    {
        document.write("<br>Goedemiddag!")
    }
    else
    {
        document.write("<br>Goedenavond!")
    }
}

function dollarKoers()
{
    return (1.36)
}

function euroKoers()
{
    return (0.74)
}

function dollar_naar_euro(inputdollars)
{
    return (inputdollars * euroKoers())
}

function wissel(bedrag, valuta)
{
    if (valuta == 'euro')
    {
        return (bedrag * dollarKoers())
    }
    else if (valuta == 'dollar')
    {
        return (bedrag * euroKoers())
    }
}

euro_dollarkoers = 1.36;
dollar_eurokoers = 0.74;
euro_roebelkoers = 48.40;
roebel_eurokoers = 0.02;
function Converteer() {
    var Getal = document.getElementById("Bedrag").value;
	var Selecteren = document.getElementById("Selectie");
    var resultaat = Selecteren.options[Selecteren.selectedIndex].value;
    if (resultaat == "Dollar/Euro") {
        Getal = Getal * euro_dollarkoers;
    }
    else if (resultaat == "Euro/Dollar") {
        Getal = Getal * dollar_eurokoers;
    }
    else if (resultaat == "Ruble/Euro") {
        Getal = Getal * roebel_eurokoers;
    }
    else if (resultaat == "Euro/Ruble") {
        Getal = Getal * euro_roebelkoers;
    }
    document.getElementById("hallo").innerHTML = Getal.toFixed(2);
  }