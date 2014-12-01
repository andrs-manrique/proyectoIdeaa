
<?php include("header.php");?>
    <?php include("BarraNavegacionadmin.php");?> <br>	

<?php include("head.php");?>	
<?php include("../modelos/autenticacion.php");?>

<div id="contenedor">
		
			<section>
				<div id="contieneblog">
				<?php include("header.php");?>
				<aside id="articuloss">
				  <div>
					<article  contenteditable="true">
						<h3>Bienvenido Admin en esta sección usted puede editar los datos de cualquier Colaborador</h3><br>
						<div class="imagenarticuloblog" id="imgblog2"></div>
					</article>
				  </div>
				  <div>
				    <h3>Editar Colaborador</h3><br>

				    <?php
				    include("../modelos/conexion.php");

				    $usuario_codigo = $_GET['cedula'];

				    $consulta=mysql_query("select *from colaborador where (colaborador_id='$usuario_codigo')");		
				
					if($row=mysql_fetch_array($consulta))
						{
 
      
          
							$usuario_codigo = $row['colaborador_id'];
                                                        $usuario_contrasena = $row['colaborador_pass'];
							$usuario_nombre = $row['colaborador_nombre'];
							$usuario_apellido = $row['colaborador_apellido'];
							$usuario_correo = $row['colaborador_email'];
							
							$usuario_carrera = $row['colaborador_carrera'];
							$usuario_semestre = $row['colaborador_semestre'];
							$usuario_sexo = $row['colaborador_sexo'];
							$usuario_permisos = $row['colaborador_materia'];
							$curso_id = $row['colaborador_cel'];
						}

					?>


					<form name="form" method="post" action="../controladores/C_Usuario.php" > 
					 <table align="center">
					  <tr>
					    <td class="registr">Identificación</td>
					    <td class="registr"><input type="text" name="usuario" title="usuario"  value='<?php echo $usuario_codigo; ?>'></td>
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
                                            
                                             <tr>
					     <td class="registr">materia</td>
					     <td class="registr"><input type="text" name="login" title="login"  value='<?php echo $usuario_permisos;?>'></td>
					    </tr>
                                            
                                              <tr>
					     <td class="registr">tel</td>
					     <td class="registr"><input type="text" name="cel" title="login" value='<?php echo $curso_id;?>'></td>
					    </tr>
                                            
                                           
                                                                                       

                                            
						
						<tr><td class="registr">Carrera</td><td class="registr"><select name="carrera" id="carrera">
									  <option value="<?php echo $usuario_carrera;?>"><?php echo $usuario_carrera;?></option>
						              <option value="sistemas">Tec en sistematización de datos</option>
						              <option value="industrial">Tec en industrial</option>
						              <option value="mecanica">Tec en mecanica</option> 
									  <option value="electrica">Tec en electrica</option>
									  <option value="electronica">Tec en electronica</option>
									  <option value="civil">Tec en civil</option>
									  </select></td></tr>
                                                
					     <tr><td class="registr">Semestre</td><td class="registr"><select name="semestre" id="semestre">
						<option value="<?php echo $usuario_semestre;?>"><?php echo $usuario_semestre;?></option>
						              <option value="primero">Primer semestre</option>
						              <option value="segundo">Segundo semestre</option>
						              <option value="tercero">Tercer semestre</option>
									  <option value="cuarto">Cuarto semestre</option>
									  <option value="quinto">Quinto semestre</option>
									  <option value="sexto">Sexto semestre</option> 
									  </select></td></tr>
									    <tr><td class="registr">Sexo:</td><td class="registr"><select name="sexo" id="sexo">
									  <option value="<?php echo $usuario_sexo;?>"><?php echo $usuario_sexo;?></option>
						              <option value="masculino">Masculino</option>
						              <option value="femenino">Femenino</option> 
									  </select></td></tr>
						
						
                                                                            <tr>
					     <td class="registr">Privilegio</td>
					     <td class="registr"><input type="text" name="permiso" name="permiso"  value='<?php echo $usuario_permisos;?>'></td>
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
