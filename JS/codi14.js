
var text = prompt("Escriu una paraula o frase");
var lletres = [];

for (var i = 0; i < text.length; i++) {
    var lletra = text[i]; 

    if (/[a-z]/.test(lletra)) {
        if (lletres[lletra]) {
            lletres[lletra]++; 
        } else {
            lletres[lletra] = 1; 
        }
    }
}

    for(lletra in lletres){
        console.log(`${lletra}: ${lletres[lletra]}`);  
      }

