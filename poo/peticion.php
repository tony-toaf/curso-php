<?php 
require "conexion.php"

class DevuelvePaises extends Conexion{

	public function DevuelvePaises(){

		parent::__construct(); //para llamar el constructor de la clase Conexion


	}

	public function get_paises(){

		$resultado = $this->conexion_db->query("SELECT * FROM PAISES");

		$paises = $resultado->fetch_all(MYSQLI_ASSOC);

		return $paises;


	}


}


 ?>