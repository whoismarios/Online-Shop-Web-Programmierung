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
        <?php
            include 'imports/dbSettingsAndConnImport.php';

            $sql = "SELECT * FROM artikel";
            

            foreach($conn->query($sql) as $row){
                $i=1;
                echo "
                <div class='box'>
                    <img src='../images/alleArtikel/".$row['artNr'].".jpg' class='imageClass'>
                    <h3 class='artikelNameH3'>".$row['kurztext']."</h3>
                    <p class='artNrPräfix'>Art.-Nr.: <span class='artikelNummerSpan'>".$row['artNr']."</span> Bestand: <span class='artikelNummerSpan'>".$row['bestand']."</span> </p>
                    <p class='beschreibungP'>".$row['beschreibung']."</p>
                    <h4 class='priceSpan'>".$row['preis']."</h4>
                    <div class='amountDiv'>
                        <button class='minusButton' id='minusButton".$i."'>-</button>
                        <label for='amount' class='amountLabel' id='amountLabel".$i."'>0</label>
                        <button class='plusButton' id='plusButton".$i."'>+</button>
                    </div>
                    <button class='addToCart' id='addToCart'>In den Warenkorb</button>
                </div> 
                ";
                $i=$i+1;
            }
            $conn=null;
        ?>
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