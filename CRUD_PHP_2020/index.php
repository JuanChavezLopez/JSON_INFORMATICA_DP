<?php  

include_once 'bd/Conexion.php';

$objeto = new Conexion();
$conexion = $objeto->conectar();

$consulta = "SELECT id, nombre, pais, edad FROM personas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$data= $resultado->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">

    <link rel="stylesheet"  type="text/css" href="datatables/datatables.min.css">
    <link rel="stylesheet"  type="text/css" href="datatables/dataTables.bootstrap4.min.css">

    <title>CRUD PHP 2020</title>
</head>
<body>

    <header>
        <h3 class="text-center text-ligth">Tutorial</h3>
        <h4 class="text-center text-ligth">CRUD con <span class="badge badge-danger">DATATABLES</span></h4>
    </header>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <button id="btnNuevo" type="button" class="btn btn-success">Nuevo</button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width: 100%">
                            <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Pais</th>
                                    <th>Edad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php  
                                    foreach($data as $dat){
                                    ?>
                                    <tr>
                                        <td><?php  echo $dat['id'] ?></td>
                                        <td><?php  echo $dat['nombre'] ?></td>
                                        <td><?php  echo $dat['apellido'] ?></td>
                                        <td><?php  echo $dat['edad'] ?></td>
                                    </tr>
                                    <?php  
                                    }
                                    ?>

                                <!-- <div class="btn-group">
                                    <button class="btn btn-primary btnEditar">Editar</button>
                                    <button class="btn btn-danger btnBorrar">Borrar</button>
                                </div> -->

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form id="formPeronas">  
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" name="" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="pais" class="col-form-label">Pais</label>
                        <input type="text" class="form-control" name="" id="pais">
                    </div>
                    <div class="form-group">
                        <label for="edad" class="col-form-label">Edad</label>
                        <input type="number" class="form-control" name="" id="edad">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-ligth" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                </div>
            </form> 
      </div>
    </div>
  </div>

    


    <!-- jquery, popper.js, bootstrap -->

    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script text="text/javascript" src="datatables/datatables.min.js"></script>
    <script text="text/javascript" src="main.js"></script>
    
</body>
</html>