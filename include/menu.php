<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}
require_once "../include/conexiones.php";
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Sistema de Registro Interno - Cronico</title>

	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
	<link href="../assets/dist/css/sb-admin-2.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/stilos.css" rel="stylesheet" type="text/css">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"/>
	<link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet">
	<link href="../assets/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet"/>
	<link href="../assets/datatables-responsive/dataTables.responsive.css" rel="stylesheet"/>
	<link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">

	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.es.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/datatables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../assets/datatables-plugins/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/datatables-responsive/dataTables.responsive.js"></script>
	<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="../js/jquery.Rut.js"></script>
	<script type="text/javascript" src="../js/jquery.Rut.min.js"></script>
	<script type="text/javascript" src="../js/Jquery.js"></script>
</head>

<header>
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Cambiar Navegacion</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand"><strong>   S.R.I. - Cronicos</strong></a>
		</div>

		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="../Star/Inicio.php"><strong>INICIO</strong></a></li>&nbsp;
				<li><a href="../Modals/Paciente.php"><strong>PACIENTES</strong></a></li>
				<li><a href="#"><strong>HISTORIAL DE INFORMACION</strong></a></li>&nbsp;
				<li><a href="#"><strong>REPORTES</strong></a></li>&nbsp;
				<li><a href="../Usuarios/usuarios.php"><strong>ADMINISTRAR USUARIOS</strong>   </a></li>&nbsp;
			</ul>
			<!-- end: menu principal -->

			<!-- start: acceso de rol  -->
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">

					<!-- start: header de login Usuario -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-user"></span> 
						<strong><?php echo $_SESSION['user'];?>
							<span class="glyphicon glyphicon-chevron-down"></span>
						</strong>
					</a>
					<!-- start: header de login Usuario -->

					<ul class="dropdown-menu">

						<!-- start: body de login -->
						<li>
							<div class="navbar-login">
								<div class="row">
									<div class="col-lg-5"><img src="../img/doctor.png"></div>
									<div class="col-lg-7">
										<p class="text-left small"><strong>ACCESO - <?php echo $_SESSION['acceso'];?></strong></p>
										<p class="text-left small"><strong>SECTOR - <?php echo $_SESSION['sector'];?></label></strong></p>
										<!-- <p class="text-left">	 -->
										<p class="text-left small"><strong>CENTRO - <?php echo $_SESSION['centro'];?></strong></p>
									</div>
								</div>
							</div>
						</li>
						<!-- end: body de login -->

						<li class="divider"></li>

						<!-- start: footer de login -->
						<li>
							<div class="navbar-login ">
								<div class="row">
									<div class="col-lg-12">
										<p>
											<button type="button" class="btn btn-info btn-block btn-default" data-toggle="modal" data-target="#logout">
												<span class="fa fa-lock " ></span>
												<strong> Cambiar  Contraseña</strong>
											</button>
										</p>
									</div>
									<div class="col-lg-12">
										<p>
											<button type="button" class="btn btn-danger btn-block btn-default" data-toggle="modal" data-target="#logout">
												<span class="glyphicon glyphicon-log-out"></span>
												<strong> Cerrar Sesion</strong>
											</button>
										</p>
									</div>
								</div>
							</div>
						</li>
						<!-- end: footer de login -->
					</ul>
				</li>
			</ul>
			<!-- end: acceso de rol  -->
		</div>
	</nav>
</header>

	<div class="modal fade" id="logout">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

					<h4 class="modal-title"><i class="fa fa-sign-out"> Salir</i></h4>
				</div>

				<div class="modal-body">
					<p>¿Seguro que quieres salir? </p>
				</div>
				<div class="modal-footer">
					<a type="button" class="btn btn-danger" href="../desconectar.php">Si, Salir</a>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
