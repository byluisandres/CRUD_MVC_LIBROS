<?php
//datos
$id = $data['id'];
$titulo = $data['titulo'];
$autor = $data['autor'];
$editorial = $data['editorial'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar libros</title>
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css' rel='stylesheet'>
</head>

<body>

    <div class="container">
        <section class="mt-5">
            <a class="my-3 btn btn-blue-grey" href='<?php echo RUTA_APP . "libros" ?>'>
                <i class="fas fa-arrow-left"></i>
            </a>

            <!-- Default form login -->
            <form class="text-center border border-light p-5" method="POST" action="<?php RUTA_APP . 'libros/modificar/' ?>">
                <p class="h4 mb-4">Modificar Libro</p>
                <!-- id -->
                <input type="hidden" name="id" value="<?php print $id ?>">
                <!-- titulo -->
                <input type="text" name="titulo" id="titulo" class="form-control mb-4" value="<?php print $titulo; ?> " placeholder="título">
                <!-- autor -->
                <input type="text" name="autor" id="autor" class="form-control mb-4" value="<?php print $autor; ?>" placeholder="Autor">
                <!-- titulo -->
                <input type="text" name="editorial" id="editorial" class="form-control mb-4" value="<?php print $editorial; ?>" placeholder=" Editorial">
                <!-- Sign in button -->
                <button class="btn btn-success btn-block my-4" type="submit">Modificar</button>

            </form>
        </section>
        <!-- Default form login -->
    </div>

</body>

</html>