<?php 
	$ced = $_POST['id'];

	require_once ('../include/conexiones.php');
	
	$sql = "SELECT * FROM login u, login l WHERE u.bd_rut = '$ced' AND u.bd_usercreador = l.id AND u.bd_updateuser = l.id";
			
	$q = mysqli_query($con, $sql);

 	$info = array();

	
    
	while($datos = mysqli_fetch_array($q)){
		
	$fecha = time() - strtotime($datos['bd_nac']);
	$edad = floor($fecha / 31556926);	
        
	$rut= $datos['bd_rut'];	
	$nom = $datos['bd_nom'];
	$apell = $datos['bd_apell']; 
	$sex = $datos['bd_sexo']; 
   	$nac = $datos['bd_nac'];
   	$tel = $datos['bd_telef'];
    $dir = $datos['bd_direc'];
    $pobl = $datos['bd_pobl'];
    $com = $datos['bd_com'];
    $pais = $datos['bd_pais'];
    $pueb = $datos['bd_pueblo'];
    $sect = $datos['bd_sect'];
    $ficha = $datos['bd_ficha'];
    $user = $datos['user'];
    $date = $datos['bd_date'];
    $userupdate = $datos['user'];
    $fechaupdate = $datos['bd_updatedate'];
	
	}

	$info['rut'] = $rut;
	$info['nom']= $nom;
	$info['apell'] = $apell;
	$info['sex'] = $sex;
	$info['nac'] = $nac;
	$info['edad'] = $edad;
	$info['tel'] = $tel;
	$info['dir'] = $dir;
	$info['pobl'] = $pobl;
	$info['com'] = $com;
	$info['pais'] = $pais;
	$info['pueb'] = $pueb;
	$info['sect'] = $sect;
	$info['ficha'] = $ficha;
	$info['user'] = $user;
	$info['date'] = $date;
	$info['userupdate'] = $userupdate;
	$info['fechaupdate'] = $fechaupdate;


	echo json_encode($info);
 ?>

