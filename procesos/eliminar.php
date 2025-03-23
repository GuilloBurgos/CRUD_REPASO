<?php
  $id = $_GET['id'];

  require_once "../configuracion/conexion.php";
  require_once "metodosCrud.php";

  $obj = new metodos();

  if ($obj->eliminarDatosNombre($id)==1) {
  	header("location:../index.php");
  }else{
  	echo "fallo al eliminar";
  }
?>