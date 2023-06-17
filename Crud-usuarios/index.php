<?php
include('conexion.php');
$con = conexion();
$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con,$sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Usuarios SER</title>
</head>

<body>
    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insertar_usuario.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellidos" placeholder="Apellidos">


            <input type="text" name="numdoc" placeholder="Numero de Documento">
            
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="radio" name="rol" value="oferente" placeholder="Oferente">
            <input type="radio" name="rol" value="contratista" placeholder="Contratista">


            

            <input type="submit" value="Agregar">
        </form>
    </div>
    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Numero de documento</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Rol</th>



                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <!-- Bienvenidos -->
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['apellidos'] ?></th>
                        <th><?= $row['numdoc'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><?= $row['password'] ?></th>
                        <th><?= $row['rol'] ?></th>
                        <th><a href="actualizar_usuario.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="eliminar_usuario.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
            
        </table>
    </div>

   

</body>

</html>