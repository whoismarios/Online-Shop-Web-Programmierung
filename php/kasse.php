<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasse</title>

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

    <!-- Inhalt -->
    <div class="warenkorbDiv">
        <div class="artikel">
            <h3 style="font-weight: bold;">Summe Warenkorb: </h3>
            <span></span>
            <span></span>
            <h3 style="font-weight: bold;" id="warenkorbSumme">0</h3>
            <h3 style="font-weight: bold;">€</h3>
            <span></span>
        </div>
        <div class="artikel">
            <h3 style="font-weight: bold;">Versandkosten: </h3>
            <span></span>
            <span></span>
            <h3 style="font-weight: bold;" id="versadkostenID">0</h3>
            <h3 style="font-weight: bold;">€</h3>
            <span></span>
        </div>
        <div class="artikel">
            <h3 style="font-weight: bold;">Gesamtsumme: </h3>
            <span></span>
            <span></span>
            <h3 style="font-weight: bold;" id="gesamtSumme">0</h3>
            <h3 style="font-weight: bold;">€</h3>
            <span></span>
        </div>
        <div class="versandKostenDiv">
            <div class="versandArt">
                <input class="versandkosten" type="radio" name="versandkosten" value="9.00" id="dpd">DPD Versand</input>
                <label for="versandkosten">9€</label>
            </div>
            <div class="versandArt">
                <input class="versandkosten" type="radio" name="versandkosten" value="19.00" id="dhl">DHL Versand</input>
                <label for="versandkosten">19€</label>
            </div>
            <div class="versandArt">
                <input class="versandkosten" type="radio" name="versandkosten" value="33.00" id="express">DHL Express Versand</input>
                <label for="versandkosten">33€</label>
            </div>    
        </div>

        <br><br>
        <button class="kasse" onclick="location.href = 'kasse.php';">
            Zahlen
        </button> 
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