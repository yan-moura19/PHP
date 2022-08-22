<?php  session_start();
require 'secury.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN &copy;</title>
</head>
<body>

<p class="text-success">Seja Bem Vindo <?php echo $_SESSION['nameuser']; ?><a href="deslogar.php">Sair</a> </p>

</body>
</html>