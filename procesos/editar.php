<?php
require_once "../configuracion/conexion.php";
$obj = new conectar();
$conexion = $obj->conexion();
$id = $_GET['id'];
$sql = "SELECT nombre,apellido from persona where id = '$id'";
$result = mysqli_query($conexion, $sql);
$ver = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Editar</title>
</head>

<body>

	<div class="container bg-light">
		<h1 class="text-center">Editar</h1>
		<form action="actualizar.php" method="post">
			<div class="row">
				<div class="col-4">
					<input type="text" hidden="" value="<?php echo $id ?>" name="id">
				</div>
			</div>

			<div class="row justify-content-center  mt-3">
				<div class="col-4">
					<input class="form-control" type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
				</div>
			</div>

			<div class="row justify-content-center mt-3">
				<div class="col-4">
					<input class="form-control" type="text" name="txtapellido" value="<?php echo $ver[1] ?>">
				</div>
			</div>


			<div class="row justify-content-center">
				<div class="col-4  text-center">
					<button class="btn btn-primary  mt-3" value="enviar">Agregar</button>
					<button href="../index.php" class="btn btn-dark  mt-3" value="enviar">Regresar</button>
				</div>
			</div>


		</form>
	</div>



</body>

</html>