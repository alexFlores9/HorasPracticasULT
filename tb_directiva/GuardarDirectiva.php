<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
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
    
    <p><center>Registro de Usuario</center></p>
        <form method="post">
            <label>Nombres</label>
            <input type="text" class = "form-control" name="txtNombre" placeholder="Ingrese sus nombres" required><br>
            <label>Apellidos</label>
            <input type="text" class = "form-control" name="txtApellido" placeholder="Ingrese sus apellidos" required><br>
            <label>Usuario</label>
            <input type="text" class = "form-control" name="txtUsuario" placeholder="Ingrese su usuario" required><br>
            <label>Clave</label>
            <input type="text" class = "form-control" name="txtClave" placeholder="Ingrese su clave" required><br>
            <label>Cargo</label>
            <input type="text" class = "form-control" name="txtCargo" placeholder="Ingrese su cargo" required><br>
            <input type="submit" class = "btn btn-primary" value="Agregar" name="Agregar">
            <a href="ListaDirectiva.php" class="btn btn-success" >Regresar</a>
        </form>
    </div>
</body>
</html>

<?php 
    $host = "localhost";
    $user = "root";
    $contraseña = "";
    $name_db = "bd_tobalon";
    
    $conexion = mysqli_connect($host, $user, $contraseña, $name_db);
    
    if (isset($_POST['Agregar'])) {
        # code...
        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
        $usuario = $_POST['txtUsuario'];
        $clave = $_POST['txtClave'];
        $cargo = $_POST['txtCargo'];
    
        $sql = "INSERT INTO tb_directiva (Nombre_d, Apellido_d, Usuario_d, Clave_d, Cargo_d) VALUES ('$nombre','$apellido','$usuario','$clave','$cargo')";
        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo "Usuario Guardada Exitosamente";
            header("location:ListaDirectiva.php");
        }else {
            echo "El Usuario No Pudo Ser Registrado!!";
        }
        
       
    }
    mysqli_close($conexion);

?>