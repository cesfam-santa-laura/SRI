<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro Diario Médico</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
       
       
   		<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
				
		
</head>

 <body>

  <div class="jumbotron text-center">
                <h1>Registro Hoja Diaria de Médico</h1>
                    <p>Centro de Salud Familiar Santa Laura</p>
						 <p>Centro de Salud Comunitario Familiar Santa Laura </p>
  </div>   
     
        <div class="top-content">
        	
<!--            <div class="inner-bg">-->
                <div class="container">
                     <div class="row">
                        <div class="col-sm-4 col-sm-offset-4 form-box">
                        	<div class="form-top">
                        		<div class="form-top-center">
                                    <h3><strong>LOGIN</strong></h3>
                            		
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form id="loginForm" method="post" class="login-form" action="validar.php">
			                    	<div class="form-group">
                                        <div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			                        	<input type="text" placeholder="Ingrese su Rut"  name="rut" class="form-username form-control" id="form-username" required>
			                        </div>
                                    </div>
			                        <div class="form-group">
                                        <div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
			                        	<input type="password" placeholder="Contraseña"  name="pass" class="form-password form-control" id="form-password"required>
			                        </div>
                                    </div>
			                        <button type="submit" class="btn btn-primary btn-block" >Ingresar</button>
			                    </form>
		                    </div><br>
							 <?php  
 
      if (empty($_GET['alert'])) {
        echo "";
      } 

      elseif ($_GET['alert'] == 1) {
        echo "<div class='alert alert-danger alert-dismissable' align='center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon glyphicon glyphicon-remove'></i> ¡Error al entrar!</h4>
               Usuario o la contraseña es incorrecta, vuelva a verificar su nombre de usuario y contraseña.
              </div>";
      }

      elseif ($_GET['alert'] == 2) {
        echo "<div class='alert alert-warning alert-dismissable' align='center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon glyphicon glyphicon-info-sign'></i> Error al entrar!</h4>
                El Usuario que intenta ingresar al Sistema no existe en nuestros Registros.
              </div>";
		  
      }elseif ($_GET['alert'] == 3) {
        echo "<div class='alert alert-success alert-dismissable' align='center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon glyphicon glyphicon-ok'></i> Exito!!</h4>
              Has salido con éxito.
              </div>";
      }
      ?>
							
                        </div>
						
                    </div><br>
                   
                </div>
            </div>
            
       

	 	<i class="fa fa-camera-retro"></i>
        <script src="assets/js/jquery.backstretch.min.js"></script> 
        <script src="assets/js/scripts.js"></script>
    
     <footer class="footer">
         <h3> <p align="Center">&copy; Copyright Victor Castro</p></h3>
         </footer>

    </body>
  

 
</html>




