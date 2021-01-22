<?php

    //Incluimos la conexion.
    include("../Conexion/conexion.php");
if (isset($_POST['AgregarA'])) {
    $NombreAsociado = $_POST['NombreAsociado'];

    $GuardarA = "INSERT INTO tb_asociados (Nombre_Asociado) VALUE ('$NombreAsociado')";
    $resultado = mysqli_query($conn, $GuardarA);

    if ($resultado) {
       // header("location:LAsociados.php");
        echo "guardado";
    }else {
        echo "no bro";
    }
}

?>