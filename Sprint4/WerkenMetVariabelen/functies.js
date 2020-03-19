
function toonPrompt()
{
    var code = prompt('Vul uw promotiecode in', 'uw code')
    var tekst = document.getElementById("kaas").innerHTML
    document.write(tekst + " "  + code)
}
