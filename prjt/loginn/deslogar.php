<?php 

session_destroy();
unset($_SESSION['iduser'],
$_SESSION['nameuser'],$_SESSION['emailuser']);
header("Location: login.php");

?>