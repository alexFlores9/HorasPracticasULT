<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    
    <link rel="stylesheet" href="css/btnguardar.css">

    <!-- Estilos de Bootstrap!-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <style type="text/css">
        input#search{
        background-color: #063ef6;
        color: #fff;
        width: 85px;
        height: 35px;
        border-radius: 4px;
       }
    </style>
</head>
<body>
    <div class="container"><br><br>
    
    <p><center><h2>Registro de Usuario</h2></center></p>
        <form method="post" action="ProcesarGuardar.php">

            <label>Nombres</label>
            <input type="text" class = "form-control" name="txtNombre" placeholder="Ingrese sus nombres" required><br>

            <label>Apellidos</label>
            <input type="text" class = "form-control" name="txtApellido" placeholder="Ingrese sus apellidos" required><br>

            <label>Usuario</label>
            <input type="text" class = "form-control" name="txtUsuario" placeholder="&#128100; Ingrese su usuario" required><br>

            <label>Clave</label>
            <input type="password" class = "form-control" name="txtClave" placeholder="&#128272; Ingrese su clave" required><br>

            <label>Cargo</label>
            <input type="text" class = "form-control" name="txtCargo" placeholder="Ingrese su cargo" required><br>

            <input type="submit" id="search" class="btnRegistrar" value="Agregar" name="Agregar">
            <a href="ListaDirectiva.php" class="btn btn-success" >Regresar</a>
            
        </form>

    </div>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/guardarD.js"></script>
</body>
</html>

