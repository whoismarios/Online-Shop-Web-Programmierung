<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passwort zurücksetzen</title>

   <?php
    include 'imports/headerImport.php';
   ?> 

</head>
<body>

    <!-- NAV IMPORT -->
    <?php
        include 'imports/navImport.php';
    ?>

    <!-- Login Form -->
    <div class="loginFormDiv">
        <form role="form" method="post" action="newPasswordCheck.php" class="loginForm" autocomplete="off">
            <legend class="formText">
                Passwort zurücksetzen
            </legend>
            <p>Bitte nutze Zahlen, Groß- und Kleinbuchstaben!</p>
            <p>
                <label for="usrnm" class="formLabel" id="usrnm">
                    E-Mail:
                </label>
                <br>
                <input type="text" size="30" name="email" placeholder="E-Mail" class="formInput">
            </p>
            <br>
        </form>
    </div>

    <br>


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