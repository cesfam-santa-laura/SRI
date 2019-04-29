<meta charset="utf-8">
<?php
session_start();
require("include/conexiones.php");

$username=$_POST['rut'];
$pass=md5($_POST['pass']);

$sql="SELECT * FROM login WHERE rut='$username'";
$resul=mysqli_query($con, $sql);

if($f=mysqli_fetch_array($resul)) {

	if(($pass==$f['password'])) {

		$_SESSION['id']=$f['id'];
		$_SESSION['rut']=$f['rut'];
		$_SESSION['user']=$f['user'];
		$_SESSION['sector']=$f['sector'];
		$_SESSION['centro']=$f['centro'];
		$_SESSION['acceso']=$f['acceso'];
		header("Location: Star/Inicio.php");

	} else {
		header("Location: index.php?alert=1");
	}
} else {
	header("Location: index.php?alert=2");
}
?>
