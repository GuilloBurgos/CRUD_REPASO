<?php
require_once "../configuracion/conexion.php";
require_once "metodosCrud.php";

#Recibe del formulario el nombre y apellido
$nombre = $_POST['txtnombre'];
$apellido = $_POST['txtapellido'];

$datos = [$nombre, $apellido];

$obj = new metodos();

if (
  isset($nombre) && !empty($nombre) && isset($apellido) &&
  !empty($apellido) && !is_numeric($nombre) && !is_numeric($apellido)
) {
  $obj->insertarDatos($datos);
  header("location:../index.php");
} else {

  echo "Fallo al insertar";
}

?>