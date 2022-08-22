<?php
session_start();
require 'conexao1.php';
$email = $_POST['emailc'];
$senha = $_POST['senhac'];

$descrypt= ($senha);

$very = "SELECT * FROM cadastro WHERE email='$email' AND senha ='$descrypt' LIMIT 1";
$exec= $conexao1->query($very);

$result = $exec->fetch_assoc();

if (empty($result)) {
	$_SESSION['errorlogin'] = "Erro Usuario ou Senha invalidos";
	header("Location: login.php");
}else{
	$_SESSION['iduser'] = $result['id'];
	$_SESSION['nameuser'] = $result['nome'];
	$_SESSION['emailuser'] = $_POST['emailc'];
	if($_SESSION['emailuser'] == "admin@admin.com"){
	header("Location: ../select.php");
}else{
	header("Location: ../pedidos.php");

}
}
?>

