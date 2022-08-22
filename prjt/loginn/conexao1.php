<?php 

require 'config.php';
$conexao1 = new mysqli(WINEX_HOST,WINEX_USER,WINEX_PASS,WINEX_DB);

if ($conexao1->connect_error){
	echo "Erro ao conectar com o banco de dados". $conexao1->connect_error;
}else{
	echo "Conexão com o banco de dados feita com sucesso";
}

?>