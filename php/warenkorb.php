<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warenkorb</title>

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

    <!-- Warenkorb und zur Kasse -->
    <div class="warenkorbDiv">
        <div class="artikel">
            <h4>Artikel 1</h4>
            <h4 for="preis">0€</h4>
            <div class='amountDiv'>
                <button onClick='test(".$i.")' class='minusButton' id='minusButton".$i."'>-</button>
                <label for='amount' class='amountLabel' id='amountLabel".$i."'>0</label>
            <button class='plusButton' id='plusButton".$i."'>+</button>
            <button class='deleteButton' id='deleteButton".$i."'>X</button>
            </div>
        </div>
        <div class="artikel">
            <h4>Artikel 2</h4>
            <h4 for="preis">0€</h4>
            <div class='amountDiv'>
                <button onClick='test(".$i.")' class='minusButton' id='minusButton".$i."'>-</button>
                <label for='amount' class='amountLabel' id='amountLabel".$i."'>0</label>
            <button class='plusButton' id='plusButton".$i."'>+</button>
            <button class='deleteButton' id='deleteButton".$i."'>X</button>
            </div>
        </div>
        <div class="artikel">
            <h4>Artikel 3</h4>
            <h3 for="preis">0€</h4>
            <div class='amountDiv'>
                <button onClick='test(".$i.")' class='minusButton' id='minusButton".$i."'>-</button>
                <label for='amount' class='amountLabel' id='amountLabel".$i."'>0</label>
            <button class='plusButton' id='plusButton".$i."'>+</button>
            <button class='deleteButton' id='deleteButton".$i."'>X</button>
            </div>
        </div>

        
        <?php
        /*
        include 'imports/dbSettingsAndConnImport.php';

        $sql = "SELECT * FROM warenkorb";

        $i=1;

        foreach($conn->query($sql) as $row){
            echo "
                <div class='box'>
                    <img src='../images/alleArtikel/".$row['artNr'].".jpg' class='imageClass'>
                    <h3 class='artikelNameH3'>".$row['kurztext']."</h3>
                    <p class='artNrPräfix'>Art.-Nr.: <span class='artikelNummerSpan'>".$row['artNr']."</span> Bestand: <span class='artikelNummerSpan'>".$row['bestand']."</span> </p>
                    <p class='beschreibungP'>".$row['beschreibung']."</p>
                    <h4 class='priceSpan'>".$row['preis']."</h4>
                    <div class='amountDiv'>
                        <button onClick='test(".$i.")' class='minusButton' id='minusButton".$i."'>-</button>
                        <label for='amount' class='amountLabel' id='amountLabel".$i."'>0</label>
                        <button class='plusButton' id='plusButton".$i."'>+</button>
                    </div>
                </div> 
                ";
                $i=$i+1;
            }
            $conn=null;
        */
        ?>

        <div class="artikel">
            <h3 style="font-weight: bold;">Gesamtsumme: </h3>
            <h3 style="font-weight: bold;">0€</h3>
            <span></span>
        </div>
        

        <br><br>
        <button class="kasse" onclick="location.href = 'kasse.php';">
            Kasse
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