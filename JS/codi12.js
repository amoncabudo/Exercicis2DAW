var paraula = prompt("Quina paraula vols comprovar")

function palindromo(text) {
    const textinvert = text.split("").reverse().join("");
    if (text === textinvert) {
      document.write ("es palindromo");
    } else {
      document.write ("no es palindromo");
    };
  
  };  
  
palindromo(paraula);