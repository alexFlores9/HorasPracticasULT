<!DOCTYPE html>
    <html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios.</title>

    <link rel="stylesheet" href="../css/botonesEliminar.css">

    <!-- Estilos de Bootstrap!-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../CSS/footer.css">


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
                    //Incluimos la conexion.
                    include("../Conexion/conexion.php");

                    $sql = "SELECT * FROM tb_directiva";
                    $resultado = mysqli_query($conn, $sql);

                    while ($fila = mysqli_fetch_array($resultado)) {

                ?>
                
                
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $fila['id_directiva'] ?></td>
                        <td class="text-center"><?php echo $fila['Nombre_d']?></td>
                        <td class="text-center"><?php echo $fila['Apellido_d']?></td>
                        <td class="text-center"><?php echo $fila['Usuario_d']?></td>
                        <td class="text-center"><?php echo $fila['Clave_d']?></td>
                        <td class="text-center"><?php echo $fila['Cargo_d']?></td>
                        <td class="text-center" >
                            <a  class="btn btn-primary" href = "EditarDirectiva.php?id=<?php echo $fila['id_directiva'] ?>" >EDITAR</a>

                            <a  class="boton" href="EliminarDirectiva.php?id=<?php echo $fila['id_directiva']?>">ELIMINAR</a>    
                        </td>
                    </tr>
                </tbody>
                <?php } mysqli_close($conn); ?>
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