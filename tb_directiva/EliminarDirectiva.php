<?php 
        # code...
    $host = "localhost";
    $user = "root";
    $contraseña = "";
    $name_db = "bd_tobalon";

    $conexion = mysqli_connect($host, $user, $contraseña, $name_db);
    $id = $_GET['id'];

    $eliminar = "DELETE FROM tb_directiva WHERE id_directiva='$id'";
    $resultado = mysqli_query($conexion, $eliminar);

    if ($resultado) {
        # code...
        header("location:ListaDirectiva.php?m=1");
    }else{
        header("location:ListaDirectiva.php");
    }



?>