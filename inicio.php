<?php 
// confirmar sesion 
session_start(); 
if (!isset($_SESSION['loggedin'])) { 
header('Location: index.html'); 
exit; 
} 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Inicio</title> 
<link rel="stylesheet" href="style2.css"> 


</head> 
<body class="loggedin"> 
<nav class="navtop"> 
<h1 style="color:white;">SISTEMA DE LOGIN BÁSICO CONFIGUROWEB</h1> 
<a href="perfil.php" style="color:white;"><i class="fas fa-user-circle"></i>INFORMACIÓN DE USUARIO</a> 
<a href="cerrar-sesion.php" style="color:white;"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a> 
</nav> 
<div class="content"> 
<h2>Página de Inicio</h2> 
<p>Hola de nuevo, <?= $_SESSION['name'] ?> !!!</p> 
</div> 
</body> 
</html> 