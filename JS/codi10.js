    var size = prompt("Escriu un numero");
        
        var blanco = "____";
        var negro = "███";
        
        document.write("<h2>Taulell d'escacs<h2>");
        document.write ("<table border='1'>");
        
        for (a = 1; a <= size; a++) {
            document.write ("<tr>");
            for (i = 1; i <= size; i++) { 
                if ((a + i) % 2 == 0) {
                    document.write("<td>"+ negro +"</td>");
                } else {
                    document.write("<td>"+ blanco +"</td>");
                }
            }
            document.write ("</tr>");
        }
        
        document.write ("</table>");
    

