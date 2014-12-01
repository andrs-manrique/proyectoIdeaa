
<?php include("header.php");?>
    <?php include("BarraNavegacionadmin.php");?>	<br>
<?php include("head.php");?>	
<?php include("../modelos/autenticacion.php");?>
		

		<div id="contenedor">
			<section>
				<div id="contieneblog">
				<?php // include("header.php");?>
				<aside id="articuloss">
				
<div><br>
 <h3>DATOS PERSONALES</h3><br>
	<p>en esta sección usted puede ver sus datos personales como tambien modificarlos</p><br>
	<form name="form" method="post" action="../controladores/C_Usuario.php" > 
            
            <?php  // se genera un fomulario de mostrar datos de la DB?>
	<table align="center">
	<tr>
        <td class="registr">Nombre</td>
	<td class="registr">
        <input type="text" name="nombre" title="nombre" readonly="readonly" value="<?php include("../modelos/conexion.php");
		$identificacion = $_SESSION['identificacion'];
		$consulta=mysql_query("select*from usuarios where usuario_identificador='$identificacion'");
		while($fila=mysql_fetch_array($consulta))
						{
							echo $fila['usuario_nombre'];
						}?>"></td>
						  </tr>
						    <input type="hidden" name="usuario" title="usuario" readonly="readonly" value="">
						    <input type="hidden" name="apellido" title="apellido" readonly="readonly" value="">
						    <input type="hidden" name="correo" title="correo" readonly="readonly" value="">
						    <input type="hidden" name="login" title="login" readonly="readonly" value="">
						    <input type="hidden" name="permiso" name="permiso" readonly="readonly" value="">
						    <tr>    
						  <script language="JavaScript">function consultarDatos(){ document.form.txtoperacion.value = 'consultarDatos';}</script>    
						    <td colspan="2" align="center" class="registr"> <input type="submit" name="Submit" value="Consultar Datos" onClick="consultarDatos()" >
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
			<?php include './footer.php'; ?>
			
