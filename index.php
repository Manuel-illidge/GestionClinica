<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: Vista/menu.php');
} else {
	header('Location: Controlador/login.php');
}

 ?>