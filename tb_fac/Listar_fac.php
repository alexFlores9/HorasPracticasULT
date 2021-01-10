<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['Usuario'];
if ($varsesion == null || $varsesion ='' ) {
   echo 'no tiene autorizacion, si eres de la directiva y no tienes tu cuenta, contactacte con el presidente de la asociacion!';
   die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../login/menu.css">
    <link rel="stylesheet" href="facCss.css">
    <title>Listar fac</title>
</head>
<body>
    
<div id="header">
			<ul class="nav">
				<li><a href="../login/inicio.php">Inicio</a></li>
				<li><a href="">Servicios</a>
					<ul>
						<li><a href="../tb_directiva/GuardarDirectiva.php">Lista Directiva</a></li>
						<li><a href="../tb_fac/Listar_fac.php">tb_fac</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a>
							<ul>
								<li><a href="">Submenu1</a></li>
								<li><a href="">Submenu2</a></li>
								<li><a href="">Submenu3</a></li>
								<li><a href="">Submenu4</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="">Acerca de</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a></li>
					</ul>
				</li>
				<li><a href="">Contacto</a></li>
			</ul>
		</div>


    <h1>Welcome</h1>


 <a href="cerrar.php">cerrar session</a>
    
    <div>
        <a href="">Agregar Fac</a>
    </div>
    <?php
        $host = "localhost";
        $user = "root";
        $contraseña = "";
        $name_db = "bd_tobalon";

        $conexion = mysqli_connect($host, $user, $contraseña, $name_db);
        $sql = "SELECT * FROM tb_fac";
        $resultado = mysqli_query($conexion, $sql);
        while ($fila = mysqli_fetch_array($resultado)) {
        ?>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numero de Paja</th>
                    <th>nombre</th>
                    <th>Consumo acumulado</th>
                    <th>Mes Atual</th>
                    <th>Total</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $fila['id_fac']?></td>
                    <td><?php echo $fila['N_paja']?></td>
                    <td><?php echo $fila['fk_nombre']?></td>
                    <td><?php echo $fila['ConsumoAcumulado']?></td>
                    <td><?php echo $fila['mesActual']?></td>
                    <td><?php echo $fila['Total']?></td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>  
            </tbody>
            <?php } mysqli_close($conexion);?>
        </table>
    </div>
</body>
</html>