<?php session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: ../Controlador/login.php');
}
?>
<?php

  require('../Controlador/conexion.php');

  $consulta="SELECT * FROM pacientes";

  $ejecutar=$mysqli->query($consulta);

  ?>

  <!DOCTYPE html>
  <html>
  <head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	<title>Ver Pacientes</title>
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
      <li><a href="menu.php">Principal</a></li>
      <li><a href="verpacientes.php">Pacientes</a></li>
      <li><a href="vermedico.php">Medicos</a></li> 
    </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="../Controlador/cerrar.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesion</a></li>
    </ul>
  </div>
</nav>
</div>
</div>

           <center>
           <br>
           <div class="col-md-12">
           <br>
           <a href="addpacientes.php"><span class="glyphicon glyphicon-user"></span>Agregar Paciente</a>
             <div class="container">
             <br>
    <table class="table table-striped table-hover" width="80">
    	
    	<thead style="background-color: #29B1FF; font-weight: bolder;">
    		<tr>
    		    <td>identificacion</td>
    		    <td>nombre</td>
    		    <td>apellidos</td>
    		    <td>fecha de nacimiento</td>
    		    <td>sexo</td>
    		    <td>modificar</td>
    		    <td>eliminar</td>
    		</tr>
    	</thead>

    	<tbody>
    		<?php while ($data=$ejecutar->fetch_assoc()) { ?> 
    			<tr>
    			   <td><?php echo $data['PacIdentificacion']; ?></td>
    			   <td><?php echo $data['PacNombres']; ?></td>
    			   <td><?php echo $data['PacApellidos']; ?></td>
    			   <td><?php echo $data['PacFechaNacimiento']; ?></td>
    			   <td><?php echo $data['PacSexo']; ?></td>
    			   <td><a href="modpaciente.php?id=<?php echo $data['PacIdentificacion'];?>">Modificar Paciente<a></td>
    			   <td><a href="../Controlador/delpaciente.php?id=<?php echo $data['PacIdentificacion'];?>">Eliminar paciente</a></td>
                 </tr>
                 <?php } ?>

                </tbody>
                
                </table>
                </center>

    	</tbody>


    </table>
           </div>
           </div>
           </center>


  <div class="navbar navbar-fixed-bottom" style="background-color: #29B1FF; padding-top: 8px; height: 35px;">
  <center><p style="color: #fff;">&copy; 2016 GAES 2</p></center>
</div>
  </body>
  </html>

