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
        <form role="form" method="post" action="checkReg.php" class="loginForm">
            <legend class="formText">
                Registrieren
            </legend>
            <p>
                <label for="firstName" class="formLabel" id="firstName">
                    Vorname:
                </label>
                <br>
                <input type="text" size="30" name="firstName" id="firstNameInputID" placeholder="Vorname" class="formInput">
            </p>
            <p>
                <label for="lastName" class="formLabel" id="lastNameID">
                    Nachname:
                </label>
                <br>
                <input type="text" size="30" name="lastName" id="lastNameInputID" placeholder="Nachname" class="formInput">
            </p>
            <p>
                <label for="email" class="formLabel" id="mailID">
                    E-Mail:
                </label>
                <br>
                <input type="text" size="30" name="email" id="mailInputID" placeholder="E-Mail" class="formInput">
            </p>
            <br>
            <input type="submit" value="Registrieren" class="loginButton" id="loginButtonID">
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