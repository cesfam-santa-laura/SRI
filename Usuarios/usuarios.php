<!DOCTYPE html>
<html>
<body>
	<?php
	require_once "../include/menu.php";
	require_once "../include/conexiones.php";
	?>
	<div class="container-fluid">

		<div class="panel panel-primary " >
			<div class="panel-heading">
				<h2><span class=" 	glyphicon glyphicon-list-alt"> </span><label class="control-label">&nbsp;LISTADO USUARIOS AL SISTEMA</label> </h2>
			</div>
		</div>

		<div class="panel panel-primary">
			<div class="panel-body">
				<table width="100%" class="table table-striped table-hover" id="example">

					<thead>
						<tr>
							<th class="center">No.</th>
							<th class="center">RUT</th>
							<th class="center">NOMBRE</th>

							<th class="center">SEXO</th>
							<th class="center">SECTOR</th>
							<th class="center">N°FICHA</th>
							<th class="center">ACCIONES</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$query = mysqli_query($con, "SELECT  * FROM login_usuarios")
						or die('error: '.mysqli_error($con));

						while ($data = mysqli_fetch_assoc($query)) {

							echo "<tr>
								<td width='30' class='center'>$no</td>
								<td width='30' class='center'>$data[rut_user]</td>
								<td width='100'align='left'>$data[name_user]</td>
								<td width='100' class='center'> $data[centro_user]</td>
								<td width='80' class='center'>$data[sector_user]</td>
								<td width='80' class='center'>$data[permisos_acceso]</td>
								<td class='center' width='80'>
								<div>
									<a data-toggle='tooltip' data-placement='top' title='Modificar Datos Personales' style='margin-right:5px' class='btn btn-primary btn-sm'  >
										<i style='color:#fff' class='glyphicon glyphicon-edit'></i>
									</a>

									<a data-toggle='tooltip' data-placement='top' title='Agregar Datos' style='margin-right:5px' class='btn btn-primary btn-sm' >
										<i style='color:#fff' class='glyphicon glyphicon-edit'></i>
									</a>" ; ?>
									<a data-toggle="tooltip" data-placement="top" title="Eliminar Paciente" class="btn btn-danger btn-sm" >
										<i style="color:#fff" class="glyphicon glyphicon-trash"></i>
									</a>
									<?php echo "
								</div>
							</td>
						</tr>";
						$no++;

						} ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>

	<footer class="footer">
		<h3><p align="Center">&copy; Copyright Victor Castro</p></h3>
	</footer>
</body>
</html>