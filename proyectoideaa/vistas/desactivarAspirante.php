<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<link rel=stylesheet href="pc1.css" type="text/css" />
	</head>
	<body>

<article  contenteditable="true">
						<h3>Bienvenido ADMINISTRADOR en esta sección usted puede desactivar a cualquier Aspirante</h3><br>
						<div class="imagenarticuloblog" id="imgblog2"></div>
					</article>
				  </div>
				  <div><br>
				    <h3>DESACTIVAR ASPIRANTE</h3><br>
					<p>En esta seccion usted podra desactivar cualquier Aspirante</p><br>
					<form name="form" method="post" action="../controladores/C_Usuario.php"> 
						  <table align="center">
						  <tr>
						    <td class="registr">Cedula </td>
						    <td class="registr"><input name="usuario" type="text" title="usuario" value="Ingrese  identificación" onClick="value=''"></td>
						  </tr>
						  
						 <tr>   
						    <script language="JavaScript">function desac(){if (confirm('¿Estas seguro de Inhabilitar los Privilegios del Usuario?')){ document.form.txtoperacion.value = 'desac';} else {} } </script>  
						    <td class="registr" colspan="2" align="center"><input type="submit" name="Submit" value="Desactivar" onClick="desac()" ><input type='hidden' name='txtoperacion' value='des'></td>
						    </tr>
						</table>        
					</form>					
				  </div>


				</body>
				</html>