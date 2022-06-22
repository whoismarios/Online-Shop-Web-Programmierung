<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/ Registrierung</title>

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
                Login
            </legend>
            <p>
                <label for="usrnm" class="formLabel" id="usrnm">
                    E-Mail:
                </label>
                <br>
                <input type="text" size="30" name="email" placeholder="E-Mail" class="formInput" autocomplete="off">
            </p>
            <p>
                <label for="psw" class="formLabel">
                    Passwort:
                </label>
                <br>
                <input type="password" size="30" name="password" placeholder="Passwort" class="formInput">
            </p>
            <br>
            <input type="submit" value="Login" class="loginButton" id="loginButton">
            <br>
            <br>
        </form>
        <button onclick="location.href = 'passwortZurücksetzen.php';" class="neuesPasswort">Passwort vergessen?</button>
    </div>

    <br>
    
    <!-- Registrierung Form -->
    <div class="registrierenDiv">
        <h2 class="regÜberschrift">Noch keinen Account?</h2>
        <button class="regButton" onclick="location.href = 'registrieren.php';">
            Registrierung
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