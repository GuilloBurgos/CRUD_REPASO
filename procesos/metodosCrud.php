<?php
class metodos{
    public function mostrarDatos($sql)
    {
         $c = new conectar();  
         $conexion = $c->conexion();
         $result = mysqli_query($conexion, $sql);
         return mysqli_fetch_all($result, MYSQLI_ASSOC);
         
    }

     public function insertarDatos($datos)
     {
          $c = new conectar();
          $conexion = $c->conexion();

          $sql = "INSERT INTO persona(nombre,apellido) VALUES('$datos[0]','$datos[1]')";
          return $result = mysqli_query($conexion, $sql);
     }

     public function actualizarDatosNombre($datos)
     {
          $c = new conectar();
          $conexion = $c->conexion();

          $sql = "UPDATE persona set nombre='$datos[0]',
                                 apellido ='$datos[1]'
                                 where id = '$datos[2]'";
          return $result = mysqli_query($conexion, $sql);
     }

     public function eliminarDatosNombre($id)
     {
          $c = new conectar();
          $conexion = $c->conexion();
          $sql = "DELETE FROM persona where id = '$id'";
          return $result = mysqli_query($conexion, $sql);
     }   

}




?>