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
        <div class="artikel">Artikel 1</div>
        <div class="artikel">Artikel 2</div>
        <div class="artikel">Artikel 3</div>

        <button class="kasse">Kasse</button>
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