<script>
	function myFunction(id) {
		var r = confirm("Desea Eliminar el Usuario?");
	    if (r == true) {
	       	location.href='../common/valid-eliminar-usuario.php?id='+id;
	    }
	}
	</script>
<?php 
  include 'header.php';
 ?>   
<?php if (isset($_SESSION['estado']) && $_SESSION['estado'] == '1') { ?>
<?php 
	include '../common/dbConnection.php';
	$connexion= new Connect;
	$usuario=$connexion->getUsuario();
	
 ?>
 
 	<div class="container">
		<section>
			<hr>
			<h2>Usuarios.<small> Te ayudamos a administrar tu informacion.</small></h2><hr>
	       <table  class="table">
	        <thead>
	            <tr>
	                <th>Id</th>
	                <th>Nombre</th>
	                <th>Apellido</th>
	                <th>Usuario</th>
	                <th>Contrasena</th>
	                <th>Cargo</th>
	                <th>Estado</th>
	                <th>Actualizar</th>
	                <th>Eliminar</th>
	               <td> <button  type="button" class="btn btn_default"  onClick=" window.location.href='agregar-usuario.php' " ><span class="glyphicon glyphicon-plus" > </span></button></td>   </td>

	                



	                	
	               
	            </tr>


	        </thead>
	        <tbody>
	        	<?php
	            foreach ($usuario as $row) {
	        ?>
	            <tr>
	                <td><a href="searchUsuario.php?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
	                <td><?php echo $row['nombre']; ?></td>
	                <td><?php echo $row['apellido']; ?></td>
	                <td><?php echo $row['usuario']; ?></td>
	                <td><?php echo $row['contrasena']; ?></td>
	                <td><?php echo $row['cargo']; ?></td>
	                <td><?php echo $row['estado']; ?></td>
	                <td><button type="button" class="btn btn_default"  onClick=" window.location.href='actualizar-usuario.php?id=<?php echo $row["id"];?>' " ><span class="glyphicon glyphicon-refresh"> </span></td>




					<td><button type="button" class="btn btn_default"  onClick="myFunction(<?php echo $row['id'];  ?>)"><span class="glyphicon glyphicon-remove"> </span></button></td>
					

				</tr>




	        <?php } ?>

	       
	        </tbody>
	    </table>

		</section>
	</div>
<?php } else{
  header('Location: login.php');
  }
?>

<?php 
  include 'footer.php';
 ?>
