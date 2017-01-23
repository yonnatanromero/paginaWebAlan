<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Primale</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="assets/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <div class="container">

        <?php require 'resources/views/nav.php'; ?>

        <?php 

            require 'resources/conf.php';

            $id = $_GET['id'];
            $identificacion = $_GET['identificacion'];
            $nombre = $_GET['nombre'];

        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <form action="controller/reservar-prestador.php" method="POST" class="col-sm-8 panel panel-primary panel-body">

                    <input type="hidden" name="id" value="<?=$id?>" class="form-control">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Numero de Identificación:</label>
                        <input disabled type="text" value="<?=$identificacion?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Prestador:</label>
                        <input disabled type="text" value="<?=$nombre?>" class="form-control">
                    </div>
                    <h3>Datos del Cliente</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Identificacion:</label>
                        <input type="number" name="identificacion-cliente" placeholder="Identificacion"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombres:</label>
                        <input type="text" name="nombre-cliente" placeholder="Nombres"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono:</label>
                        <input type="text" name="telefono-cliente" placeholder="Telefono"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo:</label>
                        <input type="text" name="correo-cliente" placeholder="Correo"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Otros:</label><br>
                        <textarea class="span4 form-control" name="otros" cols="48" rows="5"  placeholder="Otros" ></textarea>
                    </div>

                    <button class="btn btn-success pull-right" type="submit">Aceptar</button><br><br>

                </form>
            </div>
        </div>

        
    </div>
    <!-- /container -->


    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

</body>

</html>