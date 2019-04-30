<?php
$Pas = $_POST['pasaport'];

require_once ('../include/conexiones.php');

$sql = "SELECT sl_rut, sl_sexo, sl_nac, sl_sector, sl_pais, sl_pueblo_orig FROM db_usuarios WHERE sl_Pasaport = '$Pas'";
$q = mysqli_query($con, $sql);
$info = array();

while($datos = mysqli_fetch_array($q)){

	$rut = $datos['sl_rut'];
	$sexo = $datos['sl_sexo'];
	$nac = $datos['sl_nac'];
	$sect = $datos['sl_sector'];
	$pais = $datos['sl_pais'];
	$pueblo = $datos['sl_pueblo_orig'];

}

$info['rut'] = $rut;
$info['sexo'] = $sexo;
$info['nac'] = $nac;
$info['sect'] = $sect;
$info['pais'] = $pais;
$info['pueblo'] = $pueblo;


echo json_encode($info);
?>
