
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>
<?php

require_once ('../include/conexiones.php');

$ced = $_POST['txtCed'];
$nom = $_POST['txtNomb'];
$apell = $_POST['txtApelli'];
$sexo = $_POST['txtSexo'];
$nac = $_POST['txtFNac'];
$tel = $_POST['txtTelef'];
$dir = $_POST['txtdir'];
$pobl = $_POST['txtPobla'];
$com = $_POST['txtComuna'];
$pais = $_POST['txtpaises'];
$pueblo = $_POST['txtpuebl'];
$sect = $_POST['txtSector'];
$ficha = $_POST['txtFic'];
$user = $_SESSION['id'];

$sql="UPDATE db_usuarios
SET bd_nom='$nom', bd_apell='$apell', bd_sexo='$sexo', bd_nac='$nac', bd_telef='$tel', bd_direc='$dir', bd_pobl='$pobl', bd_com='$com', bd_pais='$pais', bd_pueblo='$pueblo', bd_sect='$sect', bd_ficha='$ficha', bd_updateuser='$user'
WHERE bd_rut = '$ced'";

$consulta = mysqli_query($con, $sql) or die('error: '.mysqli_error($con));

if (!$consulta) { ?>

	<div class="alert alert-danger">
		<h4 align="center">
			<strong>!Danger¡</strong>
			<span class="glyphicon glyphicon-ok"></span> Problemas con la actualizacion
		</h4>
	</div>

<?php } else { ?>

	<div class="alert alert-success">
		<h4 align="center">
			<strong>!Excelente¡</strong> A sido actualizado con exito
		</h4>
	</div>

<?php } ?>
