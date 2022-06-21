<?php

    //Überprüfung, ob die Felder der Form != null sind, da sonst nichts verarbeitet wird

    if(isset($_POST['email'])){
        $email = $_POST['email'];
    } 
    if(isset($_POST['oldPassword'])){
        $oldPassword = $_POST['oldPassword'];
    }
    if(isset($_POST['newPassword'])){
        $newPassword = $_POST['newPassword'];
    } 
    
    //Passwort validieren
    $uppercase = preg_match('@[A-Z]@', $newPassword);
    $lowercase = preg_match('@[a-z]@', $newPassword);
    $number    = preg_match('@[0-9]@', $newPassword);
    //$specialChars = preg_match('@[^\w]@', $newPassword); //Hier nicht notwendig

    //Validiere die Email-Adresse
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
        $emailErr = "You Entered An Invalid Email Format"; 
        echo $emailErr;
    }

    //Validiere das Passwort (Groß, Klein und Zahlen)
    if(!$uppercase || !$lowercase || !$number || /*!$specialChars ||*/ strlen($newPassword) < ) {
        echo 'Password should be at least 8 characters in length and should include at least one upper case letter and one number.';
    }else{
        echo 'Strong password.';
    }

    //Erstelle einen zufälligen Salt für den Hashwert
    function getSalt() {
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/\\][{}\'";:?.>,<!@#$%^&*()-_=+|';
        $randString = "";
        $randStringLen = 128;
   
        while(strlen($randString) < $randStringLen) {
            $randChar = substr(str_shuffle($charset), mt_rand(0, strlen($charset)), 1);
            $randString .= $randChar;
        }
   
        return $randString;
   }

   //Hashing Funktion
   function mySha512($str, $salt, $iterations) {
        for ($x=0; $x<$iterations; $x++) {
                $str = hash('sha512', $str . $salt);
        }
            return $str;
        }
     
    //Variable hashPassword beinhaltet das an die DB zu übertragende Passwort
    $hashPassword = mySha512($newPassword, getSalt(), 1000);
        
    //var_dump(mySha512($str, $salt, 10000));
    

    /**
     * Wie kann ich das alte Passwort mit den hashen und mit den Passwörtern in der DB vergleichen?
     * Bei einem anderen Salt kommen verschiedene Ergebnisse zustande
     */


    try{
        //DB wird verbunden
        include 'imports/dbSettingsAndConnImport.php'


        //1. Prüfe, ob die entsprechende Mail Adresse in der DB gespeichert ist

        //2. Altes Password wird gehasht und anschließend an die DB zum Abgleich geschickt

        //3. Stimmt das alte Passwort überein, wird das entsprechende Feld durch das neue 
        //  Passwort ersetzt, nachdem auch dies gehasht wurde
        
    } catch(PDOException $e) {
        echo "Fehler: ".$e;
    }  
    
    //Breche Verbindung zur DB wieder ab
    $conn=null;

    header ("Location: index.php");

?>