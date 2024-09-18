var numero = prompt("Escriu un numero:");
var resultat;

function calcularFactorial(numero) {
  var factorial = 1;
  for (var i = 1; i <= numero; i++) {
    factorial *= i;
  }
  return factorial;
}

if (numero >= 0) {
  resultat = calcularFactorial(numero);
  console.log("El factorial de " + numero + " es " + resultat);
} else {
  console.log("No pots utilizar numeros negatius");
}
