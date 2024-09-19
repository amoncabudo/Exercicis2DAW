
        var text = prompt("Escriu una paraula o frase");
        var vocals = 0;
        var consonants = 0;

        for (var i = 0; i < text.length; i++) {
            var lletra = text[i].toLowerCase();

            if (/[a-z]/.test(lletra)) { 
                if ('aeiou'.includes(lletra)) {
                    vocals++;
                } else {
                    consonants++;
                }
            }
        }

        document.write('<h2>Resultados:</h2>');
        document.write('<table>');
        document.write('<tr><th>Tipo</th><th>Cantidad</th></tr>');
        document.write('<tr><td>Vocales</td><td> ' + vocals + '</td></tr>');
        document.write('<tr><td>Consonantes</td><td> ' + consonants + '</td></tr>');
        document.write('</table>');
 
