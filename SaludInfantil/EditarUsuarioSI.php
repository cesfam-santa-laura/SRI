<div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document" id="ModalEditar">

		<div class="modal-content">
			<div class="modal-header ">
				<a data-dismiss="modal" class="close">×</a><br>
				<div class="container-fluid">
					<div class="panel panel-primary " >
						<div class="panel-heading">
							<h2>
								<span class="glyphicon glyphicon-pencil"> </span>
								<label class="control-label "> Editar Infrormación Personal Paciente Salud Infantil</label>
							</h2>
						</div>
					</div>

					<legend></legend>

					<form id="formeditar" name="formeditar"  role="form" method="post" action="" onsubmit="return validar(this);">

						<div class="panel panel-primary">

							<div class="panel-heading">
								<span class="glyphicon  glyphicon-user"></span>
								<label class="control-label "> Información de Usuario</label>
							</div>

							<div class="panel-body">
								<div class="row">

									<!-- rut -->
									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">RUT</label>
										<input type="text" class="form-control" id="txtCed" name="txtCed" readonly="readonly">
									</div>

									<!-- nombre -->
									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">Nombre</label><br>
										<input type="text" class="form-control" id="txtNomb" name="txtNomb" onkeyup="javascript:this.value=this.value.toUpperCase();" >
									</div>

									<!-- apellidos -->
									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">Apellidos</label><br>
										<input type="text" class="form-control" id="txtApelli" name="txtApelli" onkeyup="javascript:this.value=this.value.toUpperCase();" >
									</div>

									<!-- genero -->
									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">Sexo</label>
										<select class="form-control " autocomplete="off" name="txtSexo" id="txtSexo">
											<option value="0"> --SELECCIONE-- </option>
											<?php
											$sql = "SELECT * FROM db_sexo";

											$q = mysqli_query($con, $sql);
											while($datos = mysqli_fetch_array($q)){
												echo '<option value="'.$datos[sl_idsex].'">'.$datos[sl_descSex].'</option>';
											} ?>
										</select>
									</div>

									<!-- fecha de nacimiento -->
									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">F.NACIMIENTO</label>
										<br>
										<div class="input-group">
											<input type="date" class="form-control "  id="txtFNac" name="txtFNac" ><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
										</div>
									</div>

									<!-- edad -->
									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">Edad</label>
										<br>
										<input type="text" class="form-control " id="txted" name="txted">
									</div>

									<!-- <div class="form-group col-md-3 col-sm-12 ">
										<label class="control-label ">TELEFONO</label><br>
										<div class="input-group">
											<input type="text" class="form-control" id="txtTelef" name="txtTelef"/>
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-phone"></span>
											</span>
										</div>
									</div> -->

									<!-- telefono -->
									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">Teléfono</label>
										<br>
										<div class="input-group">
											<input type="text" class="form-control" id="txtTelef" name="txtTelef"/>
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-phone"></span>
											</span>
										 </div>
									 </div>

									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">Dirección</label>
										<br>
										<input type="text" class="form-control" id="txtdir" name="txtdir" onkeyup="javascript:this.value=this.value.toUpperCase();" >
									</div>

									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">Población</label>
										<br>
										<input type="text" class="form-control" id="txtPobla" name="txtPobla" onkeyup="javascript:this.value=this.value.toUpperCase();" >
									</div>

									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">Comuna</label>
										<br>
										<input type="text" class="form-control" id="txtComuna" name="txtComuna" onkeyup="javascript:this.value=this.value.toUpperCase();" >
									</div>

									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">País</label>
										<br>
										<div class="input-group">
											<select class="form-control" autocomplete="off" name="txtpaises" id="txtpaises" >

												<option value="0"> --SELECCIONE-- </option>
												<?php
												$sql = "SELECT * FROM db_pais";

												$q = mysqli_query($con, $sql);


												while($datos = mysqli_fetch_array($q)){
													echo '<option value="'.$datos[sl_idPais].'">'.$datos[sl_descPais].'</option>';
												}
												?>

											</select><span class="input-group-addon"><span class="glyphicon glyphicon-th-large"></span></span>
										</div>
									</div>



									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">Pueblo Originario</label><br>
										<div class="input-group">
											<select class="form-control" autocomplete="off" name="txtpuebl" id="txtpuebl" >
												<option value="-"> --SELECCIONE-- </option>
												<option value="SI">Si</option>
												<option value="NO">No</option>
											</select><span class="input-group-addon"><span class="glyphicon glyphicon-th-large"></span></span>
										</div>
									</div>

									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">Cual es su Sector</label>
										<br>
										<div class="input-group">
											<select class="form-control" autocomplete="off" name="txtSector" id="txtSector" >
												<option value=""> --SELECCIONE-- </option>
												<?php
												$sql = "SELECT * FROM db_sector";

												$q = mysqli_query($con, $sql);


												while($datos = mysqli_fetch_array($q)){
													echo '<option value="'.$datos[sl_idSect].'">'.$datos[sl_descSect].'</option>';
												}
												?>

											</select><span class="input-group-addon"><span class="glyphicon glyphicon-th-large"></span></span>
										</div>
									</div>


									<div class="form-group col-md-3 col-sm-12">
										<label class="control-label">N° Ficha</label>
										<br>
										<input type="text" class="form-control " id="txtFic" name="txtFic" >
									</div>
								</div>
							</div>
						</div>


						<div class="modal-footer">
							<button type="button" class="btn btn-success" name="btnGuardarCambios" id="btnGuardarCambios">Guardar Cambios</button>
							<button type="reset" class="btn btn-danger">Borrar</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
						</div>



					</form>

					<div class="registros" id="agrega-alerta"></div>

					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse1">AUDITORIA</a>
								</h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse">
								<div class="panel-body">

									<div class="form-group col-md-3 col-sm-12 ">
										<label class=" control-label">Usuario Creador</label>
										<input type="text" class="form-control" id="txtUser" name="txtUser" disabled >

									</div>

									<div class="form-group col-md-3 col-sm-12 ">
										<label class="control-label ">Fecha Creación</label><br>
										<input type="text" class="form-control "  id="txtDate" name="txtDate" disabled>
									</div>

									<div class="form-group col-md-3 col-sm-12 ">
										<label class="control-label ">Ultima Actualización</label>
										<input type="text" class="form-control" id="txtUserUpdate" name="txtUserUpdate" disabled >

									</div>

									<div class="form-group col-md-3 col-sm-12 ">
										<label class="control-label ">Fecha Actualización</label><br>
										<input type="text" class="form-control "  id="txtDateUpdate" name="txtDateUpdate" disabled>

									</div>

								</div>

							</div>
						</div>
					</div>

				</div>

			</div>

		</div>
	</div>
</div>
