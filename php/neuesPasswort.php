<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neues Passwort</title>

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
        <form role="form" method="post" action="newPasswordCheck.php" class="loginForm">
            <legend class="formText">
                Neues Passwort
            </legend>
            <p>Bitte nutze Zahlen, Groß- und Kleinbuchstaben!</p>
            <p>
                <label for="usrnm" class="formLabel" id="usrnm">
                    E-Mail:
                </label>
                <br>
                <input type="text" size="30" name="email" placeholder="E-Mail" class="formInput">
            </p>
            <p>
                <label for="psw" class="formLabel" id="psw">
                    Altes Passwort:
                </label>
                <br>
                <input type="password" size="30" name="oldPassword" placeholder="Altes Passwort" class="formInput">
            </p>
            <p>
                <label for="psw" class="formLabel" id="psw">
                    Neues Passwort:
                </label>
                <br>
                <input type="password" size="30" name="newPassword" placeholder="Neues Passwort" class="formInput">
            </p>
            <br>
            <input type="submit" value="Bestätigen" class="loginButton">
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