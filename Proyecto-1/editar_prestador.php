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


                        $consulta = "SELECT * FROM perfiles";
                        $resultado = mysql_query($consulta);
                        while ($row = mysql_fetch_array($resultado)) 
                        {
                            echo "<div class='row'><div class='col-sm-6'>
                                <div class='thumbnail panel-primary wellx'>
                                <img src='assets/images/img1.jpg' class='pull-left' width='150px' height='150px'>";
                            echo "<h4><b>  Nombre: </b>". $row['nombre'] . "</h4>";
                            echo "<h4><b>  Sexo: </b>". $row['sexo'] . "</h4>";
                            echo "<h4><b>  Telefono: </b>". $row['telefono'] . "</h4>";
                            echo "<h4><b>  Perfil: </b>". $row['perfil'] . "</h4>";
                            echo "<h4><b>  Disponibilidad </b>". $row['desde'] . " a ".$row['hasta']."</h4>";
                   echo "<form action='edicion_prestador.php?id=$row[id]'> 
                         <input type='hidden' name='id' value='$row[id]' />
                         <button type='submit' class='btn btn-primary col-sm-offset-10 '></span>Editar</<button>
                    </form>";
                    echo "</div>
            </div>
        </div>";
                        }


                        




                    ?>
                    
                

        
    </div>
    <!-- /container -->


    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

</body>

</html>