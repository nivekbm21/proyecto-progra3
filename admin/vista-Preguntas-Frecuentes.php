<script>
	function myFunction(id) {
		var r = confirm("Desea Eliminar la Pregunta Seleccionada?");
	    if (r == true) {
	       	location.href='../common/valid-eliminar-Preguntas-Frecuentes.php?id='+id;
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
	$preguntas_frecuentes=$connexion->getPreguntas_frecuentes();
	
 ?>
 
 	<div class="container">
		<section>
			<hr>
			<h2>Preguntas Frecuentes.<small> Te ayudamos a administrar tu informacion.</small></h2><hr>
           <table  class="table">
	        <thead>
	            <tr>
	                <th>Id</th>
	                <th>Pregunta</th>
	                <th>Respuesta</th>
	                <th>Actualizar</th>
	                <th>Eliminar</th>
	               <td> <button  type="button" class="btn btn_default"  onClick=" window.location.href='agregar-preguntas-frecuentes.php' " ><span class="glyphicon glyphicon-plus" > </span></button></td>   </td>
      
	            </tr>


	        </thead>
	        <tbody>
	        	<?php
	            foreach ($preguntas_frecuentes as $row) {
	        ?>
	            <tr>
	                <td><a href="searchUsuario.php?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
	                <td><?php echo $row['pregunta']; ?></td>
	                <td><?php echo $row['respuesta']; ?></td>
	                <td><button type="button" class="btn btn_default"  onClick=" window.location.href='actualizar-preguntas-frecuentes.php?id=<?php echo $row["id"];?>' " ><span class="glyphicon glyphicon-refresh"> </span></td>
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
