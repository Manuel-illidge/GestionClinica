<?php session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: ../Controlador/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Menu Clinica</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Creative CSS3 Animation Menus" />
        <meta name="keywords" content="menu, navigation, animation, transition, transform, rotate, css3, web design, component, icon, slide" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style6.css" />
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
    </head>
    <body>
        <header id="cabecera" class="col-md-12" style="background-color: #29B1FF">
        <div class="container"> 
        <img class="img-responsive" src="../img/logo.png" width="80" height="80" style="left: 310px; top: 2px; position: absolute; padding-top:15px; padding-bottom: 15px; padding-left: 15px; padding-right: 15px;">
            <h1>Clinica <span>ADSI</span></h1>
        </div>
    </header>
    </div>
    </div>
        <div class="container" style="width: 400px;">

                <ul class="ca-menu container">
                    <li>
                        <a href="vermedico.php">
                            <span class="ca-icon">+</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Medicos</h2>
                                <h3 class="ca-sub">Gestionar Medicos</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="verpacientes.php">
                            <span class="ca-icon">U</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Pacientes</h2>
                                <h3 class="ca-sub">Gestionar Pacientes</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- content -->
        </div>
        <div class="navbar navbar-fixed-bottom" style="background-color: #29B1FF; padding-top: 8px; height: 35px;">
    <center><p style="color: #fff;">&copy; 2016 GAES 2</p></center>
</div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    </body>
</html>