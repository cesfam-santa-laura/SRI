<?php 
	$ced = $_POST['rut'];

	require_once ('../include/conexiones.php');
	
	$sql = "SELECT u.bd_rut, u.bd_nom, u.bd_apell, u.bd_sexo, u.bd_nac, u.bd_telef, u.bd_direc, u.bd_pobl, u.bd_com, u.bd_pais, u.bd_pueblo, u.bd_sect, u.bd_ficha, l.user, u.bd_date, l.user, u.bd_updatedate 
	
	FROM db_usuarios u, login l  
	
	WHERE bd_rut = '$ced' 
	AND u.bd_usercreador = l.id 
	AND u.bd_updateuser = l.id";
			
	$q = mysqli_query($con, $sql);

 	$info = array();

	
    
	while($datos = mysqli_fetch_array($q)){
	
	 $fecha = time() - strtotime($datos['bd_nac']);
	 $edad = floor($fecha / 31556926);		
	
	$rut= $datos['bd_rut'];	
	$nom= $datos['bd_nom'];	
	$apell= $datos['bd_apell'];	
	$sexo= $datos['bd_sexo'];	
	$nac= $datos['bd_nac'];	
	$tel= $datos['bd_telef'];	
	$dire= $datos['bd_direc'];	
	$pobl= $datos['bd_pobl'];	
	$com= $datos['bd_com'];	
	$pais= $datos['bd_pais'];	
	$pueb= $datos['bd_pueblo'];	
	$sect= $datos['bd_sect'];	
	$ficha= $datos['bd_ficha'];	
	$user= $datos['user'];	
	$date= fechaNormal($datos['bd_date']);	
	$updateuser= $datos['user'];		
	$updatedate= $datos['bd_updatedate'];	
	
		
	}

	$info['rut'] = $rut;
	$info['nom'] = $nom;
	$info['apell'] = $apell;
	$info['sexo'] = $sexo;
	$info['nac'] = $nac;
	$info['edad'] = $edad;
	$info['tel'] = $tel;
	$info['dire'] = $dire;
	$info['pobl'] = $pobl;
	$info['com'] = $com;
	$info['pais'] = $pais;
	$info['pueb'] = $pueb;
	$info['sect'] = $sect;
	$info['ficha'] = $ficha;
	$info['user'] = $user;
	$info['date'] = $date;
	$info['updateuser'] = $updateuser;
	$info['updatedate'] = $updatedate;
	
	echo json_encode($info);
 ?>

