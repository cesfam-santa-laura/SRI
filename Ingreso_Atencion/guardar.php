<?php
session_start();

if (@!$_SESSION['user']) {
	header("Location:index.php");
} ?>

<?php
require_once ('../include/conexiones.php');

$ced = $_POST['txtCedula'];
$pas = $_POST['miarea'];
$sexo = $_POST['txtSex'];
$nac = $_POST['txtFechaNac'];
$edad = $_POST['txtEdad'];
$mes = $_POST['txtMes'];
$sect = $_POST['txtSect'];
$pais = $_POST['txtpais'];
$pueblo = $_POST['txtpueblo'];
$At = $_POST['txtAten'];
$tipoAt = $_POST['txtTipAten'];
$EvNeu = $_POST['txtEvNeur'];
$Consej = $_POST['txtConsejeria'];
$obser = $_POST['taComentario'];
$usuaresg = $_SESSION['user'];
$sectmedico=$_SESSION['sector'];
$creacion =date('Y-m-d');


$sql1 = "INSERT INTO db_usuarios (sl_rut, sl_Pasaport, sl_sexo,sl_nac, sl_sector, sl_pais, sl_pueblo_orig)
VALUES('$ced', '$pas', '$sexo', '$nac', '$sect', '$pais', '$pueblo')";

$q = mysqli_query( $con, $sql1);

if(!$q) {

	$sql3= "UPDATE db_usuarios SET sl_Pasaport='$pas', sl_sexo='$sexo', sl_nac ='$nac', sl_sector= '$sect', sl_pais='$pais', sl_pueblo_orig='$pueblo' WHERE sl_rut ='$ced' and sl_Pasaport='$pas'";

	$sql4= "INSERT INTO db_infoatencion(sl_rutPac, sl_pasaport, sl_sexo, sl_edad, sl_mes,	sl_sect, sl_pais, sl_aten, sl_tipoaten, sl_EvNeuro,	sl_consejeria, sl_observ, sl_usuarioresg, sl_sector, sl_registro)
	VALUES ('$ced', '$pas', '$sexo', '$edad', '$mes', '$sect', '$pais', '$At', '$tipoAt', '$EvNeu', '$Consej', '$obser', '$usuaresg', '$sectmedico', '$creacion')";

	$q2 = mysqli_query( $con, $sql3);

	$q3 = mysqli_query( $con, $sql4);

	echo "[OK] La Atencion del Paciente ha sido ingresado correctamente";

} else {

	$sql2= "INSERT INTO db_infoatencion(sl_rutPac, sl_pasaport, sl_sexo, sl_edad,sl_mes, sl_sect, sl_pais, sl_aten, sl_tipoaten, sl_EvNeuro,	sl_consejeria, sl_observ, sl_usuarioresg, sl_sector, sl_registro)
	VALUES ('$ced', '$pas', '$sexo', '$edad', '$mes', '$sect', '$pais', '$At', '$tipoAt', '$EvNeu', '$Consej', '$obser', '$usuaresg', '$sectmedico', '$creacion')";

	$q4 = mysqli_query( $con, $sql2);

	echo "[OK] Ingreso correcto";

}

?>
