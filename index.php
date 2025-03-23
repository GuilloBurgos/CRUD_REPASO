<?php
require_once "configuracion/conexion.php";
require_once "procesos/metodosCrud.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="js/swetalert2.js"></script>    
    <title>CRUD</title>
</head>
<body>

    <div class="container-fluid bg-light">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10 col-12 bg-light p-4 rounded-3 shadow-lg mt-5">
            <h1 class="text-center">Datos personales</h1>
               <form action="procesos/insertar.php" method="post" class="needs-validation" novalidate>
                    <div class="form-floating mb-3">
                            <input class="form-control w-100" type="text" name="txtnombre" id="txtnombre" placeholder="">
                            <label for="txtnombre" >Nombre</label>
                            <div class="invalid-feedback"></div>
                            <small id="nombreError" class="text-danger"></small>
                     </div>
                     
                     <div class="form-floating mb-3">
                            <input class="form-control w-100" type="text" name="txtapellido" id="txtapellido" placeholder="">
                            <label for="txtapellido" >Apellido</label>
                            <div class="invalid-feedback"></div>
                            <small id="apellidoError" class="text-danger"></small>
                     </div>
                     <button class="btn btn-primary bg-primary w-100" value="enviar">Agregar</button>	
               </form>
            </div>
        </div>
     
        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover shadow-sm table-bordered rounded-3">
                 <thead class="table-primary text-center">
                     <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                     </tr>
                  </thead>
                     <?php
			$obj = new metodos();
			$sql = "SELECT id,nombre,apellido FROM persona";
			$datos = $obj->mostrarDatos($sql);
			foreach ($datos as $key) {

				?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $key['nombre']; ?>
                        </td>
                        <td>
                            <?php echo $key['apellido']; ?>
                        </td >
                        <td class="text-center">
                            <a class="btn btn-success btn-sm p-1" href="procesos/editar.php?id=<?php echo $key['id'] ?>"><i class="fas fa-edit"></i></a>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-danger btn-sm p-1" onclick="confirmacion(<?php echo $key['id']; ?>)"><i class="fas fa-trash"> </i></button>
                        </td>
                    </tr>
                </tbody>
				<?php
			}
			?>                     
                
            </table>
        </div>
    </div>
    <script>
        function confirmacion(id) {
        Swal.fire({
            title: "Estas seguro?",
            text: "No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `procesos/eliminar.php?id=${id}`;
            }
        });
    }
    </script>
    
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>