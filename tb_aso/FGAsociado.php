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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar asociados</title>
    
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">

    <script src="../js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container"><br><br>
        <h2><b><center>Registro de Asociados.</center></b></h2><br>
        <form class="form" action="PGuardar.php" method="post">

                <label>Nombre Asociado</label><br>
                <input class="form-control" type="text" name="NombreAsociado" placeholder="Ingrese su nombre Completo"><br>

                <input type="submit" class="btn btn-primary" value="Agregar" name="AgregarA">
                <a href="LAsociados.php" class="btn btn-success">Regresar a Lista</a>
        </form>
    </div>
</body>
</html>