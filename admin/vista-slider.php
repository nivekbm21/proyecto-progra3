<script>
	function myFunction(id) {
		var r = confirm("Desea Eliminar el Slider?");
	    if (r == true) {
	       	location.href='../common/valid-eliminar-slider.php?id='+id;
	       	

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
	$slider=$connexion->getSlider();
	
 ?>
 
 	<div class="container">
		<section>
			<hr>
			<h2>Slider.<small> Te ayudamos a administrar tu informacion.</small></h2><hr>
         
	       <table  class="table">
	        <thead>
	            <tr>
	                <th>Id</th>
	                <th>Nombre</th>
	                <th>Ruta</th>
	                 <th>Actualizar</th>
	                <th>Eliminar</th>
	               <td> <button  type="button" class="btn btn_default"  onClick=" window.location.href='agregar-slider.php' " ><span class="glyphicon glyphicon-plus" > </span></button></td>   </td>
	           	</tr>
	        </thead>
	        <tbody>
	        	<?php
	            foreach ($slider as $row) {
	        ?>
	            <tr>
	                <td><a href="searchUsuario.php?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
	                <td><?php echo $row['nombre']; ?></td>
	                <td><?php echo $row['ruta']; ?></td>
	               
	                <td><button type="button" class="btn btn_default"  onClick=" window.location.href='actualizar-slider.php?id=<?php echo $row["id"];?>' " ><span class="glyphicon glyphicon-refresh"> </span></td>




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

