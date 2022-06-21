<?php

    if(isset($_POST['firstName'])){
        $firstName = $_POST['firstName'];
    } 
    if(isset($_POST['lastName'])){
        $lastName = $_POST['lastName'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    } 

    $password=rand(1000, 10000);
    $kundenNummer = rand(10000,100000);

    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
        $emailErr = "You Entered An Invalid Email Format";
        echo '<script type="text/javascript">alert ("Bitte gib ein korrekte Mail Adresse an");</script>';
        echo $emailErr;
        //header ("Location: registrieren.php");

        echo '<div class="warenkorbDiv">".$emailErr."<div>';
    }else{

        try{
            // OPEN CONNECTION TO DB AND CONNECT
            include 'imports/dbSettingsAndConnImport.php';

            $sql = "INSERT INTO WS_User (kundenNummer, firstName, lastName, password, email) VALUES (?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$kundenNummer, $firstName, $lastName,$password, $email]);

            //CLOSE CONNECTION TO DB
            $conn = null;

    } catch(Exception $e){

        echo "Fehler: ".$e;

    }
    

  header ("Location: index.php");
}

?>