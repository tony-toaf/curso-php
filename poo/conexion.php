<?php 

require "config.php";
	class Conexion{

		protected $conexion_db;

		public function Conexion(){

			$this->conexion_db = new mysqli(db_host, db_usuario, db_pass, db_nombre);


			if ($this->conexion_db->connect_errno{
				echo "fallo al conectar: " . $this->conexion_db->connect_error;
				return;
			}


			$this->conexion_db->set_charset(db_charset);

		}


	}




 ?>