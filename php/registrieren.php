<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrieren</title>

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
        <form role="form" method="post" action="checklogin.php" class="loginForm">
            <legend class="formText">
                Registrieren
            </legend>
            <p>
                <label for="usrnm" class="formLabel" id="usrnm">
                    Anrede:
                </label>
                <br>
                <input type="text" size="30" name="Anrede" id="usrnmInput" placeholder="Anrede" class="formInput">
            </p>
            <p>
                <label for="usrnm" class="formLabel" id="usrnm">
                    Vorname:
                </label>
                <br>
                <input type="text" size="30" name="Vorname" id="usrnmInput" placeholder="Vorname" class="formInput">
            </p>
            <p>
                <label for="usrnm" class="formLabel" id="usrnm">
                    Nachname:
                </label>
                <br>
                <input type="text" size="30" name="Nachname" id="usrnmInput" placeholder="Nachname" class="formInput">
            </p>
            <p>
                <label for="usrnm" class="formLabel" id="usrnm">
                    E-Mail:
                </label>
                <br>
                <input type="text" size="30" name="EMail" id="usrnmInput" placeholder="E-Mail" class="formInput">
            </p>
            <p>
                <label for="psw" class="formLabel" id="psw">
                    Passwort:
                </label>
                <br>
                <input type="text" size="30" name="psw" id="pswInput" placeholder="Passwort" class="formInput">
            </p>
            <br>
            <input type="submit" value="Registrieren" class="loginButton" id="loginButton">
            <br>
        </form>
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