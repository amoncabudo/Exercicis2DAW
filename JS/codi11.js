var paraula = prompt("Escriu una paraula");

function invertirCadena(cad) {
    var nuevaCadena = "";
    for (var i = cad.length - 1; i >= 0; i--) {
        nuevaCadena += cad[i];
    }
    return nuevaCadena;
}
document.write(invertirCadena(paraula));
