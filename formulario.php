<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Practica conexion base de datos</title>
    </head>
    <body>
        <head>
            <h1>Formulario</h1>
        </head>
        <form method = POST action = "store.php">
            <label for = "nombres"> Ingresa tu nombre(s): </label>
            <input type = "text" placeholder= "nombre(s)" name = "nombres"><br><br>
            <label for = "apellidos"> Ingresa tu apellidos(s): </label>
            <input type = "text" placeholder= "apellido(s)" name = "apellidos"><br><br>
            <label for = "edad"> Ingresa tu edad: </label>
            <input type = "text" placeholder= "Edad" name = "edad"><br><br>
            <label for = "correo"> Ingresa tu correo: </label>
            <input type = "email" placeholder= "correo" name = "correo"><br><br>
            <input type = "submit" value = "Enviar">
        </form>
    </body>
</html>