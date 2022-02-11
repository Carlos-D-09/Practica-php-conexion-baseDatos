<?php
    require("conexionDb.php");

    if(count($_POST) > 0){
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $correo = $_POST['correo'];

        $sql = "INSERT INTO usuarios (Nombres,Apellidos,Edad,Correo)
                VALUES ('$nombres','$apellidos', '$edad', '$correo')";
        
        $conn->exec($sql);

        header('location:index.php');
    }
?>