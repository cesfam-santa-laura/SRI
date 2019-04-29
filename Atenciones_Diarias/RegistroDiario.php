<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
require_once ("../include/menu.php");
require_once ("../include/conexiones.php");
?>
<body>
  <div class="container-fluid">

    <div class="panel panel-primary " >
      <div class="panel-heading">
        <h2>
          <span class="glyphicon glyphicon-book"></span>
          <label class="control-label">Consulta Registro Atenciones Diarias</label>
        </h2>
      </div>
    </div>

    <div class="panel panel-primary">

      <form id="form2" method="POST" action="Reporte_Registro_Medico.php"  >
        <div class="panel-body">

          <div class="col-xs-2 col-md-offset-0">
            <label class="control-label ">DESDE</label>
            <input type="date" autocomplete="off" class="form-control " id="bd-desde" name="txtdesde">
          </div>

          <div class="col-xs-2 col-md-offset-0">
            <label class="control-label ">HASTA</label>
            <input type="date" autocomplete="off" class="form-control " id="bd-hasta" name="txthasta">
          </div>

          <div class="form-group col-md-2 col-md-offset-0">
            <label class="control-label">MEDICO</label>
            <br>
            <div class="input-group">
              <select class="form-control" autocomplete="off" name="txtMedico" id="txtMedico" >
                <option value="">SELECCIONE</option>
                <?php

                $sql = "SELECT * FROM login WHERE sector = '$sector' AND permiso ='MÉDICO'";
                $q = mysqli_query($con, $sql);

                while( $datos = mysqli_fetch_array($q) ) {
                  echo '<option value="'.$datos[user].'">'.$datos[user].'</option>';
                }
                ?>
              </select>
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-th-large"></span>
              </span>
            </div>
          </div>

          <br>

          <div class="col-xs-3 col-md-offset-0">
            <button class="btn btn-primary" type="button" id="btnRegistro" name="btnRegistro" > <span class="glyphicon glyphicon-search"></span> Buscar Registro</button>
            <button class="btn btn-success btn-social btn-submit" style="width: 170px;">
              <span class="glyphicon glyphicon-download-alt"></span> Exportar a Excel
            </button>
          </div>

          <br><br>

        </div>
      </form>

    </div>

    <div class="registros" id="agrega-registros"></div>

    <div class="modal fade" id="Detalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document" id="mdialTamanio">
        <div class="modal-content">
          <div class="modal-header ">

            <a data-dismiss="modal" class="close">×</a>
            <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> Detalle Atencion:</h3>

          </div>

          <div class="modal-body">
            <div class="panel panel-primary " >
              <div class="panel-body">
                <div class="row">

                  <div class="form-group col-md-2 col-md-offset-0">
                    <label class="control-label">RUT</label>
                    <div class="input-group ">
                      <input type="text" class="form-control " id="txtCedula" name="txtCedula" disabled>
                    </div>
                  </div>

                  <div class="form-group col-md-2 col-md-offset-0">
                    <label class="control-label">PASAPORTE</label>
                    <div class="input-group ">
                      <input type="text" class="form-control " id="miarea" name="miarea" disabled>
                    </div>
                  </div>

                  <div class="form-group col-md-2 col-md-offset-0">
                    <label class="control-label">MEDICO RESPONSABLE</label>
                    <div class="input-group ">
                      <input type="text" class="form-control " id="txtmedico" name="txtmedico" disabled>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <form id="form1" name="form1"  role="form" method="post" action="" >

              <div class="panel panel-primary " >
                <div class="panel-heading">
                  <label class="control-label col-xm-4"> INFORMACION ATENCIÓN</label>
                </div>

                <div class="panel-body">
                  <div class="row">

                    <div class="form-group col-md-2 col-md-offset-0">
                      <label class="control-label">TIPO DE ATENCION</label>
                      <input class="form-control" name="txtTipAten" id="txtTipAten" disabled >
                    </div>

                    <div class="form-group col-md-2 col-md-offset-0">
                      <label class="control-label">EV. NEUROSENSIORIAL</label>
                      <input class="form-control" name="txtEvNeur" id="txtEvNeur" disabled>
                    </div>

                    <div class="form-group col-md-2 col-md-offset-0">
                      <label class="control-label">CONSEJERIA INDIVIDUAL O BREVE</label>
                      <input class="form-control" name="txtEvNeur" id="txtConsejeria" disabled>
                    </div>

                    <div class="form-group col-md-8 col-md-offset-0">
                      <label class="control-label">OBSERVACION DIAGNOSTICO</label>
                      <textarea id="taComentario" name="taComentario" class="form-control" rows="3" disabled ></textarea>
                      <p id="contadorTaComentario">0/30</p>
                    </div>

                    <div class="form-group col-md-2 col-md-offset-0">
                      <label class="control-label">FECHA Y HORA</label>
                      <input type="text" class="form-control " autocomplete="off" name="txtcreacion" id="txtcreacion" disabled>
                    </div>

                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    <legend></legend>

    <footer class="footer">
      <h3><p align="Center">&copy; Copyright Victor Castro</p></h3>
    </footer>

  </div>

</body>
</html>
