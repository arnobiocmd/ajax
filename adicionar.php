<?php
	include('config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina de add</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<meta name="viewport" content="width=device-width, initil-scale= 1.0">
</head>
<body>
	<?php
	/*
		if(isset($_POST['acao']) && !empty($_POST['acao'])){
			if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])){
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$senha = addslashes($_POST['senha']);

				Principal::iserir($nome,$email,$senha);

			}else{
				echo '<script>alert("campos vazios não são permitidos")</script>';
			}
		}
	*/


	?>
	<div class="box-gif">
		<img src="assets/img/ajax.gif">
	</div>
	<div class="box-gif-mensagem">
		O cadastro foi realizado com sucesso!
	</div>

	<div class="form-box">
	<div class="center">
		<h2>Adicionar usuario.</h2>
		<form method="POST" id="post">
			<div class="form-box-insed">
				<label>Nome</label>
				<input type="text" name="nome">
			</div>
			<div class="form-box-insed">
				<label>E-mail</label>
				<input type="email" name="email">
			</div>
			<div class="form-box-insed">
				<label>Senha</label>
				<input type="password" name="senha">
			</div>
			<div class="form-box-insed">
				<input type="submit" name="acao" value="Enviar">
			</div>
			

		</form>
		</div>
		</div>


	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>

