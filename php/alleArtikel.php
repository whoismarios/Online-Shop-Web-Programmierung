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
<body id="test1">

    <!-- NAV IMPORT -->
    <?php
        include 'imports/navImport.php';
    ?>
     <!-- Dynamic Titel Import -->
    <?php
        include 'imports/titelImport.php';
    ?> 

    <!-- ALLE ARTIKEL LAYOUT -->

    <div class="containerAlle">
        <?php
            include 'imports/dbSettingsAndConnImport.php';

            $sql = "SELECT * FROM artikel";
            
            $i=1;

            foreach($conn->query($sql) as $row){
                /*echo "
                <form action='checkWarenkorb.php' method='post' class='box' id='boxID".$i."'>
                    <img src='../images/alleArtikel/".$row['artNr'].".jpg' class='imageClass'>
                    <h3 class='artikelNameH3'>".$row['kurztext']."</h3>
                    <p class='artNrPräfix'>Art.-Nr.: <span class='artikelNummerSpan'>".$row['artNr']."</span> Bestand: <span class='artikelNummerSpan'>".$row['bestand']."</span> </p>
                    <p class='beschreibungP'>".$row['beschreibung']."</p>
                    <h4 class='priceSpan'>".$row['preis']."</h4>
                    <div class='amountDiv' id='amountID".$i."'>
                        <button class='minusButton' id='minusButton".$i."'>-</button>
                        <label name='amount' for='amount' class='amountLabel' id='amountLabel".$i."'>0</label>
                        <button onClick='plusOne(this)' class='plusButton' id='plusButton".$i."'>+</button>
                    </div>
                    <button type='submit' class='addToCart' value='In den Warenkorb' for=''>In den Warenkorb</button>
                </form> 
                <form action='checkWarenkorb.php' method='post'>
                    <button onClick='plusOne(this)' class='plusButton' id='plusButton".$i."'>+</button> 
                </form>
                ";*/
                $i=$i+1;
                echo "
                <form action='checkWarenkorb.php' method='post'>
                    <button onclick='plusOne(this)' class='btn btn-primary' id='plusButton".$i."'>+</button> 
                    <button type='submit' class='btn btn-primary'>Senden</button>
                </form>
                ";
            }
            $conn=null;
        ?>
    </div>

   

    <script>
        function plusOne(event){
        event.preventDefault();
        console.log("test");
        console.dir(event);
       
    }
    </script>

     
</body>
</html>