<?php
include('../config.php');
	$data = array();
	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);

			Principal::iserir($nome,$email,$senha);
			
		
		$data['sucesso'] = true;
		
	}else{
		$data['erro'] = true;
	}

	die(json_encode($data));

?>


