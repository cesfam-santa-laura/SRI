<!DOCTYPE html>

<html> 
	
	
         
        
		
<?php
		
	require_once "../include/menu.php";	
 
    require_once "../include/conexiones.php"; 
?>
<body>




	
<div class="container-fluid">
<div class="row">
      <div class="col-lg-12 col-xs-12" >
        <div class="alert alert-success" role="alert" >
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>	
          <p style="font-size:15px" >
            <i class="icon fa fa-user"></i> Bienvenido <strong><?php echo $_SESSION['user']; ?></strong> a la aplicación de Registro de Cronicos. 
          </p>        
        </div>
      </div>  
	
    </div>	
	
	
  <div class="panel panel-primary">
        <div class="panel-body">
		
			 <div class="row">
                <div class="col-lg-3 col-md-6">
                    <?php 
                    $consulta = mysqli_query($con, "SELECT  * FROM db_usuarios where bd_sect =3")  or die('error: '.mysqli_error($con));
                    
                         $azul=mysqli_num_rows($consulta)
                    ?>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $azul ?></div>
                                    <div>Pacientes Cronicos Azul</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <?php 
                    $consulta = mysqli_query($con, "SELECT  * FROM db_usuarios where bd_sect =2")  or die('error: '.mysqli_error($con));
                    
                         $verde=mysqli_num_rows($consulta)
                    ?>
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $verde ?></div>
                                    <div>Pacientes Cronicos Verde</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-6">
                    <?php 
                    $consulta = mysqli_query($con, "SELECT  * FROM db_usuarios where bd_sect =1")  or die('error: '.mysqli_error($con));
                    
                         $rojo=mysqli_num_rows($consulta)
                    ?>
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $rojo ?></div>
                                    <div>Pacientes Cronicos Rojo</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
				 
				  <div class="col-lg-3 col-md-6">
                       <?php 
                    $consulta = mysqli_query($con, "SELECT  * FROM db_usuarios where bd_sect =4")  or die('error: '.mysqli_error($con));
                    
                         $cecof=mysqli_num_rows($consulta)
                    ?>
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $cecof ?></div>
                                    <div>Pacientes Cronicos Cecof</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
			
	  </div>
	</div>

   <div class="panel panel-primary">
        <div class="panel-body">
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                     <!-- /.panel -->
                    <div class="panel  panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="pull-right">
                               
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>$8345.23</td>
                                                </tr>
                                                <tr>
                                                    <td>3321</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:23 PM</td>
                                                    <td>$245.12</td>
                                                </tr>
                                                <tr>
                                                    <td>3320</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:15 PM</td>
                                                    <td>$5663.54</td>
                                                </tr>
                                                <tr>
                                                    <td>3319</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:13 PM</td>
                                                    <td>$943.45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-footer">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                               
                            </div>
                            <!-- /.list-group -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                   
                    <!-- /.panel -->
                    
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
	   </div>
	   
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    

</body>
</html>