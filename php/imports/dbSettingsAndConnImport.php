<?php
    $dbDatabasename = 'Staubsaugerbeutel';
    $dbLoginUsername = 'root';
    $dbPassword = '';

    $conn = new PDO("mysql:host=localhost;dbname=".$dbDatabasename, $dbLoginUsername, $dbPassword);
    $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>