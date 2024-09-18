var a = 72;
var b = 50;


function mcd(a,b) {
 while ((a % b) != 0) {
  c = b;
  b = a % b;
  a = c;
 }
 return b;
}

function mcm(a,b) {
 return (a * b) / mcd(a,b);
}

console.log ("El mcd de " + a + " i " + b  + " es: " + mcd(a, b));
console.log ("El mcm de " + a + " i " + b  + " es " + mcm(a, b));
