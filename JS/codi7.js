var n = parseInt(prompt("Escriu un número:"));

var count = 0;
var num = 2;
var primes = [];

while (count < n) {
    var isPrime = true;
    
    for (var i = 2; i <= Math.sqrt(num); i++) {
        if (num % i === 0) {
            isPrime = false;
            break;
        }
    }

    if (isPrime) {
        primes.push(num);
        count++;
    }    
    num++;
}

console.log( n + " números primers: " + primes);
