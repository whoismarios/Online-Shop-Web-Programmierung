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
            <h3 style="font-weight: bold;">Gesamtsumme: </h3>
            <h3 style="font-weight: bold;">0€</h3>
            <span></span>
        </div>
        <div class="versandKostenDiv">
            <input class="versandkosten" type="radio" name="versandkosten">DPD Versand</input>
            <input class="versandkosten" type="radio" name="versandkosten">DHL Versand</input>
            <input class="versandkosten" type="radio" name="versandkosten">DHL Express Versand</input>
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