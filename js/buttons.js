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

/*
function test (event) {
    console.dir(event);
    console.log("Test");

    console.log(event.parentNode.childNodes[3].outerText);
    event.parentNode.childNodes[3].outerText = 6;
}
*/
/*
let test1 = document.getElementById("test1");
console.dir(test1);


let test2 = document.getElementById("amountID2");
console.dir(test2);
*/
let test3 = document.getElementById("boxID1");
console.dir(test3);

/**
 * EventListener
 */




/*var plusButton1 = document.getElementById("plusButton1");
    plusButton1.addEventListener('click', function(){
        let g = this.parentNode.childNodes[3].innerHTML;
        g++;
        console.log(g);
        this.parentNode.childNodes[3].innerHTML = g; 
    });*/
    /*
    function plusOne(event){
        let g = this.parentNode.childNodes[3].innerHTML;
        g++;
        console.log(g);
        this.parentNode.childNodes[3].innerHTML = g;
    }
    */

    var plusButtonArray = document.getElementsByClassName("plusButton");

    for(var d = 0; d < plusButtonArray.length; d++){
        plusButtonArray[d].addEventListener('click', function(){
            let g = this.parentNode.childNodes[3].innerHTML;
            g++;
            console.log(g);
            this.parentNode.childNodes[3].innerHTML = g;  
        }
    )}false;

    var minusButtonArray = document.getElementsByClassName("minusButton");

    for(var q = 0; q < minusButtonArray.length; q++){
        minusButtonArray[q].addEventListener('click', function(){
            let w = this.parentNode.childNodes[3].innerHTML;
            if(w > 0){
            w--;
            console.log(w);
            this.parentNode.childNodes[3].innerHTML = w;  
            }else {
                console.log("Hat nicht getan. FUCK");
            }
        }
    )}false;

    var addToCartArray = document.getElementsByClassName("addToCart");

    for(var t = 0; t < addToCartArray.length; t++){
        addToCartArray[t].addEventListener('click', function(){
            let o = this.parentNode.childNodes[11].childNodes[3].innerHTML;
            console.log(o);
            if(o != 0){
                var form = document.createElement('form');
                form.method = 'post';

                var input1 = document.createElement('input');
                var input2 = document.createElement('input');
                var input3 = document.createElement('input');
                
                form.appendChild(input1, input2, input3);

                
            };
        });
    }