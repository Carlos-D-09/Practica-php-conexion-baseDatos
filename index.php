<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Practica conexion base de datos</title>
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <header>
            <h1>Index practica conexion base de datos</h1>
        </header>
        <ul>
            <li>
                <a href = "formulario.php"> Formulario</a>
            </li>
        </ul>
        <?php
            require("conexionDb.php");
            
            $sql = "SELECT * FROM usuarios";

            $stmt = $conn->prepare("$sql");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            if($stmt->rowCount()>0){
                echo "<table>
                    <tr>
                        <th> Nombre(s) </th>
                        <th> Apellido(s) </th>
                        <th> Edad </th>
                        <th> Correo </th>
                    </tr>
                ";
                foreach($stmt->fetchAll() as $row){
                    echo "<tr>
                        <td>".$row['Nombres']."</td>
                        <td>".$row['Apellidos']."</td>
                        <td>".$row['Edad']."</td>
                        <td>".$row['Correo']."</td>
                        </tr>";

                }
            }
        ?>    
    </body>
</html>