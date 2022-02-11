<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "php-database";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected succesfully";
    }catch (PDOException $e){
        echo "Connecttion failed: " . $e -> getMessage();
    }
?>