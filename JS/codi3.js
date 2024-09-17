var n1 = prompt("Escriu un numero");
var n2 = prompt("Escriu un altre numero");
var operacio = prompt("Vols multiplicar o sumar?");
n1 = parseInt(n1);
n2 = parseInt(n2);

function sumar (n1,n2){
    return n1 + n2;
}

function multiplicar (n1,n2){
    return n1 * n2;
}

if (operacio == "sumar") {
    console.log(sumar(n1,n2))
}else if (operacio == "multiplicar"); {
    console.log(multiplicar(n1,n2));
}

