<!DOCTYPE html>
    <html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios.</title>
    <link rel="stylesheet" href="boton.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



    <style>
        body{
            background-color: #000;
        }

        .text-center{
            color: white;
            font-size: 20px;
        }

        h2{
            color: white;
        }

    </style>
    </head>
    <body>
    <div class="container">
        <br><br>
        <a class="btn btn-success" href = "GuardarDirectiva.php">Nuevo Usuario</a>
        <br><br>

        <table class="table table-responsive table-bordered"> 
            <center><b><u><h2>Lista de Usuarios.</h2></u></b></center>
            <thead>
                <tr>
                    <td class="text-center"><b>ID</b></td>
                    <td class="text-center"><b>NOMBRE</b></td>
                    <td class="text-center"><b>APELLIDOS</b></td>
                    <td class="text-center"><b>USUARIO</b></td>
                    <td class="text-center"><b>CLAVE</b></td>
                    <td class="text-center"><b>CARGO</b></td>
                    <td class="text-center"><b>OPCIONES</b></td>
                </tr>
            </thead>
                <?php 
                    $host = "localhost";
                    $user = "root";
                    $contraseña = "";
                    $name_db = "bd_tobalon";

                    $conexion = mysqli_connect($host, $user, $contraseña, $name_db);
                    $sql = "SELECT * FROM tb_directiva";
                    $resultado = mysqli_query($conexion, $sql);

                    while ($fila = mysqli_fetch_array($resultado)) {

                ?>
                
                
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $fila['id_Directiva'] ?></td>
                        <td class="text-center"><?php echo $fila['Nombre_d']?></td>
                        <td class="text-center"><?php echo $fila['Apellido_d']?></td>
                        <td class="text-center"><?php echo $fila['Usuario_d']?></td>
                        <td class="text-center"><?php echo $fila['Clave_d']?></td>
                        <td class="text-center"><?php echo $fila['Cargo_d']?></td>
                        <td class="text-center" >
                            <a  class="btn btn-primary" href = "EditarDirectiva.php?id=<?php echo $fila['id_Directiva'] ?>" >EDITAR</a>

                            <a  class="boton" href="EliminarDirectiva.php?id=<?php echo $fila['id_Directiva']; ?>">ELIMINAR</a>    
                        </td>
                    </tr>
                </tbody>
                <?php } mysqli_close($conexion); ?>
        </table>
        <?php if (isset($_GET['m'])){  ?>
        <div class="flash-data" data-flashdata="<?= $_GET['m'];?>"></div>
        <?php }?>
    </div>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/EliminarD.js"></script>
    </body>
</html>