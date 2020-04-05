<?php
	include('config.php');
	MySql::conectar();
	$dados = Principal::getAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Envio ajax Json</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<meta name="viewport" content="width=device-width, initil-scale= 1.0">
</head>
<body>
	<!DOCTYPE html>
	<html>
	<head>
		<a href="adicionar.php"><button>Adicionar</button></a>
		<table width="600" border="1">
			<tr>
				<th>Nome</th>
				<th>E-mail</th>
				
			</tr>
			
				<?php
				foreach ($dados as $key => $value) {
					?>
					<tr>
						<td><?php echo $value['nome']?></td>
						<td><?php echo $value['email']?></td>
					</tr>
					<?php
				}
				?>
				
				
		
			
		</table>
	</head>
	<body>
	
	</body>
	</html>

</body>
</html>