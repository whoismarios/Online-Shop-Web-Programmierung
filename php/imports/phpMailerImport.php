<?php
    use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require '../../packages/phpMailer/includes/Exception.php';
    require '../../packages/phpMailer/includes/PHPMailer.php';
    require '../../packages/phpMailer/includes/SMTP.php';

    include '../packages/phpMailer/vendor/autoload.php';

    session_start();
?>