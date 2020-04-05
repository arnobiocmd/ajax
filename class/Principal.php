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
}