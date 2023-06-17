<?php
include('conexion.php');
$con = conexion();

$id = null;
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$numdoc = $_POST['numdoc'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol =$_POST['rol'];
$sql = "INSERT INTO usuarios VALUES('$id','$nombre','$apellidos','$numdoc','$email','$password','$rol')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}
?>