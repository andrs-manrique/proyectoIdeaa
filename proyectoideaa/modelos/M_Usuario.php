<?php
include("conexion.php");

	class usuario{
		private $cedula;
		private $nombre;
		private $apellido;
		private $email;
		private $login;
		private $permiso;
		
                function __construct($cedula, $nombre, $apellido, $email, $login, $permiso) {
                    $this->cedula = $cedula;
                    $this->nombre = $nombre;
                    $this->apellido = $apellido;
                    $this->email = $email;
                    $this->login = $login;
                    $this->permiso = $permiso;
                }

                public function __destruct(){}	
		public function get_cedula()
		{return $this->cedula;}
		public function get_nombre()
		{return $this->nombre;}
	    public function get_apellido()
		{return $this->apellido;}	
		public function get_email()
		{return $this->email;}
		public function get_login()
		{return $this->login;}
		public function get_permiso()
		{return $this->permiso;}


		public function verificar()
		{	
session_start();		
$consulta= mysql_query("select*from usuarios where usuario_identificador='$this->cedula' and usuario_contrasena='$this->login'");
		
				if($fila=mysql_fetch_array($consulta))
				{
					$_SESSION['autenticado']= "SI";
					$_SESSION['identificacion']=$fila['usuario_identificador'];

					if($fila['usuario_permisos']=='colaborador')
					{
			 			header("location: ../vistas/colaborador.php");
					}
					else if($fila['usuario_permisos']=='aspirante')
					{
						header("location: ../vistas/aspirante.php");
					}
                                        else if($fila['usuario_permisos']=='administrador')
					{
			 			
                                               echo"<script language='javascript'> alert('ADMINISTRADOR');  </script>";
                                               header("location: ../vistas/administrador.php");
					}
					                                        
                                        else
					{
						header("location: ../index.php");
                                                echo"<script language='javascript'> alert('Error de Inicio');  </script>";
					}
				}
									
				else
				{ 
					header("location: ../index.php");}
		}

///////////////////////////////////////////
                
                public function consultarDatos()
		{		
		$peticion=mysql_query("select * from usuarios where usuario_nombre='$this->nombre'");
			
			while($fila=mysql_fetch_array($peticion))
			{  $this->cedula = $fila['usuario_identificador'];
			   
			}
		
		 $consulta=mysql_query("select *from usuarios where (usuario_identificador='$this->cedula')");		
				
			if($row=mysql_fetch_array($consulta))
			{
				//echo "encontro";
				echo"<script language='javascript'> alert('La consulta es un EXITO');  </script>";
				echo"<script language='javascript'> location.href=\"../vistas/editarDatos.php?cedula=".$row['usuario_identificador']."\"</script>";
			}
		}

                
                //---------------------Funcion No 2-----------------
                
                public function modificar()
		{		
		 $consulta="update usuarios set usuario_nombre='$this->nombre',usuario_apellido='$this->apellido',usuario_correo='$this->email' where(usuario_identificador='$this->cedula')";
		
			if(mysql_query($consulta))
			{ 
				echo"<script language='javascript'> alert('La Actualizacion es un EXITO');  </script>";
				echo"<script language='javascript'>location.href=\"../vistas/administrador.php\"   </script>";		
			} 
			else
			{ 
				echo"<script language='javascript'> alert('ERROR, No se Actualizo'); </script>";
				echo"<script language='javascript'> location.href=\"../vistas/editarUsuario.php\" </script>";			
			}  
		}
	
                
                ///////////////////////////////////////////

		public function consultar()
		{		
		 $consulta=mysql_query("select *from colaborador where (colaborador_id='$this->cedula')");		
				
			if($row=mysql_fetch_array($consulta))
			{
				//echo "encontro";
				echo"<script language='javascript'> alert('La consulta es un EXITO');  </script>";
				echo"<script language='javascript'> location.href=\"../vistas/editarUsuarioColaborador.php?cedula=".$row['colaborador_id']."\"</script>";
			}
			
			else
			{ 
			echo"<script language='javascript'>alert('lo sentimos pero ese estudiante no existe en el sistema vuelva  a intertarlo pero ahora con un usuario valido');</script>";
			echo"<script language='javascript'>location.href=\"../vistas/consultarUsuario.php\"</script>";
			}

		}
                
}
?>