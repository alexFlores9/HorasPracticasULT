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
    <title>Agregar asociados</title>
    <link rel="stylesheet" type="text/css" href="estilotb_asociados.css">
</head>
<body>
<div class="form">
<form action="tb_asociados.php" method="POST">

<p>N paja:</p>
<label for="Npaja">Digite el numero de paja</label>
<br>
<input type="text" name="Npaja" placeholder="Numero de paja" required>

<br><p>Nombre:</p>
<label for="Nombre">Nombre del asociado</label>
<br>
<input type="text" name="Nombre" placeholder="Nombre" required>
<br>

<br>
<input type="submit" value="Guardar">
</form>
</div>

    
</body>
</html>