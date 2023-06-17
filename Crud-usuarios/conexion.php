<?php
function conexion(){
$servidor = "localhost";
$usuario= "root";
$password = "";
$bd ="ser";

$connect = mysqli_connect($servidor,$usuario,$password);
mysqli_select_db($connect,$bd);
return $connect;
}



?>