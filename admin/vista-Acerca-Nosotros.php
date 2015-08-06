<script>
	function myFunction(id) {
		var r = confirm("Desea Eliminar el Contenido?");
	    if (r == true) {
	       	location.href='../common/valid-elimnar-acerca-nosotros.php?id='+id;
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
	$acerca_nosotros=$connexion-> getAcerca_nosotros();
	
 ?>
 
 	<div class="container">
		<section>
			<hr>
			<h2>Acerca de Nosotros.<small> Te ayudamos a administrar tu informacion.</small></h2><hr>
           
	       <table  class="table">
	        <thead>
	            <tr>
	                <th>Id</th>
	                <th>Titulo</th>
	                <th>Contenido</th>
	                <th>Tipo</th>
	                 <th>Simbolo</th>
	                <th>Actualizar</th>
	                <th>Eliminar</th>
	               <td> <button  type="button" class="btn btn_default"  onClick=" window.location.href='agregar-acerca-de-nosotros.php' " ><span class="glyphicon glyphicon-plus" > </span></button></td>   </td>

	                



	                	
	               
	            </tr>


	        </thead>
	        <tbody>
	        	<?php
	            foreach ($acerca_nosotros as $row) {
	        ?>
	            <tr>
	                <td><a href="searchUsuario.php?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
	                <td><?php echo $row['titulo']; ?></td>
	                <td><?php echo $row['contenido']; ?></td>
	                <td><?php echo $row['tipo']; ?></td>
	                <td><?php echo $row['simbolo']; ?></td>
	                <td><button type="button" class="btn btn_default"  onClick=" window.location.href='actualizar-Acerca-Nosotros.php?id=<?php echo $row["id"];?>' " ><span class="glyphicon glyphicon-refresh"> </span></td>




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