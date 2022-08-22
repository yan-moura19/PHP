<?php

?>

<meta charset="utf-8">
<form name="dadosPessoa" action="conexao.php" method="POST">

	<table border="1">
		<tbody>
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome" value= ""/></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" value= ""/></td>
			</tr>
			<tr>
				<td>Cidade:</td>
				<td><input type="text" name="cidade" value= ""/></td>
			</tr>
			<tr>
				<td>Pedido:</td>
				<td><input type="text" name="pedido" value= ""/></td>
			</tr>

			<tr>
				<td>Senha:</td>
				<td><input type="text" name="senha" value= ""/></td>
			</tr>
			<tr>
				<td><input type="hidden" name="acao" value="pedir" /></td>

				<td><input type="submit" name="Enviar" value= "Enviar"/></td>
			</tr>

		</tbody>
	</table>
</form>