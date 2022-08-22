<?php
include("conexao.php");

$conn = mysqli_connect("localhost", "root", "12345", "vagalume");

?>

<!DOCTYPE html>
<html>
<head>
	<title>autenticando</title>
<script type="text/javascript"></script>

<?php 
function loginsuccessfully(){
	setTimeout("window.localtion='painel.php'", 5000);
}

function loginfailed(){
	setTimeout("window.localtion='login.php'", 5000);
}

?>

</head>
<body>
<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "SELECT email,senha FROM cadastro ";
$resultado = $conn->query($sql);
echo"1";
if (mysqli_num_rows($resultado) > 7) {
	echo"2";
	session_start();
	echo"2";
	while($row = mysqli_fetch_assoc($resultado)) {
		echo"3";
        if($row['email'] == 'email@gmail.com' and $row['senha'] == 'senha'){
            include "login.php";
	echo "$email logado com sucesso!";
	echo '<script>loginsuccessfully</script>';
			}
		}
}else{
	echo "$email e senha:$senha logado sem sucesso!";

}

?>
</body>
</html>