

<!DOCTYPE html>

<html> 
	
	<body>
         
        
<?php
     require_once ("../include/menu.php"); 
    require_once ('../include/conexiones.php'); 
?>

<div class="container-fluid"> 
   <div class="panel panel-primary " >
    <div class="panel-heading"> 
       <h2><span class="glyphicon glyphicon-pencil"> </span><label class="control-label">&nbsp;Registro Medico</label> </h2>
    </div>     
    </div>
         

<form id="form1" name="form1"  role="form" method="post" action="" onsubmit="return validar(this);">           
 
               
                    
<div class="panel panel-primary " >
    <div class="panel-heading"> <span class="glyphicon  glyphicon-user"></span>    
        <label class="control-label">&nbsp;  INFORMACION USUARIO</label> 
    </div>
<div class="panel-body">
<div class="row">
                    <div class="form-group col-md-2 col-md-offset-0">
                      <label class="control-label">RUT</label>
                        <div class="input-group ">
                           <input type="text" class="form-control " id="txtCedula" name="txtCedula" onKeyPress="if (event.keyCode == 32) event.returnValue = false;">
                            <span class="input-group-btn">
                               <button class="btn btn-default" type="button" onclick="BuscaRut($('#txtCedula').val());return false;"><i class="glyphicon glyphicon-search"></i>
                              </button>
                            </span>
                         </div>
                    </div>
    
                    <div class="form-group col-md-2 col-md-offset-0">
                      <label class="control-label">PASAPORTE</label>
                        <div class="input-group ">
                           <input type="text" class="form-control " id="miarea" name="miarea" onblur="this.value=remover(this.value);">
                            <span class="input-group-btn">
                               <button class="btn btn-default" type="button" onclick="Pasaporte($('#miarea').val());return false;"><i class="glyphicon glyphicon-search"></i>
                              </button>
                            </span>
                         </div>
                    </div>
    
                    <div class="form-group col-md-2 col-md-offset-0">
                        <label class="control-label">SEXO</label>
                        <select class="form-control " autocomplete="off" name="txtSex" id="txtSex">
				                        <option value="0"> --SELECCIONE-- </option>
										<?php
                                $sql = "SELECT * FROM db_sexo ";
			
                                $q = mysqli_query($con, $sql);

 	          
                                while($datos = mysqli_fetch_array($q)){
                                    echo '<option value="'.$datos[sl_idsex].'">'.$datos[sl_descSex].'</option>';
                                    }
                                ?>
                        </select>
				    </div>
    
                    <div class="form-group col-md-2 col-md-offset-0">
						<label class="control-label">F.NACIMIENTO</label><br>
                        <div class="input-group col-xs-10">
				        <input type="date" autocomplete="off" class="form-control " id="txtFechaNac" name="txtFechaNac" ><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                       </div>  
				    </div>
    
                    <div class="form-group col-md-1 col-md-offset-0">
						<label class="control-label">AÑOS</label><br>
				        <input type="text" class="form-control " id="txtEdad" name="txtEdad" onclick="calcularEdad()"  readonly="readonly">
				    </div>  
                    <div class="form-group col-md-1 col-md-offset-0">
						<label class="control-label">MES</label><br>
				        <input type="text" class="form-control " id="txtMes" name="txtMes" onclick="calcularEdad()"  readonly="readonly">
				    </div>  
                    
                    <div class="form-group col-md-2 col-md-offset-0">
                        <label class="control-label">SECTOR PACIENTE</label><br>
                        <div class="input-group">                                
						<select class="form-control" autocomplete="off" name="txtSect" id="txtSect" >
				            <option value="0"> --SELECCIONE-- </option>
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
    
    
   
                    <div class="form-group col-md-2 col-md-offset-0">
                        <label class="control-label">PAIS</label><br>
                        <div class="input-group">                                
						<select class="form-control" autocomplete="off" name="txtpais" id="txtpais" >
                            
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
    
    
    
                    <div class="form-group col-md-2 col-md-offset-0">
                        <label class="control-label">PUEBLO ORIGINARIO</label><br>
                        <div class="input-group">                                
						<select class="form-control" autocomplete="off" name="txtpueblo" id="txtpueblo" >
				            <option value="-"> --SELECCIONE-- </option>
								<option value="SI">SI</option>
								<option value="NO">NO</option>
							</select><span class="input-group-addon"><span class="glyphicon glyphicon-th-large"></span></span>
                        </div>
                    </div>
    
            
         </div>
          
         </div>
             </div>       
                    
                    
   
                 
    <legend>
                </legend>

<div class="panel panel-primary " >
    <div class="panel-heading"><span class="glyphicon  glyphicon-paperclip"></span>     
        <label class="control-label col-xm-4">&nbsp; INFORMACION DE LA ATENCIÓN</label> 
    </div>
<div class="panel-body">
<div class="row">
                                   
                 
                    <div class="form-group col-md-2 col-md-offset-0">
                        <label class="control-label">ATENCION</label>
                        <select class="form-control" name="txtAten" id="txtAten">
                            <option value="0"> --SELECCIONE-- </option>
				            <?php
                        $sql = "SELECT * FROM db_atencion ";
			
	                   $q = mysqli_query($con, $sql);

 	          
	                   while($datos = mysqli_fetch_array($q)){
                            echo '<option value="'.$datos[sl_idatenc].'">'.$datos[sl_descAtenc].'</option>';
                        }
                                ?>
                        </select>
				    </div> 
    
                    <div class="form-group col-md-3 col-md-offset-0">
                        <label class="control-label">TIPO DE ATENCIÓN</label><br>
                        <div class="input-group">                                
						<select class="form-control" name="txtTipAten" id="txtTipAten" >
				            <option value="0"> --SELECCIONE-- </option>
							                         
                        </select>
                        </div>
                    </div>
          
                     <div class="form-group col-md-2 col-md-offset-0">
                      <label class="control-label">EV. NEUROSENSIORIAL</label>
                     <select class="form-control" name="txtEvNeur" id="txtEvNeur">
                         <option value="-">--SELECCIONE--</option>
				          <?php
                        $sql = "SELECT * FROM db_evlneu";
			
	                    $q = mysqli_query($con, $sql);

 	          
	                     while($datos = mysqli_fetch_array($q)){
                                echo '<option value="'.$datos[sl_idevol].'">'.$datos[sl_descEvlNeu].'</option>';
                        }
                                ?>
                            </select>
				    
                    </div>
    
                    <div class="form-group col-md-2 col-md-offset-1">
                      <label class="control-label">CONSEJERIA INDIVIDUAL O BREVE</label>
                     <select class="form-control" name="txtConsejeria" id="txtConsejeria">
                         <option value="-">--SELECCIONE--</option>
				           
                        <?php
                         $sql = "SELECT * FROM db_consejeria";
			
	                    $q = mysqli_query($con, $sql);

 	          
	                     while($datos = mysqli_fetch_array($q)){
                                echo '<option value="'.$datos[sl_desConsj].'">'.$datos[sl_desConsj].'</option>';
                        }
                                ?>
                         
                            </select>
				    
                    </div>

                  <div class="form-group col-md-12 col-md-offset-0">
                    <label class="control-label">OBSERVACION DIAGNOSTICO</label>
                  <textarea  id="taComentario" name="taComentario" class="form-control" rows="4" onkeyup="javascript:this.value=this.value.toUpperCase();" ></textarea>
                       <p id="contadorTaComentario">0/60</p>
                  </div>  
   
                   
    
                 
    
                  
                    
         </div>
         </div>
             </div>         
      <div class="modal-footer">
        <button type="reset" class="btn btn-default" >Borrar</button>
        <button  class="btn btn-primary" type="button" class="btn btn-success left"  name="btnProcesar2" id="btnProcesar2">Guardar Cambios</button>
      </div>  
             
</form>     
                
            
        
        </div>    
      
        
    <footer class="footer">
        <h3><p align="Center">&copy; Copyright Victor Castro</p></h3>
    </footer>
 </body>  
</html>