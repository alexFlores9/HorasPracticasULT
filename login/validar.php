<?php
$Usuario=$_POST['Usuario'];
$Clave=$_POST['Clave'];


session_start();
$_SESSION['Usuario']=$Usuario;

$conexion=mysqli_connect("localhost","root","","bd_tobalon");


$consulta="SELECT*FROM tb_directiva  WHERE Usuario_d='$Usuario' AND Clave_d='$Clave' ";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    header("location:inicio.php");

    # code...
}else{
  ?>  

  <?php
  include("login.php");
  ?>
  <h1 class="bad"> ERROR EN CLAVE O CONTRASEÑA </h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

