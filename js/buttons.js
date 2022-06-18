/*

        Mein Webbrowser zeigt den gesamten Inhalt der js-Datei nicht an

        pls fix

        PS: Styling fehlt immer noch

*/


let addToCart = document.getElementById("addToCart");
let plusButton = document.getElementById("plusButton");
let minusButton = document.getElementById("minusButton");
let amountLabel = document.getElementById("amountLabel");

plusButton.addEventListener('click', plusOne);
minusButton.addEventListener('click', minusOne);

function plusOne(){
    let j = document.getElementById("amountLabel").innerHTML;

    
    console.log(j); //Auf der Konsole wird nichts angezeigt oder geloggt
    
    j++;
    amountLabel.innerHTML = j;
}

function minusOne(){
   let i = document.getElementById("amountLabel").innerHTML; 
    
    if(i > 0){
        i--;
        document.getElementById("amountLabel").innerHTML = i;
    } else {
        throw new Exception("A negative Amount is not possible!");
    }
}