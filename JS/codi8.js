var numusuari = parseInt(prompt("Escriu un numero"));

if (numusuari < 0) {
    console.log("El número debe ser mayor o igual a 0" + numusuari);
} else {
    var num0 = 0;
    var num1 = 1;
    var a = 0;

    for (var i = 2; i <= numusuari; i++) {
        a = num0 + num1;
        num0 = num1;
        num1 = a;  
    }

    console.log(a);
}
