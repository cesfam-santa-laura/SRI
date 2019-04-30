<?php
require_once ('../include/conexiones.php');


session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}

$hari_ini = date("d-m-Y");
$sector = $_SESSION['sector'];
$desdeNor = fechaNormal($_POST['txtdesde']);
$hastanor = fechaNormal($_POST['txthasta']);

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_RegistroMedico.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>REPORTE REGISTRO MEDICO SL</title>
</head>
<body>
	<table width="100%" border="1" cellspacing="0" cellpadding="0">
		<div id="title" align="center" style="font-size:35" bg>
			REPORTE REGISTRO MEDICO <?php echo $_SESSION['sector']; ?> SL
		</div>

		<?php if($desdeNor==$hastanor) { ?>
			<div id="title-tanggal" align="center" style="font-size:30">
				Fecha <?php echo $desdeNor;?>
			</div>

		<?php } else { ?>
			<div id="title-tanggal" align="center" style="font-size:30">
				Fecha Desde <?php echo $desdeNor;?> Hasta <?php echo $hastanor;?>
			</div>
		<?php } ?>

		<div id="title-tanggal" align="center" style="font-size:20">
			Fecha descarga Reporte <?php echo $hari_ini; ?>
		</div>

		<hr><br>

		<tr>
			<td  align="center" style="font-size:20;" bgcolor="Turquoise"><strong>ID</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>RUT</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>PASAPORTE</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>SEXO</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>EDAD</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>SECTOR</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>PAIS</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>ATENCION</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>TIPO DE ATENCION</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>EV. NEURO</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>CONSEJERIA IND./BREVE</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>OBSERVACION</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>REGISTRO</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>MEDICO</strong></td>
			<td  align="center" valign="middle" style="font-size:20;" bgcolor="Turquoise"><strong>CENTRO</strong></td>
		</tr>

		<?php

		$desde = $_POST['txtdesde'];
		$hasta = $_POST['txthasta'];
		$medico = $_POST['txtMedico'];

		$consulta = "SELECT f.sl_idInfo, f.sl_rutPac, f.sl_pasaport, s.sl_descSex, f.sl_edad, f.sl_mes, t.sl_descSect, p.sl_descPais, a.sl_descAtenc, f.sl_tipoaten, f.sl_EvNeuro, f.sl_consejeria, f.sl_observ, f.sl_creacion, f.sl_usuarioresg, f.sl_sector
		FROM db_sexo s, db_sector t, db_pais p, db_atencion a, db_infoatencion f
		WHERE f.sl_sexo = s.sl_idsex
		AND f.sl_aten= a.sl_idatenc
		AND f.sl_sect = t.sl_idSect
		AND f.sl_pais = p.sl_idPais
		AND f.sl_usuarioresg like '%$medico%'
		AND f.sl_registro BETWEEN '$desde' AND '$hasta'
		AND f.sl_sector='$sector'";

		$r=mysqli_query($con, $consulta);
		$d=mysqli_num_rows($r);

		if( $d>0 ) {
			while($registro=mysqli_fetch_array($r)) {

				$edad=$registro['sl_edad'];

				?>

				<tr>
					<td align='center' style='font-size:15'><?php echo $registro['sl_idInfo'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_rutPac'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_pasaport'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_descSex'] ?></td>
					<?php if ($edad>0) { ?>

						<td align='center' style='font-size:15'><?php echo $registro['sl_edad'] ?>a</td>

					<?php } else { ?>

						<td align='center' style='font-size:15'><?php echo $registro['sl_mes']?>m</td>

					<?php } ?>
					<td align='center' style='font-size:15'><?php echo $registro['sl_descSect'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_descPais'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_descAtenc'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_tipoaten'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_EvNeuro'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_consejeria'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_observ'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_creacion'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_usuarioresg'] ?></td>
					<td align='center' style='font-size:15'><?php echo $registro['sl_sector'] ?></td>
				</tr>

			<?php }
		} else { ?>

			<div id="title" align="center" style="font-size:35" bg> Sin Registros para Mostrar </div>

		<?php } ?>

	</table>
</body>
</html>
