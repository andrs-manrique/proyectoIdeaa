<?php include("header.php");?>
<?php include("../modelos/autenticacion.php");?>
<?php include("./BarraNavegacionadmin.php");?>			
<br>
<?php include("head.php");?>
		<div id="contenedor">
			
                    
			<section>
				<div id="contieneblog">
				<aside id="articuloss">
				  <div>
					<article  contenteditable="true">
						<h3>Bienvenido Admin en esta sección usted puede consultar la lista de usuarios existentes en el AVA</h3><br>
						<div class="imagenarticuloblog" id="imgblog2"></div>
					</article>
				  </div>
				  <div><br>
				    <h3>CONSULTAR colaborador</h3><br>
					  
					<form name="form" method="post" action="../controladores/C_Usuario.php" > 
						 <table align="center">
						  <tr>
						    <td class="registr">Identificación</td>
						    <td class="registr"><input type="text" name="usuario" title="usuario" value="ingrese identificación" onClick="value=''"></td>
						  </tr>
						  <input type="hidden" name="nombre" title="nombre" readonly="readonly" value="">
						  <input type="hidden" name="apellido" title="apellido" readonly="readonly" value="">
						  <input type="hidden" name="correo" title="correo" readonly="readonly" value="">
						  <input type="hidden" name="login" title="login" readonly="readonly" value="">
						  <input type="hidden" name="ciudad" title="ciudad" readonly="readonly" value="">
						  <input type="hidden" name="carrera" title="carrera" readonly="readonly" value="">
						  <input type="hidden" name="semestre" title="semestre" readonly="readonly" value="">
						  <input type="hidden" name="sexo" title="sexo" readonly="readonly" value="">
						  <input type="hidden" name="edad" title="edad" readonly="readonly" value="">
						  <input type="hidden" name="idCurso" title="idCurso" readonly="readonly" value="">
						  <input type="hidden" name="permiso" name="permiso" readonly="readonly" value="">
						    <tr>    
						  <script language="JavaScript">function consultar(){ document.form.txtoperacion.value = 'consultar';}</script>    
						    <td colspan="2" align="center" class="registr"> <input type="submit" name="Submit" value="Consultar" onClick="consultar()" >
						    <input type='hidden' name='txtoperacion' value='des'>
						    </td>
						    </tr>
						</table>
					</form> 
				  </div>
				</aside>
				
			</section>
                    <?php include("footer.php");?>	
			
			