<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Asociado.</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">

    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <!-- <?php include("../Menu/index.php");?> -->

    <div class="container"><br><br>

    <h2><b><center>Editar Asociado.</center></b></h2><br>
    
        <?php 
        
            //Incluimos la conexion.
            include("../Conexion/conexion.php");
            
        $N_paja = $_GET['N_paja'];
        $consulta = "SELECT * FROM tb_asociados WHERE N_paja = '$N_paja' ";
        $resultado = mysqli_query($conn, $consulta);

        while ($fila = mysqli_fetch_array($resultado)) {
            # code...
        ?>
        <form class="form" action="EAsociados.php" method="post">
            <input type="hidden" name="N_paja" value="<?php echo $fila['N_paja']?>">

            <label>Nombre Asociado</label><br>
            <input class="form-control" type="text" name="NombreAsociado" placeholder="Ingrese su nombre Completo" value="<?php echo $fila['Nombre_asociado'];?>"><br>

            <input type="submit" class="btn btn-primary" value="Actualizar" name="AgregarE">
        </form>
        <?php }?>
    </div>
</body>
</html>