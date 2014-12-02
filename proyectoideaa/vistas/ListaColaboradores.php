 
<?php include("header.php");?>
<?php include("../modelos/autenticacion.php");?>
<?php include("./BarraNavegacionadmin.php");?>			
<br>
<?php include("head.php");?>	


<div class="container">
      
      
      
		<div class="margin-top">
			<div class="row">	
			<div class="span2">			     
<?php //include('modal_add_Colabor.php'); ?>
										
			</div>
			<div class="span10">
			 
			
					<?php 

					//$archivo="<img src='../archivos/$row['archivo']'">; 
					?>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Tabla Colaboradores</strong>
                                </div>
                                <thead>
                                    <tr>

                                    	 
                                        <th>Identificacion</th>
                                        <th>Tipo Doc</th>
                                        <th>Nombre</th>                                 
                                        <th>Apellido</th> 
                                        <th>Contacto</th>                                 
                                        <th>genero</th>   
                                        <th>Materia</th>  
                                         <th>Ver</th>                              
                                        <th>acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysql_query("select * from usuarios ORDER BY id_colaborador ASC ")or die(mysql_error());
                                //  $arch =" <a href='Archivos/{$row['archivo_aspi']}' >Ver Documento</a> ";
									while($row=mysql_fetch_array($user_query)){
									$id=$row['id_colaborador']; ?>
									 <tr class="del<?php echo $id ?>">
   <td><?php echo $row['id_colaborador']; ?></td> 
									<td><?php echo $row['tipod_colaborador']; ?></td> 
                                  
                                     <td><?php echo $row['nom_colaborador']; ?></td> 
                                    <td><?php echo $row['apell_colaborador']; ?></td> 
                                    <td><?php echo $row['cel_colaborador']; ?></td> 
                                    <td><?php echo $row['genero_colaborador']; ?></td>
                                      <td><?php echo" MATERIAS";?></td>  
                                     <td><?php echo"Ver más";?></td> 
                                 <?php //   <td> <?php echo "<a href='../Archivos/{$row['archivo_aspi']}' >Ver Documento</a> " </td>  ?>
<td width="100">

<a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
href="#delete_user<?php echo $id; ?>" data-toggle="modal"  
class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
<?php include('modal_delete_Colabor.php'); ?>

<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
href="#edit<?php echo $id; ?>" data-toggle="modal" 
class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
<?php include('modal_edit_Colabor.php'); ?>
</td>



									<?php include('toolttip_edit_delete.php'); ?>
									     <!-- Modal edit user -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							
<script type="text/javascript">

    </script>

			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>  <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">			     
										<ul class="nav nav-tabs nav-stacked">
											<li>
											<a href="#add_user" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Agregar COlaborador</strong></a>
											</li>
										</ul>		 
     <!-- Modelo para agregar COLABORADOR -->
	<?php include('modal_add_Colabor.php'); ?>
										
			</div>
			<div class="span10">
			 
			
					<?php 

					//$archivo="<img src='../archivos/$row['archivo']'">; 
					?>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Tabla Colaboradores</strong>
                                </div>
                                <thead>
                                    <tr>

                                    	 
                                        <th>Identificacion</th>
                                        <th>Tipo Doc</th>
                                        <th>Nombre</th>                                 
                                        <th>Apellido</th> 
                                        <th>Contacto</th>                                 
                                        <th>genero</th>   
                                        <th>Materia</th>  
                                         <th>Ver</th>                              
                                        <th>acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysql_query("select * from tabla_colaborador ORDER BY id_colaborador ASC ")or die(mysql_error());
                                //  $arch =" <a href='Archivos/{$row['archivo_aspi']}' >Ver Documento</a> ";
									while($row=mysql_fetch_array($user_query)){
									$id=$row['id_colaborador']; ?>
									 <tr class="del<?php echo $id ?>">
   <td><?php echo $row['id_colaborador']; ?></td> 
									<td><?php echo $row['tipod_colaborador']; ?></td> 
                                  
                                     <td><?php echo $row['nom_colaborador']; ?></td> 
                                    <td><?php echo $row['apell_colaborador']; ?></td> 
                                    <td><?php echo $row['cel_colaborador']; ?></td> 
                                    <td><?php echo $row['genero_colaborador']; ?></td>
                                      <td><?php echo" MATERIAS";?></td>  
                                     <td><?php echo"Ver más";?></td> 
                                 <?php //   <td> <?php echo "<a href='../Archivos/{$row['archivo_aspi']}' >Ver Documento</a> " </td>  ?>
<td width="100">

<a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
href="#delete_user<?php echo $id; ?>" data-toggle="modal"  
class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
<?php include('modal_delete_Colabor.php'); ?>

<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
href="#edit<?php echo $id; ?>" data-toggle="modal" 
class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
<?php include('modal_edit_Colabor.php'); ?>
</td>



									<?php include('toolttip_edit_delete.php'); ?>
									     <!-- Modal edit user -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							
<script type="text/javascript">

    </script>

			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>