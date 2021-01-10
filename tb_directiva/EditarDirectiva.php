<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario.</title>
     <!-- Estilos de Bootstrap!-->
     <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <script src="js/bootstrap.min.js"></script>
</style>
</head>
<body>
    <div class="container"><br><br>
    
    <p><h2><center>Editar Usuario.</center></h2></p>
    <?php 

    $host = "localhost";
    $user = "root";
    $contraseña = "";
    $name_db = "bd_tobalon";

    $conexion = mysqli_connect($host, $user, $contraseña, $name_db);

    $id_d = $_GET['id'];
    $sql = "SELECT * FROM tb_directiva WHERE id_Directiva ='$id_d'";
    $resultado = mysqli_query($conexion, $sql);

    while ($fila = mysqli_fetch_array($resultado)) {
         
    ?>
        <form method="post" action="ProcesarEditar.php">
        <input type="hidden" name="id" value="<?php echo $fila['id_Directiva']?>">
            <label>Nombres</label>
            <input type="text" class = "form-control" name="txtNombre" placeholder="Ingrese sus nombres" required value = "<?php echo $fila['Nombre_d']?>" ><br>
            <label>Apellidos</label>
            <input type="text" class = "form-control" name="txtApellido" placeholder="Ingrese sus apellidos" required value = "<?php echo $fila['Apellido_d']?>" ><br>
            <label>Usuario</label>
            <input type="text" class = "form-control" name="txtUsuario" placeholder="Ingrese su usuario" required value = "<?php echo $fila['Usuario_d']?>" ><br>
            <label>Clave</label>
            <input type="password" class = "form-control" name="txtClave" placeholder="Ingrese su clave" required  value = "<?php echo $fila['Clave_d']?>"><br>
            <label>Cargo</label>
            <input type="text" class = "form-control" name="txtCargo" placeholder="Ingrese su cargo" required  value = "<?php echo $fila['Cargo_d']?>"><br>
            <input type="submit" class = "btn btn-primary" value="Actualizar" name="Actualizar">
            <a href="ListaDirectiva.php" class="btn btn-success" >Regresar</a>
        </form>
        <?php }?>
    </div>
</body>
</html>