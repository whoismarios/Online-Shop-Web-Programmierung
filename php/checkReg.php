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

    $password=null;
    $kundenNummer = rand(10000,100000);
    

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

?>