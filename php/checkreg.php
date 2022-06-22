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

            //PHP Mailer E-Mail verschicken

            //include 'imports/phpMailerImport.php';

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
            use PHPMailer\PHPMailer\SMTP;
            
            require '../packages/phpMailer/includes/Exception.php';
            require '../packages/phpMailer/includes/PHPMailer.php';
            require '../packages/phpMailer/includes/SMTP.php';
        
            include '../packages/phpMailer/vendor/autoload.php';
        
            session_start();
            
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->isSMTP();                                     
                $mail->Host = 'smtp.gmail.com';                      
                $mail->SMTPAuth = true;                             
                $mail->Username = 'staubsaugerbeutel952@gmail.com';     
                $mail->Password = 'xldxlyelijpkosvr';             
                $mail->SMTPOptions = array(
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                    )
                );                         
                $mail->SMTPSecure = 'tls';                           
                $mail->Port = 587;                                   
     
                //Send Email
                $mail->setFrom('staubsaugerbeutel952@gmail.com');
     
                //Recipients
                $mail->addAddress($email);              
                $mail->addReplyTo($email);
     
                //Content
                $mail->isHTML(true);                                  
                $mail->Subject = "Account registration confirmation";
                $mail->Body    = '
                
                    <body>
                        <h1>
                            Das ist eine Test E-Mail!
                        </h1>
                    </body>
                ';
     
                $mail->send();
     
                //header("location:verification.php?firstname=".$firstname."&lastname=".$lastname."&email=".$email."");
     
            } catch (Exception $e) {
                $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
                $_SESSION['status'] = 'error';
            }

            //CLOSE CONNECTION TO DB
            $conn = null;

    } catch(Exception $e){

        echo "Fehler: ".$e;

    }
    

  header ("Location: index.php");
}

?>