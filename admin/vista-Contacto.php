<script>
	function myFunction(id) {
		var r = confirm("Desea Eliminar el Contacto");
	    if (r == true) {
	       	location.href='../common/valid-eliminar-Contacto.php?id='+id;
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
	$contacto=$connexion-> getContacto();
	
 ?>

  	<div class="container">
		<section>
			
           <hr>
	       <table  class="table">
	        <thead>
	            <tr>
	                <th>Id</th>
	                <th>Nombre</th>
	                <th>Correo</th>
	                <th>Consulta</th>
	                <th>Empresa</th>
	            </tr>


	        </thead>
	        <tbody>
	        	<?php
	            foreach ($contacto as $row) {
	        ?>
	            <tr>
	                <td><a href="searchUsuario.php?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
	                
	                <td><?php echo $row['nombre']; ?></td>
	                <td><?php echo $row['correo']; ?></td>
	                <td><?php echo $row['consulta']; ?></td>
	                <td><?php echo $row['empresa']; ?></td>
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