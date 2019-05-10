<!-- start: modal de Editar Usuario -->
<div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document" id="ModalEditar">
		<div class="modal-content">
			<div class="modal-header ">
				<a data-dismiss="modal" class="close">×</a><br>
				<div class="container-fluid">

					<div class="panel panel-primary">

						<div class="panel-heading">

								<h3 class="panel-title">
									<span class="glyphicon glyphicon-user"> </span>
									Infrormación Usuario
								</h3>

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



					<div class="panel panel-primary">

						<div class="panel-heading">

							<span class="fa fa-info"></span>
							información

						</div>

						<div class="panel-body">

							<div class="tab-content">

								<ul class="with-nav-tabs nav nav-tabs nav-justified">

									<li class="active"><a data-toggle="tab" href="#home"> <i class="fa fa-info-circle"></i> Ingresa información</a></li>
									<li><a data-toggle="tab" href="#historiales"> <i class="fa fa-history"></i> Historiales</a></li>

								</ul>
								<div class="tab-content">

									<!-- start: tab de Ingresa Información -->
									<div class="tab-pane fade in active" id="home">

										<!-- start: panel tab -->
										<div class="panel with-nav-tabs ">

												<div class="panel-heading">
													<ul class="nav nav-tabs">
														<li class="active"><a href="#tab1primary" data-toggle="tab"><h4>DIAGNOSTICOS</h4></a></li>
														<li><a href="#tab2primary" data-toggle="tab"><h4>FACTORES DE RIESGO</h4></a></li>
														<li><a href="#tab3primary" data-toggle="tab"><h4>ULTIMO CONTROL</h4></a></li>
														<li><a href="#tab4primary" data-toggle="tab"><h4>COMPLICACIONES</h4></a></li>
													</ul>
												</div>

												<div class="panel-body">
													<div class="tab-content">

														<!-- start: 1 tab -->
														<div class="tab-pane fade in active" id="tab1primary">

															<div class="form-group col-md-1">
																<label class="control-label">HTA</label>
																<br>
																<select class="form-control" name="txthta" id="txthta">
																	<option value=""> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1">
																<label class="control-label">DM</label><br>
																<select class="form-control" name="txtdm" id="txtdm">
																	<option value=""> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1">
																<label class="control-label">DISLIP</label>
																<br>
																<select class="form-control" name="txtdislip" id="txtdislip">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1 " >
																<label class="control-label">GAA</label>
																<br>
																<select class="form-control" name="txtgaa" id="txtgaa">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1">
																<label class="control-label">I.GLUCOSA</label>
																<br>
																<select class="form-control" name="txtglucosa" id="txtglucosa">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1">
																<label class="control-label">EPOC</label>
																<br>
																<select class="form-control" name="txtepoc" id="txtepoc">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<br>
															<br>
															<br>
															<br>


															<div class="form-group col-md-1">
																<label class="control-label">OTRARESP</label>
																<br>
																<select class="form-control" name="txtlacfa" id="txtlacfa">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1" >
																<label class="control-label">RI</label>
																<br>
																<select class="form-control" name="txtri" id="txtri">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1">
																<label class="control-label">ASMA</label>
																<br>
																<select class="form-control" name="txtasma" id="txtasma">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1">
																<label class="control-label">O.DEPEND</label>
																<br>
																<select class="form-control" name="txtodepen" id="txtodepen">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1">
																<label class="control-label">EPI</label>
																<br>
																<select class="form-control" name="txtepi" id="txtepi">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1 ">
																<label class="control-label">OBESIDAD</label>
																<br>
																<select class="form-control" name="txtobes" id="txtobes">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

														</div>
														<!-- end: 1 tab -->
														<!-- start: 2 tab -->
														<div class="tab-pane fade" id="tab2primary">

															<div class="form-group col-md-1" >
																<label class="control-label">TABACO</label>
																<br>
																<select class="form-control" name="txttaba" id="txttaba">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1 " >
																<label class="control-label">IAM</label><br>
																<select class="form-control" name="txtiam" id="txtiam">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1">
																<label class="control-label">ACV</label><br>
																<select class="form-control" name="txtacv" id="txtacv">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-1">
																<label class="control-label">SEDENTA</label><br>
																<select class="form-control" name="txtseden" id="txtseden">
																	<option value="-"> --</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<br><br><br><br>

															<div class="form-group col-md-3 ">
																<label class="control-label"> ((5% (5-9%) (10-19%) 19%))</label><br>
																<select class="form-control " name="txtriesgo" id="txtriesgo">
																	<option value="-">  ----SELECCIONE----  </option>
																	<option value="Bajo">BAJO</option>
																	<option value="Moderado">MODERADO</option>
																	<option value="Alto">ALTO</option>
																</select>
															</div>

															<div class="form-group col-md-2 ">
																<label class="control-label ">FECHA FONDO DE OJO</label>
																<div class="input-group">
																	<input type="date"  placeholder="" id="txtFonOjo" name="txtFonOjo" class="form-control date-picker" data-date-format="dd-mm-yyyy"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
																</div>
															</div>

														</div>
														<!-- end: 2 tab -->
														<!-- start: 3 tab -->
														<div class="tab-pane fade" id="tab3primary">

															<div class="form-group col-md-2">
																<label class="control-label ">F. ULTIMO CONTROL</label><br>
																<input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" id="txtUltCont" name="txtUltCont" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">F. PROX. CONTROL</label><br>
																<input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy"  id="txtProxCont" name="txtProxCont" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">F. ULT. EMPAM</label><br>
																<input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="" id="txtUltEmp" name="txtUltEmp" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">F. EXAMENES</label><br>
																<input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="" id="txtfexamen" name="txtfexamen" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">F. ING. INSULINA</label><br>
																<input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="" id="txtfinsulina" name="txtfinsulina" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">F. ULT. PAP</label><br>
																<input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="" id="txtfpap" name="txtfpap" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">ESTADO PAP</label><br>
																<select class="form-control" name="txtEstPap" id="txtEstPap">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="VIGENTE">VIGENTE</option>
																	<option value="NO VIGENTE">NO VIGENTE</option>
																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">FECHA RAC</label>
																<input type="date" class="form-control" placeholder="" id="txtrac" name="txtrac" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">TGCE(T. Elevados)</label>
																<input type="text" class="form-control" placeholder="" id="txtTGCE" name="txtTGCE" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">Valor TGCE </label><br>
																<input type="text" class="form-control" placeholder="" id="txtValorTGCE" name="txtValorTGCE">
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">PA SISTOLICA </label><br>
																<input type="text" class="form-control" placeholder="" id="txtSistol" name="txtSistol">
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">PA DIASTOLICA</label><br>
																<input type="text" class="form-control" placeholder="" id="txtDiaslos" name="txtDiaslos">
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">PESO</label><br>
																<input type="text" class="form-control" placeholder="Kg" id="txtPeso" name="txtPeso">
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">TALLA</label><br>
																<input type="text" class="form-control" placeholder="Cm" id="txtTalla" name="txtTalla">
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">IMC</label><br>
																<input type="text" class="form-control" placeholder="" id="txtImc" name="txtImc" onclick="calcularImc()" value="0" readonly="readonly" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">HBA1C</label><br>
																<input type="text" class="form-control" placeholder="" id="txtHba1c" name="txtHba1c">
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">CREAT</label><br>
																<input type="text" class="form-control" placeholder="" id="txtCreat" name="txtCreat">
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">MICRO ALB</label><br>
																<input type="text" class="form-control" placeholder="" id="txtMicrolab" name="txtMicrolab">
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">COLESTEROL T</label><br>
																<input type="text" class="form-control" placeholder="" id="txtColest" name="txtColest" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">HDL</label><br>
																<input type="text" class="form-control " placeholder="" id="txtHdl" name="txtHdl" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">TGC</label><br>
																<input type="text" class="form-control" placeholder="" id="txtTgc" name="txtTgc" >
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">LDL</label><br>
																<input type="text" class="form-control" placeholder=""  id="txtLdl" name="txtLdl" onclick="calcularLdl()" value="0" readonly="readonly">
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">VFG (Cockcroft)</label><br>
																<input type="text" class="form-control" placeholder="" id="txtVfg" name="txtVfg" onclick="calcularVfg()" value="0" readonly="readonly">
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">ETAPA RENAL</label><br>
																<input type="text" class="form-control" placeholder="" id="txtRenal" name="txtRenal"   onclick="etapaRenal()" readonly="readonly">
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">IECA/ARA2  </label><br>
																<select class="form-control" name="txtIara" id="txtIara">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="NO">NO</option>
																	<option value="ENALAPRIL">ENALAPRIL</option>
																	<option value="PROPANOLOL">PROPANOLOL</option>
																	<option value="LOSARTAN">LOSARTAN</option>
																	<option value="OTROS">OTROS</option>
																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">USO ASPIRINA? </label><br>
																<select class="form-control" name="txtaspi" id="txtaspi">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">USO ESTATINA? </label><br>
																<select class="form-control " name="txtestati" id="txtestati">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">USO INSULINA?</label><br>
																<select class="form-control" name="txtinsul" id="txtinsul">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

														</div>
														<!-- end: 3 tab -->
														<!-- start: 4 tab -->
														<div class="tab-pane fade" id="tab4primary">

															<div class="form-group col-md-3">
																<label class="control-label">PIE DIAB. ULCERADO</label><br>
																<select class="form-control " name="txtpulcerado" id="txtpulcerado">
																	<option value="0">-SELECCIONE-</option>
																	<option value="1">NO</option>
																	<option value="2">SI CON CURACIÓN CONVENCIONAL</option>
																	<option value="3">SI CON CURACIÓN AVANZADA</option>
																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">AMPUTADO </label><br>
																<select class="form-control " name="txtampu" id="txtampu">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>

																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">CEGUERA</label><br>
																<select class="form-control " name="txtceguera" id="txtceguera">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">HIV</label><br>
																<select class="form-control " name="txthiv" id="txthiv">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">DEMENCIA </label><br>
																<select class="form-control" name="txtdemencia" id="txtdemencia">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">HEMATURIA</label><br>
																<select class="form-control " name="txtemat" id="txtemat">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">ANT.NEFROUROLOGICOS</label><br>
																<select class="form-control " name="txtnerf" id="txtnerf">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-3">
																<label class="control-label">F. CON ENF. RENAL CRONICA </label><br>
																<select class="form-control " name="txtfamrenal" id="txtfamrenal">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label">DIALISIS</label><br>
																<select class="form-control " name="txtdialisis" id="txtdialisis">
																	<option value="-"> --- SELECIONE ---</option>
																	<option value="SI">SI</option>
																	<option value="NO">NO</option>
																</select>
															</div>

															<div class="form-group col-md-2">
																<label class="control-label ">FECHA DIALISIS</label><br>
																<div class="input-group col-xs-11">
																	<input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="" id="txtfdialisis" name="txtfdialisis">
																	<span class="input-group-addon">
																		<span class="glyphicon glyphicon-calendar"></span>
																	</span>
																</div>
															</div>

														</div>
														<!-- end: 4 tab -->

													</div>
												</div>
											</div>
										<!-- end: panel tab -->

									</div>
									<!-- end: tab de Ingresa Información -->

									<!-- start: tab de historiales -->
									<div class="tab-pane fade"  id="historiales">

										<div class="registros" id="agrega-alerta"></div>

										<div class="panel-group">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" href="#auditoria">AUDITORIA</a>
													</h4>
												</div>
												<div id="auditoria" class="panel-collapse collapse">
													<div class="panel-body">

														<div class="form-group col-md-2">
															<label class=" control-label">Usuario Creador</label>
															<input type="text" class="form-control" id="txtUser" name="txtUser" readonly>
														</div>

														<div class="form-group col-md-2 ">
															<label class="control-label">Fecha Creación</label><br>
															<div class="input-group">
																<input type="text" class="form-control "  id="txtDate" name="txtDate" readonly>
																<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
															</div>
														</div>

														<div class="form-group col-md-3">
															<label class=" control-label">Ultima Actualización</label>
															<input type="text" class="form-control" id="txtUserUpdate" name="txtUserUpdate" readonly >

														</div>

														<div class="form-group col-md-3">
															<label class="control-label">Fecha Ultima Actualización</label><br>
															<div class="input-group">
																<input type="text" class="form-control "  id="txtDateUpdate" name="txtDateUpdate" readonly>
																<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
															</div>
														</div>

													</div>

												</div>
											</div>
										</div>
									</div>
									<!-- end: tab de historiales -->

								</div>
							</div>

						</div>

						<!-- start: panel footer -->
						<div class="panel-footer">
							<button type="button" class="btn btn-success right" name="btnGuardarCambios" id="btnGuardarCambios">Guardar Cambios</button>
							<button type="reset" class="btn btn-danger" >Borrar</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
						<!-- start: panel footer -->

					</div>

				</div>

				<legend></legend>



			</div>
		</div>
	</div>
</div>
</div>
<!-- end: modal de Editar Usuario -->
