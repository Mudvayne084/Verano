<?php
define('BASEURL', 'http://localhost/Revista');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mundial</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="../source/jquery.fancybox.css" type="text/css" media="screen"/>
        <link rel="icon" href="../favicon.ico">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-datetimepicker.css" />
        <link rel="stylesheet" type="text/css" href="../css/fifa.css"/>

    </head>

    <body role="document">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Revista</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../site/inicio.php">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../articulo/articulo.php">Articulo</a></li>
                            <li class="divider"></li>
                            <li><a href="../autor/autor.php">Autor</a></li>
                            <li class="divider"></li>
                            <li><a href="../revista/revista.php">Revista</a></li>
                            <li class="divider"></li>
                            <li><a href="../status/status.php">Status</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
                            <span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                </ul>


            </div><!--/.nav-collapse -->

        </div>

  

        <div class="container theme-showcase" role="main">

