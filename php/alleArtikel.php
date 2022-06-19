<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle Artikel</title>

   <?php
    include 'imports/headerImport.php';
   ?> 

</head>
<body>

    <!-- NAV IMPORT -->
    <?php
        include 'imports/navImport.php';
    ?>
     <!-- Dynamic Titel Import -->
    <?php
        include 'imports/titelImport.php';
    ?> 

    <!-- DB Settings and Connection Import -->
    <?php
        include "imports/dbSettingsImport.php";
    ?>

    <!-- ALLE ARTIKEL LAYOUT -->

    <div class="containerAlle">
        <div class="box">
            <img src="../images/alleArtikel/1.jpg" class="imageClass">
            <h3 class="artikelNameH3">  Variant M4310 <!--  Artikelname  -->    </h3>
            <p class="artNrPräfix">Art.-Nr.: <span class="artikelNummerSpan">   1<!-- Artikelnummer --></span> Bestand: <span class="artikelNummerSpan">10</span> </p>
            <p class="beschreibungP">  20 Beutel<!-- Beschreibung -->   </p>
            <h4 class="priceSpan">   <!-- Preis --> 19.90€  </h4>
            <div class="amountDiv">
                <button class="amountButtons" id="minusButton">-</button>
                <label for="amount" class="amountLabel" id="amountLabel">0</label>
                <button class="amountButtons" id="plusButton">+</button>
            </div>
            <button class="addToCart" id="addToCart">In den Warenkorb</button>
        </div>


        <?php
            include 'imports/dbSettingsAndConnImport.php';

            $sql = "SELECT * FROM artikel";

            foreach($conn->query($sql) as $row){
                echo "
                <div class='box'>
                <img src='../images/alleArtikel/1.jpg' class='imageClass'>
                <h3 class='artikelNameH3'>".$row['kurztext']."</h3>
                <p class='artNrPräfix'>Art.-Nr.: <span class='artikelNummerSpan'>".$row['artNr']."</span> Bestand: <span class='artikelNummerSpan'>10</span> </p>
                <p class='beschreibungP'>  20 Beutel<!-- Beschreibung -->   </p>
                <h4 class='priceSpan'>   <!-- Preis --> 19.90€  </h4>
                <div class='amountDiv'>
                    <button class='amountButtons' id='minusButton'>-</button>
                    <label for='amount' class='amountLabel' id='amountLabel'>0</label>
                    <button class='amountButtons' id='plusButton'>+</button>
                </div>
                <button class='addToCart' id='addToCart'>In den Warenkorb</button>
            </div> 
                ";
            }
            $conn=null;
        ?>

        <div class="box">2</div>
        
        <div class="box">3</div>
        
        <div class="box">4</div>
    </div>

     




    <!--FOOTER IMPORT -->
    <?php
        include 'imports/footerImport.php';
    ?>

    <!-- SCRIPT IMPORT -->
    <?php
        include 'imports/scriptImport.php';
    ?>    
</body>
</html>