<?php include("header.php");?>
<?php include("../modelos/autenticacion.php");?>
<?php include("./BarraNavegacionadmin.php");?>			
<br>
<?php include("head.php");?>	
		<div>
		 <nav>
		  <ul>
		
		  <li><a><?php
				   //session_start();
include("../modelos/conexion.php");
$identificacion = $_SESSION['identificacion'];
$consulta=mysql_query("select * from usuarios where usuario_identificador='$identificacion'");
						while($fila=mysql_fetch_array($consulta))
						{
                                                   
							echo "<h1>Admin: ".$fila['usuario_nombre']." Bienvenido al Sistema</h1>";
						}
				   ?>
				   </a></li>
				  </ul>
				 </nav>
				</div><br>
                                		<?php include("footer.php");?>		

	
				

