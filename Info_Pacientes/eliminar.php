<?php 
$ced = $_POST['bd_rut'];

require_once ('../include/conexiones.php');

	$sql = "DELETE FROM db_usuarios WHERE bd_rut = '$ced'";

	$q = mysqli_query( $con, $sql); 
   
 ?>



