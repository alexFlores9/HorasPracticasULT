<?php

    //Incluimos la conexion.
    include("../Conexion/conexion.php");

if (isset($_POST['AgregarE'])) {
    $N_paja = $_POST['N_paja'];
    $NombreA = $_POST['NombreAsociado'];

    $editar = "UPDATE  tb_asociados SET Nombre_asociado = '$NombreA' WHERE N_paja = '$N_paja' ";
    $resultado = mysqli_query($conn, $editar);

    if ($resultado) {
        header("location:LAsociados.php");
    }else {
        echo "El registro no puedo ser guardado";
    }
}

?>