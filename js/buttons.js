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


//let test3 = document.getElementById("boxID1");
//console.dir(test3);

/**
 * EventListener
 */

   /* var plusButtonArray = document.getElementsByClassName("plusButton");

    for(var d = 0; d < plusButtonArray.length; d++){
        plusButtonArray[d].addEventListener('click', function(){
            let g = this.parentNode.childNodes[3].innerHTML;
            g++;
            console.log(g);
            this.parentNode.childNodes[3].innerHTML = g;  
        }
    )}false;*/
/*
    function plusOne(event){
        console.log("test");
        console.dir(event);
        event.preventDefault();
        //console.dir(event);
        /*
            let g = this.parentNode.childNodes[3].innerHTML;
            g++;
            console.log(g);
            this.parentNode.childNodes[3].innerHTML = g;  */
    
    

    //var minusButtonArray = document.getElementsByClassName("minusButton");
    /*
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
*/
/*
    var addToCartArray = document.getElementsByClassName("addToCart");

    for(var t = 0; t < addToCartArray.length; t++){
        addToCartArray[t].addEventListener('click', function(){
            let o = this.parentNode.childNodes[11].childNodes[3].innerHTML;
            console.log(o);
            if(o != 0){
                
                let r = badgeID.innerHTML;
                var sum = r+o;
                badgeID.innerHTML = sum;

                this.parentNode.childNodes[11].childNodes[3].innerHTML = 0;               
                
            };
        });
    }
    */