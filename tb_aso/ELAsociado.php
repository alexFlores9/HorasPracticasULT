<?php

    //Incluimos la conexion.
    include("../Conexion/conexion.php");

    $N_paja = $_GET['N_paja'];

    $eliminar = "DELETE FROM  tb_asociados WHERE N_paja = '$N_paja' ";
    $resultado = mysqli_query($conn, $eliminar);

    if ($resultado) {
        header("location:LAsociados.php?e=1");
    }

?>