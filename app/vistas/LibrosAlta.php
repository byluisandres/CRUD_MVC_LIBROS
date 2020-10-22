<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de libros</title>
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css' rel='stylesheet'>
    <style>



    </style>
</head>

<body>

    <div class="container">
        <section class="mt-5">
            <a class="my-3 btn btn-blue-grey" href='<?php echo RUTA_APP . "libros" ?>'>
                <i class="fas fa-arrow-left"></i>
            </a>

            <!-- Default form login -->
            <form class="text-center border border-light p-5" method="POST" action="<?php RUTA_APP . 'libros/alta/' ?>">
                <p class="h4 mb-4">Registrar Libro</p>
                <!-- titulo -->
                <input type="text" name="titulo" id="titulo" class="form-control mb-4" placeholder="título">
                <!-- autor -->
                <input type="text" name="autor" id="autor" class="form-control mb-4" placeholder="Autor">
                <!-- titulo -->
                <input type="text" name="editorial" id="editorial" class="form-control mb-4" placeholder="Editorial">
                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Guardar</button>

            </form>
        </section>
        <!-- Default form login -->
    </div>

</body>

</html>