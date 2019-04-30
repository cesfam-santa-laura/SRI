<?php
$ced = $_POST['Cedula'];
require_once ('../include/conexiones.php');

$sql = mysqli_query($con,"SELECT * FROM  db_usuarios, db_infoatencion WHERE bd_rut = '$ced' and  bd_idrut '$ced'");
$info = array();

while( $datos = mysqli_fetch_array($sql) ) {
	$fecha = time() - strtotime($datos['bd_nac']);
	$edad = floor($fecha / 31556926);
	$rut = $datos['bd_rut'];
	$nom = $datos['bd_nom'];
	$apell = $datos['bd_apell'];
}

$info['rut'] = $rut;
$info['nom'] = $nom;
$info['apell'] = $apell;
$info['edad'] = $edad;

echo json_encode($info);
?>
