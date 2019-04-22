<?php 
session_start();
if($_SESSION['user']){	
	session_destroy();
	header("Location: index.php?alert=3");
}

else{
	header("Location: index.php?alert=3");
}
?>