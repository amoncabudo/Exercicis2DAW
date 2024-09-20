var text = prompt("Escriu una paraula o frase:");

var paraula = text.toLowerCase().match(/\b\w+\b/g);

var contador = {};

for (var a of paraula) {
    if (contador[a]) {
        contador[a]++;
    } else {
        contador[a] = 1;
    }
}

for (var a in contador) {
    console.log(`${a}: ${contador[paraula]}`);
}