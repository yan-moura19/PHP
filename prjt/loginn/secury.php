<?php 
ob_start();
if (($_SESSION['iduser'] =="") || ($_SESSION['nameuser'] =="")) {
	$_SESSION['secury'] = "Erro faça o login novamente";
	header("Location: prjt/loginn/login.php");
}

 ?>
