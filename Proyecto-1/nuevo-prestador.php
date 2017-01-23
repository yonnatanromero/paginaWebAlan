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

    <!-- Registro para un nuevo prestador -->

        <div class="row">
            <div class="col-sm-6 col-sm-offset-4">
                <h3>Nuevo Prestador</h3>
                <form action="controller/nuevo-perfil.php" method="POST" class="col-sm-8 panel panel-primary panel-body" >

                    <div class="form-group">
                        <label for="exampleInputEmail1">Numero de Identificación:</label>
                        <input type="number" id="identificacion" name="identificacion" class="form-control" placeholder="Numero de Identificacion" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombres:</label>
                        <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres" required autocomplete="off">
                        
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Sexo:</label>
                        <input type="text" id="sexo" name="sexo" class="form-control" placeholder="Sexo" required autocomplete="off">
                        
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Numero de Telefono:</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Numero de Telefono" required autocomplete="off">
                        
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo:</label>
                        <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo" required autocomplete="off">
                        
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Dirección</label><br>
                        <textarea class="span4 form-control" name="direccion" cols="48" rows="5"  placeholder="Direccion" ></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Perfil</label><br>
                        <textarea class="span4 form-control" name="perfil" cols="48" rows="5"  placeholder="Perfil" ></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Disponibilidad:</label><br>
                        <div class="col-sm-6"> 
                            <p>Desde:</p>      
                            <input type="time" id="desde" name="desde" class="form-control " required autocomplete="off">
                        </div>
                        <div class="col-sm-6">
                            <p>Hasta:</p>
                        <input type="time" id="hasta" name="hasta" class="form-control " required autocomplete="off"><br>
                        </div> 
                        
                    </div>
    
                    <button class="btn btn-success pull-right" type="submit">Registrar</button>
                    
                </form>
            </div>
        </div>
        
    </div>
    <!-- /container -->

    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/vendor/jquery.js"></script>

</body>

</html>