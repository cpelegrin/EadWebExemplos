<?php 
$titulo = "Inserir Pessoas";
$tituloPagina = "Cadastro de Pessoas";

require_once "utils/header.php";

?>
<script type="text/javascript" src="js/validation.js"></script>

	<div class="corpo">
		<form action="actionpage.php" method="POST">

			<div class="input-group flex-nowrap">
				<div class="input-group-prepend">
					<span class="input-group-text" id="addon-wrapping">Nome</span>
				</div>
				<input name="nome" type="text" class="form-control" placeholder="Nome completo" aria-label="Nome" aria-describedby="addon-wrapping" onblur="validation_name(this)">
			</div>
			<br>
			<div class="input-group flex-nowrap">
				<div class="input-group-prepend">
					<span class="input-group-text" id="addon-wrapping">Idade</span>
				</div>
				<input name="Idade" type="number" class="form-control" placeholder="Digite sua idade" aria-label="Idade" aria-describedby="addon-wrapping">
			</div>
			<br>
			<div class="input-group flex-nowrap">
				<div class="input-group-prepend">
					<span class="input-group-text" id="addon-wrapping">Email</span>
				</div>
				<input required="true" name="Email" type="email" class="form-control" placeholder="Digite seu email" aria-label="Email" aria-describedby="addon-wrapping" onblur="validation_name(this)">
			</div>
			<br>
			<button type="submit" class="btn btn-success">Salvar Cadastro</button>
		</form>
		
		<div id="msg_erro" class="alert alert-danger" role="alert"></div>
	</div>

<?php require_once "utils/footer.php" ?>