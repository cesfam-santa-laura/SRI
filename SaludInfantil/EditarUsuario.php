<!-- start: modal de Editar Usuario -->
<div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document" id="ModalEditar">
		<div class="modal-content">
			<div class="modal-header ">
				<a data-dismiss="modal" class="close">×</a><br>
				<div class="container-fluid">

					<div class="panel panel-primary">

						<div class="panel-heading">

								<h2 class="panel-title">
									<span class="glyphicon glyphicon-user"> </span>
									Infrormación Usuario
								</h2>

						</div>

						<div class="panel-body">

							<div class="tab-content">

								<form id="formeditar" name="formeditar"  role="form" method="post" action="" onsubmit="return validar(this);">

									<div class="form-group col-md-3">
										<label class="control-label">RUT</label>
										<input type="text" class="form-control " id="txtCed" name="txtCed" readonly>
									</div>

									<div class="form-group col-md-3">
										<label class=" control-label">Nombres</label>
										<input type="text" class="form-control" id="txtNomb" name="txtNomb" onkeyup="javascript:this.value=this.value.toUpperCase();"readonly>
									</div>

									<div class="form-group col-md-3">
										<label class="control-label">Apellidos</label>
										<input type="text" class="form-control" id="txtApelli" name="txtApelli" onkeyup="javascript:this.value=this.value.toUpperCase();" readonly>
									</div>

									<div class="form-group col-md-3">
										<label class="control-label">Género</label>
										<input type="text" class="form-control" name="txtSexo" id="txtSexo" readonly>
										<!-- <select class="form-control " autocomplete="off" name="txtSexo" id="txtSexo" readonly>
											<option value="0"> --SELECCIONE-- </option>
											<?php

											$sql = "SELECT * FROM db_sexo ";
											$q = mysqli_query($con, $sql);

											while( $datos = mysqli_fetch_array($q) ) {
												echo '<option value="'.$datos[sl_idsex].'">'.$datos[sl_descSex].'</option>';
											}

											?>
										</select> -->
									</div>

									<div class="form-group col-md-3">
										<label class="control-label">F. Nacimiento</label><br>
										<input type="date" class="form-control "  id="txtFNac" name="txtFNac" readonly>
									</div>

									<div class="form-group col-md-3">
										<label class="control-label">Edad</label><br>
										<input type="text" class="form-control " id="txted" name="txted" readonly>
									</div>

									<div class="form-group col-md-3">
										<label class="control-label">Sector</label><br>
										<input type="text" class="form-control" autocomplete="off" id="txtSector" name="txtSector" readonly>
											<!-- <select class="form-control" autocomplete="off" name="txtSector" id="txtSector">
												<option value=""> -- SELECCIONE -- </option>

												<?php
												$sql = "SELECT * FROM db_sector";
												$q = mysqli_query($con, $sql);

												while( $datos = mysqli_fetch_array($q) ) {
													echo '<option value="'.$datos[sl_idSect].'">'.$datos[sl_descSect].'</option>';
												}
												?>

											</select> -->
									</div>

									<div class="form-group col-md-3">
										<label class="control-label">N° Ficha</label><br>
										<input type="text" class="form-control " id="txtFic" name="txtFic" readonly>
									</div>

								</form>

							</div>

						</div>

					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-primary">

								<div class="panel-heading">
									<h2 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Datos de cuidador/a</h2>
								</div>

								<div class="panel-body">
									<form class="form-horizontal">

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">RUT</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">Nombre</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">Nacionalidad</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">Contacto</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

								</div>

							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-primary">

								<div class="panel-heading">
									<h2 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Datos del nacimiento </h2>
								</div>

								<div class="panel-body">
									<form class="form">

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">FECHA</label>
											<div class="col-md-9">
												<input type="date" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">EDAD GESTACIONAL</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">PESO</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">TALLA</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">P. CRANEANO</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">TIPO DE PARTO</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">APGAR</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">VIR. D. DOSIS</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="#SaludMenta">FECHA O PERIODO</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fechaPi" readonly>
											</div>
										</div>

								</div>

							</div>
						</div>

					</div>


					<!-- start: panel de informacion -->
					<div class="panel panel-primary">
						<!-- START: HEADER -->
						<div class="panel-heading">
							<h2 class="panel-title"> <span class="glyphicon glyphicon-info-sign"></span> Información </h2>
						</div>
						<!-- start: panel body -->
						<div class="panel-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
						<!-- start: table -->
						<!--Table-->
						<table id="tablePreview" class="table">
						<!--Table head-->
						  <thead>
						    <tr>
						      <th>#</th>
						      <th>Fecha</th>
						      <th>Edad</th>
						      <th>Peso</th>
						      <th>Talla</th>
						      <th>Presion de Arteral (P/A)</th>
						      <th>Clasifiación P/A</th>
						      <th>Cirunferencia cintura</th>
						      <th>I.M.C.</th>
						      <th>Desviacion estabda</th>
						      <th>I.M.C.</th>
						      <th>Estado nitruccion</th>
						      <th>Country</th>
						    </tr>
						  </thead>
						  <!--Table head-->
						  <!--Table body-->
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Jacob</td>
						      <td>Thornton</td>
						      <td>@fat</td>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>
						      <td>Jacob</td>
						      <td>Thornton</td>
						      <td>@fat</td>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td>Larry</td>
						      <td>the Bird</td>
						      <td>@twitter</td>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>
						      <td>Jacob</td>
						      <td>Thornton</td>
						      <td>@fat</td>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>
						    </tr>
						  </tbody>
						  <!--Table body-->
						</table>
						<!--Table-->

						<!-- start: panel footer -->
						<div class="panel-footer">
							<button type="button" class="btn btn-success right" name="btnGuardarCambios" id="btnGuardarCambios">Guardar Cambios</button>
							<button type="reset" class="btn btn-danger" >Borrar</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>

					</div>
					<!-- end: Panel de informacion -->

				</div>

				<legend></legend>



			</div>
		</div>
	</div>
</div>
</div>
<!-- end: modal de Editar Usuario -->
