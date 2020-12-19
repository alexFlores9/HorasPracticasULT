<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Usuarios</title>
    <!-- Estilos de Bustrad!-->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
p{
    font-size = 20px;
}
</style>
</head>
<body>
    <div class="container"><br><br>
    
    <p><h2><center>Editar Usuario</center></h2></p>
    <?php 

$host = "localhost";
$user = "root";
$contraseña = "";
$name_db = "bd_tobalon";

$conexion = mysqli_connect($host, $user, $contraseña, $name_db);

$id_d = $_GET['id'];
    $sql = "SELECT * FROM tb_directiva WHERE id_directiva ='$id_d'";
    $resultado = mysqli_query($conexion, $sql);

    while ($fila = mysqli_fetch_array($resultado)) {
         
    ?>
        <form method="post">
            <!-- <input type="hidden" name="id" value = "<?php echo $fila['id_directiva']?>"> -->
            <label>Nombres</label>
            <input type="text" class = "form-control" name="txtNombre" placeholder="Ingrese sus nombres" required value = "<?php echo $fila['Nombre_d']?>" ><br>
            <label>Apellidos</label>
            <input type="text" class = "form-control" name="txtApellido" placeholder="Ingrese sus apellidos" required value = "<?php echo $fila['Apellido_d']?>" ><br>
            <label>Usuario</label>
            <input type="text" class = "form-control" name="txtUsuario" placeholder="Ingrese su usuario" required value = "<?php echo $fila['Usuario_d']?>" ><br>
            <label>Clave</label>
            <input type="text" class = "form-control" name="txtClave" placeholder="Ingrese su clave" required  value = "<?php echo $fila['Clave_d']?>"><br>
            <label>Cargo</label>
            <input type="text" class = "form-control" name="txtCargo" placeholder="Ingrese su cargo" required  value = "<?php echo $fila['Cargo_d']?>"><br>
            <input type="submit" class = "btn btn-primary" value="Actualizar" name="Actualizar">
            <a href="ListaDirectiva.php" class="btn btn-success" >Regresar</a>
        </form>
        <?php }?>
    </div>
</body>
</html>

<?php 
    if (isset($_POST['Actualizar'])) {

        $host = "localhost";
        $user = "root";
        $contraseña = "";
        $name_db = "bd_tobalon";
    
        $conexion = mysqli_connect($host, $user, $contraseña, $name_db);

            $idc = $_REQUEST['id'];
            $nombre = $_POST['txtNombre'];
            $apellido = $_POST['txtApellido'];
            $usuario = $_POST['txtUsuario'];
            $clave = $_POST['txtClave'];
            $cargo = $_POST['txtCargo'];

        $actualizar = "UPDATE tb_directiva SET  Nombre_d = '$nombre',  Apellido_d = '$apellido', Usuario_d='$usuario', Clave_d='$clave', Cargo_d='$cargo' WHERE id_directiva = $idc";
        $resultado = $conexion->query($actualizar);
        if ($resultado) {   
            header("location:ListaDirectiva.php");
            echo "el usuario no ha sido modificado";
        
        }else {
            header("location:ListaDirectiva.php");
            echo "<script>alert('el usuario ha sido modificado');</script>";
        }
    }
?>