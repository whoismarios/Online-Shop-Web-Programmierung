<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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

    <!--An dieser Stelle wird die User Begrüßung eingefügt
    Die Bedingung (user ist eingeloggt) muss noch formuliert werden
    da das entsprechende Div sonst nicht angezeigt wird-->
    
    <!-- php include hier -->

    <!-- Slider -->
    <div class="sliderDiv" id="sliderDiv">
        <img src="../images/sliderImages/beutel1.jpeg" name="sliderImage" id="sliderImage">
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