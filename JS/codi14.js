var paraula = prompt("Escriu una paraula");

function contar(letra) {
    var cont = 0;

    for (var i = 0; i < paraula.length; i++) {
        var let = paraula(i, i + 1); 
        if (letra === let) { 
            cont++;
        }
    }
    document.write(cont);
}
   