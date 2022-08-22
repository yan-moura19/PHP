<?php

if(isset($_POST["acao"])) { 
	if($_POST["acao"]=="cadastrar"){
	inserirPessoa();
	}
	if($_POST["acao"]=="pedir"){
	inserirPedido();
	}
	if($_POST["acao"]=="alterarCadastro"){
	alterarUmCadastro();
	}
	if($_POST["acao"]=="alterarPedido"){
	alterarUmPedido();
	}
	if($_POST["acao"]=="excluir"){
	excluirPedido();
	}
	if($_POST["acao"]=="excluirCad"){
	excluirCadastro();
	}
	if($_POST["acao"]=="doar"){
	inserirDoacao();
	}
	if($_POST["acao"]=="excluirDoado"){
	excluirDoacao();
	}
	session_start();

}

 function selectTodosOsCadastros(){
 	$banco = abrirBanco();
 	$sql = "SELECT * FROM cadastro ORDER BY nome";
 	$resultado = $banco->query($sql);
 	$banco->close();
 	while ($row = mysqli_fetch_array($resultado)) {
 		$grupo[] = $row;
 	}
 	return $grupo;
 }
  function selectUmCadastro($id){
 	$banco = abrirBanco();
 	$sql = "SELECT * FROM cadastro WHERE id = " .$id;
 	$resultado = $banco->query($sql);
 	$banco->close();
 	while ($row = mysqli_fetch_assoc($resultado)) {
 		$pessoa = $row;
 	}
 	return $pessoa;
 }
 function alterarUmCadastro(){

	$banco = abrirBanco();
	$sql = "UPDATE cadastro SET nome='{$_POST["nome"]}',email='{$_POST["email"]}',senha='{$_POST["senha"]}' WHERE id='{$_POST["id"]}'";

	$banco->query($sql);
	$banco->close();
	header("Location:select.php");
}
 function selectTodosOsPedidos(){
 	$banco = abrirBanco();
 	$sql = "SELECT * FROM pedidos ";
 	$resultado = $banco->query($sql);
 	$banco->close();
 	while ($row = mysqli_fetch_array($resultado)) {
 		$grupo1[] = $row;
 	}
 	return $grupo1;
 }
 function selectAsDoacoes(){
 	$banco = abrirBanco();
 	$sql = "SELECT * FROM doado ";
 	$resultado = $banco->query($sql);
 	$banco->close();
 	while ($row = mysqli_fetch_array($resultado)) {
 		$grupo3[] = $row;
 	}
 	return $grupo3;
 }



 

 function selectUmPedido($id){
 	$banco = abrirBanco();
 	$sql = "SELECT * FROM pedidos WHERE id = " .$id;
 	$resultado = $banco->query($sql);
 	$banco->close();
 	while ($row = mysqli_fetch_assoc($resultado)) {
 		$pessoa = $row;
 	}
 	return $pessoa;
 }
 function alterarUmPedido(){

	$banco = abrirBanco();
	$sql = "UPDATE pedidos SET nome='{$_POST["nome"]}',email='{$_POST["email"]}',cidade='{$_POST["cidade"]}', pedido='{$_POST["pedido"]}', senha='{$_POST["senha"]}', atendido='{$_POST["atendido"]}' WHERE id='{$_POST["id"]}'";

	$banco->query($sql);
	$banco->close();
	header("Location:select.php");
}



function inserirPessoa(){

	$banco = new mysqli("localhost", "root", "12345", "vagalume");
	$sql = "INSERT INTO cadastro(nome, email, senha) VALUES ('{$_POST["nome"]}', '{$_POST["email"]}', '{$_POST["senha"]}')";

	$banco->query($sql);
	$banco->close();
	voltar();
}

function inserirPedido(){

	$banco = new mysqli("localhost", "root", "12345", "vagalume");
	$sql = "INSERT INTO pedidos(nome, email, cidade, pedido, senha, atendido) VALUES ('{$_POST["nome"]}', '{$_POST["email"]}','{$_POST["cidade"]}', '{$_POST["pedido"]}', '{$_POST["senha"]}', '{$_POST["atendido"]}')";

	$banco->query($sql);
	$banco->close();
	voltar();

}
function inserirDoacao(){
	$banco = new mysqli("localhost", "root", "12345", "vagalume");
	$sql = "INSERT INTO doado (nome, email, cidade, senha, colaborado, numeroPedido) VALUES ('{$_POST["nome"]}', '{$_POST["email"]}','{$_POST["cidade"]}', '{$_POST["senha"]}', '{$_POST["colaborado"]}', '{$_POST["numeroPedido"]}')";

	$banco->query($sql);
	$banco->close();
	header("Location:doacoes.php");


}





function abrirBanco(){
	$conexao = new mysqli("localhost", "root", "12345", "vagalume");
	return $conexao;
}
function voltar(){
	header("Location:index.php");
}

function excluirPedido(){
	$banco = abrirBanco();
	$sql = "DELETE FROM pedidos WHERE id='{$_POST["id"]}'";

	$banco->query($sql);
	$banco->close();
	header("Location:select.php");

}
function excluirCadastro(){
	$banco = abrirBanco();
	$sql = "DELETE FROM cadastro WHERE id='{$_POST["id"]}'";

	$banco->query($sql);
	$banco->close();
	header("Location:select.php");

}
function  excluirDoacao(){
	$banco = abrirBanco();
	$sql = "DELETE FROM doado WHERE id='{$_POST["id"]}'";

	$banco->query($sql);
	$banco->close();
	header("Location:select.php");

}






?>