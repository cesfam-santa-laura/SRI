<!DOCTYPE html>
<html>
<body>
	<?php require_once ("../include/menu.php"); ?>

	<div class="container-fluid">

		<!-- start: breadcrumb -->
		<div class="row">
			<div class="col-lg-12 col-xs-12 ">
				<ol class="breadcrumb bread-primary ">
					<li><a href="../Star/Inicio.php"><i class="fa fa-home"></i> Home</a></li>
					<li><a href="../Modals/Paciente.php"><i class="fa fa-user"></i> Pacientes Cronicos</a></li>
					<li class="active"><i class="fa fa-pencil"></i> Ingreso Usuario</li>
				</ol>
			</div>
		</div>
		<!-- end: breadcrumb -->

		<div class="panel panel-primary " >
			<div class="panel-heading">
				<h2><span class="glyphicon glyphicon-pencil"> </span><label class="control-label">&nbsp;Registro Usuario Cronico</label> </h2>
			</div>
		</div>

		<form id="formUsuario" name="formUsuario"  role="form" method="post" action="GuardarInfoUsuario.php" onsubmit="return validar(this);">

			<div class="panel panel-primary " >
				<div class="container">
					<div class="panel-body">

						<div class="form-group col-md-5" >
							<input type="text" class="form-control " id="txtCedula" name="txtCedula" placeholder="Ingrese el Rut a Consultar" required>
						</div>
						<button  class="btn btn-primary" type="button" class="btn btn-success" id="btnVerificar" name="btnVerificar">VALIDAR</button>

					</div>
				</div>
			</div>

			<div class="registros" id="agrega-formulario"></div>

		</form>
	</div>

	<footer class="footer">
		<h3><p align="Center">&copy; Copyright Victor Castro</p></h3>
	</footer>

</body>
</html>
