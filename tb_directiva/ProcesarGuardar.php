<?php

    $conexion = mysqli_connect("localhost", "root", "", "bd_tobalon");
    
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
            header("location:ListaDirectiva.php");
        }else {
            echo "El Usuario No Pudo Ser Registrado!!";
        }
        
       
    }

?>