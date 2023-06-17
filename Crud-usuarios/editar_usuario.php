<?php

include("conexion.php");
$con = conexion();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$numdoc = $_POST['numdoc'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol =$_POST['rol'];

$sql="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', numdoc='$numdoc', password='$password', email='$email', rol=$rol WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>