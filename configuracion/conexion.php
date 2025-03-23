<?php
 class conectar{
    private $servidor = "localhost"; //Nombre del servidor
	private $usuario = "root"; //nombre de usuario
	private $password = ""; //password
	private $nombredb = "crud_poo"; //nombre de la base de datos

    public function conexion() 
	{
		$con = mysqli_connect(
			$this->servidor,
			$this->usuario,
			$this->password,
			$this->nombredb
		);
		return $con; 
	}
 }

//  $obj = new conectar();

// if ($obj->conexion()) {
// 	echo "conexion Exitosa";
// } else {
// 	echo "Error en la conexion";
// }
?>