<?php

class Principal{

	public static function getAll(){
		$sql = MySql::conectar()->prepare("SELECT * FROM usuarios");
		$sql->execute();
			if($sql->rowCount() > 0){
				$sql = $sql->fetchAll();
				return $sql;
			}	
		
	}

	public static function iserir($nome,$email,$senha){
		$sql = MySql::conectar()->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");
		$sql->bindValue(":nome",$nome);
		$sql->bindValue(":email",$email);
		$sql->bindValue(":senha",$senha);
		$sql->execute();
	}
}