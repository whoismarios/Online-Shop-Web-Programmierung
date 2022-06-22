<?php

        if(isset($_POST['email'])){
            $email = $_POST['email'];
        } 
        if(isset($_POST['passwort'])){
            $password = $_POST['password'];
        }
        if($email AND $password){
            require_once('dbsettingsAndConnImport.php');

            $query = mysql_query("SELECT * FROM WS_User WHERE email='$email' AND password='$password'")

            while ($row = mysql_fetch_assoc($query)){
                $dbuser = $row['email'];
                $dbpass = $row['password'];
                    $userid = $row['id']; //id holen
            }
            if($email==$dbuser AND $password==$dbpass) {
                $_SESSION['login'] = $email;
                echo"<meta http-equiv='refresh' content='0; index.php?id=userid'>"
            }
            else
                echo "<p>Der Benutzername oder das Passwort ist falsch.</p>";
        }
?>