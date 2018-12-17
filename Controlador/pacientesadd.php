<?php session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}
?>
<?php

   require('conexion.php');

   $ccpacienteadd=$_POST['identificacion'];
   $nombresadd=$_POST['nombres'];
   $apellidosadd=$_POST['apellidos'];
   $fechanacimientoadd=$_POST['fechanacimiento'];
   $sexoadd=$_POST['sexo'];

   $consulta="INSERT INTO pacientes(PacIdentificacion,PacNombres,PacApellidos,PacFechaNacimiento,PacSexo) VALUES('$ccpacienteadd','$nombresadd','$apellidosadd','$fechanacimientoadd','$sexoadd')";

   $ejecutar=$mysqli->query($consulta);


   ?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <meta charset="UTF-8">
   <title>Agregar Paciente</title>
</head>
<body>
   <header id="cabecera" class="col-md-12" style="background-color: #29B1FF">
      <div class="container"> 
      <img class="img-responsive" src="../img/logo.png" width="80" height="80" style="left: 310px; top: 2px; position: absolute; padding-top:15px; padding-bottom: 15px; padding-left: 15px; padding-right: 15px;">
         <h1>Clinica <span>ADSI</span></h1>
         <br>
         <br>
      </div>
   </header>
   <div class="col-md-12" style="height: 50px;">
   <div>
   <nav class="navbar-default">
  <div class="container">
    <ul class="nav navbar-nav">
      <li><a href="../Vista/menu.php">Principal</a></li>
      <li><a href="../Vista/verpacientes.php">Pacientes</a></li>
      <li><a href="../Vista/vermedico.php">Medicos</a></li> 
    </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="cerrar.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesion</a></li>
    </ul>
  </div>
</nav>
</div>
</div>
   <center>
   <h1 style="color: green;">Paciente Agregado</h1>
   <h3><a href="../Vista/verpacientes.php">Regresar</a></h3>
   <div class="navbar navbar-fixed-bottom" style="background-color: #29B1FF; padding-top: 8px; height: 35px;">
   <center><p style="color: #fff;">&copy; 2016 GAES 2</p></center>
</div>
   </center>
</body>
</html>
