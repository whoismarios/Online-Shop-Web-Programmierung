//let plusButton = document.getElementById("plusButton");
//let minusButton = document.getElementById("minusButton");
//let amountLabel = document.getElementById("amountLabel");
let badgeID = document.getElementById("badgeID");


function badgeCounter(){
    //Speichere den Inhalt des Labels in einer Variable
    let j = amountLabel.innerHTML;

    //Erstelle eine Variable mit dem aktuellen Wert des Badge-Elements
    let badge = badgeID.innerHTML;

    //Das Badge Element und der Wert, um den er erhöht wird, werden addiert
    badge = badge + j;

    //Zeige den neuen Wert für die Anzahl der Artikel im Warenkorb
    badgeID.innerHTML = badge;

    //Setze das Label zurück auf 0
    amountLabel.innerHTML = 0;
}


function addToCart(){
    //TODO
    
    
    //Führe die Badge Counter Methode aus, nachdem die Artikel dem Warenkorb zugefügt worden sind
    badgeCounter();
}

function test (event) {
    console.dir(event);
    console.log("Test");

    console.log(event.parentNode.childNodes[3].outerText);
    event.parentNode.childNodes[3].outerText = 6;
}

let test1 = document.getElementById("test1");
console.dir(test1);
