<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros MVC</title>
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    $datos = $data;
    ?>
    <div class="container">
        <section class="mt-5">
            <a class="btn btn-dark-green" href='<?php echo RUTA_APP . "libros/alta/" ?>'>
                <i class="fas fa-plus"></i> Añadir Libro
            </a>
            <h1 class="text-center">Lista de Libros</h1>
            <table class="table table-bordered center">
                <thead class="text-center">
                    <tr>
                        <th hidden>id</th>
                        <th scope="col">Título</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($datos); $i++) : ?>
                        <tr>
                            <td hidden> <?php echo $datos[$i]["id"]; ?></td>
                            <td> <?php echo $datos[$i]["titulo"]; ?></td>
                            <td> <?php echo $datos[$i]["autor"]; ?></td>
                            <td> <?php echo $datos[$i]["editorial"]; ?></td>
                            <td>
                                <a href="<?php echo RUTA_APP . "libros/modificar/" . $datos[$i]["id"]; ?>" class="btn btn btn-success">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?php echo RUTA_APP . "libros/borrar/" . $datos[$i]["id"]; ?>" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>

        </section>
    </div>
</body>


</html>