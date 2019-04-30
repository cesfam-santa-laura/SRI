
<?php
session_start();
if ( @!$_SESSION['user'] ) {
	header("Location:index.php");
}
?>
<?php

require_once ('../include/conexiones.php');

$ced = $_POST['txtCedula'];
$nom = $_POST['txtNombres'];
$apell = $_POST['txtApellidos'];
$sexo = $_POST['txtSex'];
$nac = $_POST['txtFechaNac'];
$tel = $_POST['txtTel'];
$dir = $_POST['txtdire'];
$pobl = $_POST['txtPob'];
$com = $_POST['txtCom'];
$pais = $_POST['txtpais'];
$pueblo = $_POST['txtpueblo'];
$sect = $_POST['txtSect'];
$ficha = $_POST['txtFicha'];

$fcreacion = $_POST['fcreacion'];
$estado = $_POST['txtestado'];
$hta = $_POST['txthta'];
$dm = $_POST['txtdm'];
$dislipi = $_POST['txtdislip'];
$gaa = $_POST['txtgaa'];
$iglos = $_POST['txtglucosa'];
$epoc = $_POST['txtepoc'];
$otrasr = $_POST['txtotras'];
$ri = $_POST['txtri'];

$asma = $_POST['txtasma'];
$odepen = $_POST['txtodepen'];
$epi = $_POST['txtepi'];
$hipo = $_POST['txthipo'];
$parkin = $_POST['txtparkin'];
$artro = $_POST['txtartr'];
$obs = $_POST['txtobes'];
$taba = $_POST['txttaba'];
$iam = $_POST['txtiam'];
$acv = $_POST['txtacv'];

$seden = $_POST['txtseden'];
$riesgo = $_POST['txtriesgo'];
$electro = $_POST['txtFelectro'];
$fonojo = $_POST['txtFonOjo'];
$fevalpie = $_POST['txtFEvPie'];
$puntpie = $_POST['txtPunPie'];
$retinop = $_POST['txtretino'];

$ucontr = $_POST['txtUltCont'];
$pcontrol = $_POST['txtProxCont'];
$uemp = $_POST['txtUltEmp'];
$fexa = $_POST['txtfexamen'];
$finsu = $_POST['txtfinsulina'];
$fpap = $_POST['txtfpap'];
$epap = $_POST['txtEstPap'];

$frac = $_POST['txtrac'];
$psist = $_POST['txtSistol'];
$pdiasl = $_POST['txtDiaslos'];
$peso = $_POST['txtPeso'];
$talla = $_POST['txtTalla'];
$imc = $_POST['txtImc'];
$hba1c = $_POST['txtHba1c'];
$creat = $_POST['txtCreat'];

$micro = $_POST['txtMicrolab'];
$colest = $_POST['txtColest'];
$hdl = $_POST['txtHdl'];
$tgc = $_POST['txtTgc'];
$ldl = $_POST['txtLdl'];
$vfg = $_POST['txtVfg'];
$erenal = $_POST['txtRenal'];
$iecaara = $_POST['txtIara'];
$uaspi = $_POST['txtaspi'];
$estati = $_POST['txtestati'];

$insu = $_POST['txtinsul'];
$ulce = $_POST['txtpulcerado'];
$ampu = $_POST['txtampu'];
$ceguer = $_POST['txtceguera'];
$hiv = $_POST['txthiv'];
$demen = $_POST['txtdemencia'];
$emat = $_POST['txtemat'];
$nerf = $_POST['txtnerf'];
$famrenal = $_POST['txtfamrenal'];
$dialis = $_POST['txtdialisis'];
$fdialis = $_POST['txtfdialisis'];
$user = $_SESSION['id'];
$creacion = date('Y-m-d');


$query = mysqli_query($con,"INSERT INTO db_usuarios (`bd_rut`, `bd_nom`, `bd_apell`, `bd_sexo`, `bd_nac`, `bd_telef`, `bd_direc`,`bd_pobl`, `bd_com`, `bd_pais`, `bd_pueblo`, `bd_sect`, `bd_ficha`, `bd_usercreador`, `bd_date`, `bd_updateuser`) values  ('$ced','$nom','$apell','$sexo','$nac','$tel','$dir','$pobl','$com','$pais','$pueblo','$sect','$ficha','$user','$creacion','$user')")or die('error '.mysqli_error($con));


if( !$query ) {

	header("Location: ..Modals/Paciente.php?alert=5");

} else {

	$query1=mysqli_query($con,"INSERT INTO `db_infoatencion`(`bd_idrut`, `bd_hta`, `bd_dm`, `bd_dislip`, `bd_gaa`, `bd_iglos`, `bd_epoc`, `bd_lcfa`, `bd_asma`, `bd_odepen`, `bd_epi`, `bd_hipo`, `bd_park`, `bd_artro`, `bd_ri`, `bd_tabaco`, `bd_obesi`, `bd_iam`, `bd_acv`, `bd_seden`, `bd_electro`, `bd_riesgocv`, `bd_fondojo`, `bd_evpdm`, `bd_puntpiedm`, `bd_rinop`, `bd_fultcon`, `bd_fproxcon`, `bd_fultemp`, `bd_fexamen`, `bd_finsulina`, `bd_fultpap`, `bd_estpap`, `bd_frac`, `bd_sistol`, `bd_diastol`, `bd_peso`, `bd_talla`, `bd_imc`, `bd_hba1c`, `bd_creat`, `bd_microlab`, `bd_colest`, `bd_hdl`, `bd_tgc`, `bd_ldl`, `bd_vfg`, `bd_etaparenal`, `bd_ieca`, `bd_aspir`, `bd_estat`, `bd_insul`, `bd_pulcer`, `bd_amp`, `bd_cegue`, `bd_hiv`, `bd_demen`, `bd_emat`, `bd_nerf`, `bd_renal`, `bd_estado`, `bd_dialisis`, `bd_fdialisis`, `bd_fcreacion`, `bd_createuser`, `bd_createdate`, `bd_updateuser`, `bd_updatedate`) VALUES ('$ced','$hta','$dm','$dislipi','$gaa','$iglos','$epoc','$otrasr','$asma','$odepen','$epi','$hipo','$parkin','$artro','$ri','$taba','$obs','$iam','$acv','$seden','$electro','$riesgo','$fonojo','$fevalpie','$puntpie','$retinop','$ucontr','$pcontrol','$uemp','$fexa','$finsu','$fpap','$epap','$frac','$psist ','$pdiasl', '$peso', '$talla', '$imc', '$hba1c', '$creat', '$micro', '$colest', '$hdl', '$tgc', '$ldl', '$vfg','$erenal','$iecaara', '$uaspi ', '$estati', '$insu', '$ulce', '$ampu', '$ceguer', '$hiv','$demen',	 '$emat', '$nerf', '$famrenal', '$estado', '$dialis', '$fdialis', '$fcreacion ','$user ','$creacion','$user','$creacion')")or die('error '.mysqli_error($con));

	header("Location: ../Modals/Paciente.php?alert=4");
}
?>
