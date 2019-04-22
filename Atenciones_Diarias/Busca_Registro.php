<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}

?>

<?php
header('Content-Type: text/html; charset=utf-8');
require_once ('../include/conexiones.php'); 

$desde = $_POST['txtdesde'];
$hasta = $_POST['txthasta'];
$medico= $_POST['txtMedico'];
$desdeNor=fechaNormal($_POST['txtdesde']);
$hastanor=fechaNormal($_POST['txthasta']);
$sector = $_SESSION['sector']; 
        
/* Realizamos la consulta SQL */
$sql="SELECT f.sl_idInfo, f.sl_rutPac,f.sl_pasaport, s.sl_descSex, f.sl_edad, f.sl_mes, t.sl_descSect, p.sl_descPais, a.sl_descAtenc, f.sl_registro

FROM db_sexo s, db_sector t, db_pais p, db_atencion a, db_infoatencion f

WHERE f.sl_sexo = s.sl_idsex
AND f.sl_aten= a.sl_idatenc
AND f.sl_sect = t.sl_idSect
AND f.sl_pais = p.sl_idPais
AND f.sl_usuarioresg like '%$medico%'
AND f.sl_registro BETWEEN '$desde' AND '$hasta'
AND f.sl_sector='$sector'
ORDER BY f.sl_idInfo ASC ";

$result= mysqli_query($con, $sql);

$total=mysqli_num_rows($result);
    

if(($desde==""  && $hasta=="")||($desde>0  && $hasta=="")){
    
?>    
   
      <div class="alert alert-danger">  
          
      <h4 align="center"> <strong>!Error¡</strong> Debe Ingresar FECHAS para iniciar una Busqueda </h4>
        </div>


<?php  
    
} else if($desde>$hasta){?>
      
    
        <div class="alert alert-warning">  
            <h4 align="center"> <strong >[!ERROR EN LAS FECHAS INGRESADAS¡] Favor corregir</strong> </h4>
          
        </div>    

<?php }else  if(mysqli_num_rows($result)==0) {?>
    
    <div class="alert alert-warning">  
            <h4 align="center">
                        <?php if($desde==$hasta){?>
                      
                    No Encontramos Registros con Fecha <strong><?php echo $desdeNor?></strong>
                
                <?php }else{?> 
                
                No Encontramos Registros desde <strong><?php echo $desdeNor?></strong> hasta <strong><?php echo $hastanor ?></strong></h4> 
        
                
                <?php }?>  
        </div>
        
   
  
<?php }else{
       ?>
        
        
 <div class="panel panel-primary">   
    <div class="panel-body"> 

<br><br><table  class="table bordered"  >
    <thead>
         <tr >
             <th colspan="11" > <h3  align="center" >DETALLE DE ATENCIONES DE LOS MÉDICOS </h3>  <h4>Total de Atenciones: <span class="badge"><?php echo $total ?></span></h4></th>
    </tr>
    <tr>
            <th >ID</th>
            <th >RUT</th>
            <th >PASAPORTE</th>
		    <th> SEXO </th>
		    <th> EDAD </th>
            <th> SECTOR</th>
            <th> PAIS </th>
            <th> ATENCION </th>
            <th> REGISTRO </th>
            <th> DETALLE </th>
		 	 
      </tr>
</thead>

<?php
     
    
     while($row=mysqli_fetch_array($result))
     {
?>
 <tr>
<td><?php echo $row['sl_idInfo'] ?></td> 
<td><?php echo $row['sl_rutPac'] ?></td>
<td> <?php echo $row['sl_pasaport']?> </td>
<td> <?php echo $row['sl_descSex']?> </td>
<td> <?php echo $row['sl_edad']?> Años <?php echo $row['sl_mes']?> Meses</td>
<td> <?php echo $row['sl_descSect']?> </td>
<td> <?php echo $row['sl_descPais']?> </td>
<td> <?php echo $row['sl_descAtenc']?> </td>    
<td> <?php echo fechaNormal($row['sl_registro']) ?> </td>
<td> <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#Detalle" onclick="Detalle('<?php echo $row['sl_idInfo']?>')" ><span class="glyphicon glyphicon-paperclip"></span> Detalle</button>
</td>     
     
     
 
 
<?php  }
     }
/**/

?>
</table>
     </div> 
     </div>
     
