
<?php include("header.php");?>
<?php include("head.php");?>	
<?php include("../modelos/autenticacion.php");?>
<?php include("BarraNavegacionadmin.php");?>	
		<div id="contenedor">
		
			<section>
				<div id="contieneblog">
				<?php // include("header.php");?>
				<aside id="articuloss">
				  <div>
					<article  contenteditable="true">
						<h3>Bienvenido  en esta sección usted puede editar los datos de cualquier usuario</h3><br>
						<div class="imagenarticuloblog" id="imgblog2"></div>
					</article>
				  </div>
				  <div><br>
				    <h3>EDITAR DATOS DE USUARIO</h3><br>

				    <?php
				    include("../modelos/conexion.php");

				    $usuario_codigo = $_GET['cedula'];

				    $consulta=mysql_query("select *from usuarios where (usuario_identificador='$usuario_codigo')");		
				
					if($row=mysql_fetch_array($consulta))
						{
							$usuario_codigo = $row['usuario_identificador'];
							$usuario_nombre = $row['usuario_nombre'];
							$usuario_apellido = $row['usuario_apellido'];
							$usuario_contrasena = $row['usuario_contrasena'];
							$usuario_correo = $row['usuario_correo'];
							$usuario_permisos = $row['usuario_permisos'];
							
						}

					?>


					<form name="form" method="post" action="../controladores/C_Usuario.php" > 
					 <table align="center">
					  <tr>
					    <td class="registr">Identificación</td>
					    <td class="registr"><input type="text" name="usuario" title="usuario" readonly="readonly" value='<?php echo $usuario_codigo; ?>'></td>
					  </tr>
					  <tr>
					    <td class="registr">Nombre</td>
					    <td class="registr"><input type="text" name="nombre" title="nombre" value='<?php echo $usuario_nombre; ?>'></td>
					  </tr>
					    <tr>
						 <td class="registr">Apellido</td>
						 <td class="registr"><input type="text" name="apellido" title="apellido" value='<?php echo $usuario_apellido;?>'></td>
						</tr>
						<tr>
						 <td class="registr">Correo</td>
						 <td class="registr"><input type="text" name="correo" title="correo" value='<?php echo $usuario_correo;?>'></td>
						</tr>
					    <tr>
					     <td class="registr">Login</td>
					     <td class="registr"><input type="password" name="login" title="login" readonly="readonly" value='<?php echo $usuario_contrasena;?>'></td>
					    </tr>
					     <td class="registr">Privilegio</td>
					     <td class="registr"><input type="text" name="permiso" name="permiso" readonly="readonly" value='<?php echo $usuario_permisos;?>'></td>
					    </tr>
					    <tr>    
					  <script language="JavaScript">function actualizar(){ document.form.txtoperacion.value = 'actualizar';}</script>    
					    <td colspan="2" align="center" class="registr"> <input type="submit" name="Submit" value="Actualizar" onClick="actualizar()" >
					    <input type='hidden' name='txtoperacion' value='des'>
					    </td></td>
					    </tr>
					</table>
					</form> 					
				  </div>
				</aside>
				<div style="clear:both"></div>
				</div>
			</section>
			<div style="clear:both"></div>
			<footer>
				<h6>Universidad Distrital Francisco Jose de Caldas</h6>
			</footer>
		</div>
	</body>
</html>
