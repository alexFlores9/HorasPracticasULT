<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['Usuario'];
if ($varsesion == null || $varsesion ='' ) {
   echo 'no tiene autorizacion, si eres de la directiva y no tienes tu cuenta, contactacte con el presidente de la asociacion!';
   die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="menu.css">
    <title>Bienvenido!</title>

  
</head>
<body>
  
<div id="header">
			<ul class="nav">
				<li><a href="">Inicio</a></li>
				<li><a href="">Servicios</a>
					<ul>
						<li><a href="../tb_directiva/GuardarDirectiva.php">Lista Directiva</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a>
							<ul>
								<li><a href="">Submenu1</a></li>
								<li><a href="">Submenu2</a></li>
								<li><a href="">Submenu3</a></li>
								<li><a href="">Submenu4</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="">Acerca de</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a></li>
					</ul>
				</li>
				<li><a href="">Contacto</a></li>
			</ul>
		</div>


    <h1>Welcome</h1>


 <a href="cerrar.php">cerrar session</a>
    
</body>
</html>