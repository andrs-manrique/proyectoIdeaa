<?php
require_once("../modelos/M_Usuario.php");
 ////////////////////////////
$cedula=$_POST["usuario"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$email = filter_var($correo,FILTER_VALIDATE_EMAIL);
$login=$_POST["login"];
$login = md5($login);
$permiso=$_POST["permiso"];
$operacion=$_POST["txtoperacion"];
/////////////////////////////
$objUsuario = new usuario($cedula,$nombre,$apellido,$email,$login,$permiso);
/////////////////////////////
if($operacion=="verificar")
{
	$objUsuario->verificar();
}



if($operacion=="consultarDatos")
{
	$objUsuario->consultarDatos();
}


if($operacion=="actualizar")
{

	$objUsuario->modificar();
}


if($operacion=="consultar")
{
	if(($_POST["usuario"])=="") 
	{ echo " <script language='JavaScript'> alert('El campo Cedula Es Oblicatorio Diligenciar'); location.href=\"../vistas/consultarUsuario.php\"; </script>"; exit();}
	
	if(!is_numeric($_POST["usuario"]))
	{ echo " <script language='JavaScript'> alert('Ingrese un valor numerico en el campo cedula'); location.href=\"../vistas/consultarUsuario.php\"; </script>"; exit();}

	$objUsuario->consultar();
}

?>