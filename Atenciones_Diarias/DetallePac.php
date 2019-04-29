<?php
$id = $_POST['idrut'];

require_once ('../include/conexiones.php');

$sql="SELECT  sl_rutPac, sl_pasaport, sl_tipoaten, sl_EvNeuro, sl_consejeria, sl_observ, sl_usuarioresg, sl_creacion
FROM db_infoatencion
WHERE sl_idInfo='$id'";

$q = mysqli_query($con, $sql);
$info = array();
while($datos = mysqli_fetch_array($q)) {

	$ced = $datos['sl_rutPac'];
	$pas = $datos['sl_pasaport'];
	$atenc = $datos['sl_tipoaten'];
	$evneuro = $datos['sl_EvNeuro'];
	$consej = $datos['sl_consejeria'];
	$obser = $datos['sl_observ'];
	$medico = $datos['sl_usuarioresg'];
	$creacion = $datos['sl_creacion'];

}

$info['ced'] = $ced;
$info['pas'] = $pas;
$info['atenc'] = $atenc;
$info['evneuro'] = $evneuro;
$info['consej'] = $consej;
$info['obser'] = $obser;
$info['medico'] = $medico;
$info['creacion'] = $creacion;

echo json_encode($info);
?>
