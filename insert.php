<?php 
$titulo = "Inserir Pessoas";

require_once "utils/header.php";

?>
<script type="text/javascript" src="js/validation.js"></script>

	<div class="corpo">
		<h1>Cadastro de Pessoas</h1>
		<br>
		<br>
		<form action="actionpage.php" method="POST">
			<label>Nome:</label>
			<input type="text" name="nome" onblur="validation_name(this)">
			<label>Idade:</label>
			<input type="number" name="idade">
			<label>Email:</label>
			<input type="email" required="true" name="email">
			<input type="submit" value="Salvar Cadastro">
		</form>

		<p id="msg_erro"></p>
	</div>

<?php require_once "utils/footer.php" ?>