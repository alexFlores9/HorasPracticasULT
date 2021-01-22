<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Asociados.</title>

    <link rel="stylesheet" href="../css/botonesEliminar.css">

    <!-- Estilos de Bootstrap!-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</head>
<body>


    <div class="container"><br>
        
        <a href="FGAsociado.php" class="btn btn-success">Nuevo Asociado.</a><br>

        <table class="table table-responsive table-bordered" >

        <h2><b><center>Listado de Asociados.</center></b></h2>

            <thead>
                <tr>
                    <td class="text-center">ID</td>
                    <td class="text-center">Nomabre Completo</td>
                    <td class="text-center">Acciones</td>
                </tr>
            </thead>

            <?php 
            
                //Incluimos la conexion.
            include("../Conexion/conexion.php");
            
            $sql = "SELECT * FROM tb_asociados";
            $resultado = mysqli_query($conn, $sql);

            while ($fila = mysqli_fetch_array($resultado)) {
                       
            ?>
            <tbody>

                <tr>
                    <td class="text-cecnter"><?php echo $fila['N_paja']?></td>
                    <td class="text-center"><?php echo $fila['Nombre_asociado']?></td>
                    <td class="text-center">
                        <a href="FEAsociado.php?N_paja=<?php echo $fila['N_paja']; ?>" class="btn btn-primary">EDITAR</a>
                        <a href="ELAsociado.php?N_paja=<?php echo $fila['N_paja']; ?>" class="eAsociado">ELIMINAR</a>
                    </td>
                </tr>

            </tbody>

            <?php }?>

        </table>
        <?php if (isset($_GET['e'])){  ?>
        <div class="flash_data" data-flashdata="<?= $_GET['e'];?>"></div>
        <?php }?>

    </div>

    <script src="../js/sweetalert2.all.min.js"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/EliminarA.js"></script>

</body>
</html>