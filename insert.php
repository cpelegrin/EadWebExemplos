<?php 
$titulo = "Inserir Pessoas";

require_once "utils/header.php";

?>
	<div class="corpo">
		<h1>Cadastro de Pessoas</h1>
		<br>
		<br>
		<form action="actionpage.php" method="POST">
			<label>Nome:</label>
			<input type="text" name="nome">
			<label>Idade:</label>
			<input type="number" name="idade">
			<label>Email:</label>
			<input type="email" required="true" name="email">
			<input type="submit" value="Salvar Cadastro">
		</form>
	</div>

<?php require_once "utils/footer.php" ?>