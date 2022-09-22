<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Lista de Regiones</title>
</head>

<body>
    <div class="container">
        <h1>
            Lista de Regiones
        </h1>
        <a href="<?= base_url()?>" class="btn btn-primary"> &lt;&lt; Regresar</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Región
        </button>

        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($regionesBd as $region) :
                ?>
                    <tr>
                        <td><?= $region['cod_region'] ?></td>
                        <td><?= $region['nombre'] ?></td>
                        <td><?= $region['descripcion'] ?></td>
                        <td>
                            <a href="<?=base_url('datos_region/'.$region['cod_region'])?>">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <a href="<?=base_url('eliminar_region/'.$region['cod_region'])?>">
                                <i class="fa-solid fa-trash-can"></i>    
                            </a>
                            
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Región</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('agregar_region')?>" method="post">
                            <div class="mb-3">
                                <label for="txt_codigo" class="form-label">Código</label>
                                <input type="text" class="form-control" name="txt_codigo" placeholder="Ingrese un número entero">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre de región">
                            </div>
                            <div class="mb-3">
                                <label for="txt_descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" name="txt_descripcion" placeholder="Descripción">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Guardar Region</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>