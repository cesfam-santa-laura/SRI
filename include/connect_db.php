<?php
$link =mysql_connect("localhost","root","");

if($link) {
	
	mysql_select_db("registros_stl",$link);

}

function fechaNormal($fecha) {

	$nfecha = date('d/m/Y',strtotime($fecha));
	return $nfecha;

}
?>
