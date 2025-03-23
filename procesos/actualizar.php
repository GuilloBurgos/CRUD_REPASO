<?php
  require_once "../configuracion/conexion.php";
  require_once "metodosCrud.php";
  $nombre = $_POST['txtnombre'];
  $apellido =$_POST['txtapellido'];
  $id = $_POST['id'];

  $datos = [$nombre,$apellido,$id];

  $obj = new metodos();
  if ($obj->actualizarDatosNombre($datos)==1) {
    header("location:../index.php");
  }else{
    echo "fallo al actualizar";
  }
?>