<!DOCTYPE html>
<html>
<body>
	<?php  require_once "../include/menu.php";	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-xs-12 ">

				<ol class="breadcrumb bread-primary ">
					<li><a href="../Star/Inicio.php"><i class="fa fa-home"></i> Home</a></li>
					<li><i class="active fa fa-user"></i> Pacientes Cronicos</li>
				</ol>

			</div>
		</div>
	</div>

	<div class="container-fluid">

		<?php // echo breadcrumbs(); ?>

		<section class="content-header">
			<h1>
				<a class="btn btn-primary btn-social pull-right" href='../Info_Pacientes/Form.php'>
					<i class="fa fa-user-plus"></i> Agregar Pacientes
				</a>
			</h1>

			<?php
			if ( empty($_GET['alert']) ) {

				echo "";

			} elseif ($_GET['alert'] == 4) {

				echo "
				<div class='alert alert-success col-md-10'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				<h4 align='center'> !Excelente¡</i> El Registro del Paciente fue un Exito</h4>
				</div>";

			} elseif ($_GET['alert'] == 5) {

				echo "<div class='alert alert-warning alert-dismissable col-md-10' align='center'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				<h4>  <i class='icon glyphicon glyphicon-info-sign'></i> Error al entrar!</h4>
				Tuvimos Problemas para registrar al paciente en nuestros Sistema, favor revise los datos a ingresar, si persiste el problema comuniquese con el Administrador.
				</div>";

			}
			?>
		</section>
	</div>

	<br>

	<div class="container-fluid">
		<div class="panel panel-primary">

			<div class="panel-heading">
				<h2>
					<span class="glyphicon glyphicon-list-alt"></span>
					<label class="control-label">Listado de Programa <i class="fa fa-heart"></i> Cardiovascular</label>
				</h2>
			</div>

			<div class="panel-body">

				<div class="table-responsive">

					<table class="table" id="example">
						<thead>
							<tr>
								<th class="center" scope="col">No.</th>
								<th class="center" scope="col">RUT</th>
								<th class="center" scope="col">NOMBRE</th>
								<th class="center" scope="col">APELLIDOS</th>
								<th class="center" scope="col">EDAD</th>
								<th class="center" scope="col">SEXO</th>
								<th class="center" scope="col">SECTOR</th>
								<th class="center" scope="col">N°FICHA</th>
								<th class="center" scope="col">ACCIONES</th>
							</tr>
						</thead>
						<tbody>
							<?php

							$no = 1;
							$query = mysqli_query($con, "SELECT u.bd_rut, u.bd_nom, u.bd_apell, s.sl_descSex, u.bd_nac, t.sl_descSect, u.bd_ficha FROM db_usuarios u, db_sexo s, db_sector t where u.bd_sexo = s.sl_idsex AND u.bd_sect = t.sl_idSect ")
							or die('error: '.mysqli_error($con));

							while ($data = mysqli_fetch_assoc($query)) {

								$fecha = time() - strtotime($data['bd_nac']);
								$edad = floor($fecha / 31556926);

								?>

								<tr >
									<td bgcolor= "#FFFFFF" width='5' class='center'scope="row" ><?php echo $no?></td>
									<td bgcolor= "#FFFFFF" width='20' class='center'><?php echo $data['bd_rut']?></td>
									<td bgcolor= "#FFFFFF" width='150'align='left'><?php echo $data['bd_nom']?></td>
									<td bgcolor= "#FFFFFF" width='50' align='left'><?php echo $data['bd_apell']?></td>
									<td bgcolor= "#FFFFFF" width='10' align='left'><?php echo $edad ?></td>
									<td bgcolor= "#FFFFFF" width='20' class='center'><?php echo $data['sl_descSex']?></td>
									<td bgcolor= "#FFFFFF" width='20' class='center'><?php echo $data['sl_descSect']?></td>
									<td bgcolor= "#FFFFFF" width='20' class='center'><?php echo $data['bd_ficha']?></td>
									<td bgcolor= "#FFFFFF" width='100' class='center'>
										<div>
												<button type="button" data-toggle="modal" data-target="#Editar"  style='margin-right:2px' title=" 	" class='btn btn-primary btn-sm' onclick="BuscarInfo('<?php echo $data['bd_rut']?>')"  >
												<i class='glyphicon glyphicon-edit'></i>
												<i class='fa fa-user-md'></i>
											</button>

											<!-- <a data-toggle="modal" data-target="#Agregar"  style='margin-right:2px' class='btn btn-primary btn-sm' title="" onclick="BuscarDatosCronicos('<?php echo $data['bd_rut']?>')" >
												<i  class='glyphicon glyphicon-folder-open'></i>
												<i class='fa fa-user-md'></i>
											</a> -->

											<button data-toggle="tooltip" data-placement="top" title="Eliminar Paciente" class="btn btn-danger btn-sm" style='margin-right:2px' onclick="eliminar('<?php echo $data['bd_rut'];?>')">
												<i style="color:#fff" class="glyphicon glyphicon-trash"></i>
											</button>

										</div>
									</td>
								</tr>
								<?php $no++; } ?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>

		<?php

		require_once "EditarUsuario.php";
		// require_once "../Modals/ModalDatosCronicos.php";

		?>

		<footer class="footer">
			<h3><p align="Center">&copy; Copyright Victor Castro</p></h3>
		</footer>
	</body>
	</html>
