<?php 
  include 'header.php';
 ?>   
<?php if (isset($_SESSION['estado']) && $_SESSION['estado'] == '1') { ?>
<?php 
  include '../common/dbConnection.php';
  $connexion= new Connect;
  $slider=$connexion->getUnSlider($_GET["id"]);
   
  
 ?>

 <!-- Agregar Usuario -->

  <div class="container">

    <section>
      <div class="page-header" id="actualizar-Slider">
          <h2>Actualizar Slider.<small> Actualizar un Slider desde Administrador.</small></h2>
        </div><!-- End Page Header -->

        <div class="col-lg-8">
            <form action="../common/valid-actualizar-slider.php" class="form-horizontal" method="POST" enctype="multipart/form-data">

              <input type="hidden" class="form-control" name="id" value="<?php echo $slider['id']; ?>"placeholder="">


              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Nombre </label> 

                 <div class="col-lg-10">
                  <input type="text" class="form-control" name="nombre" value="<?php echo $slider['nombre']; ?>" placeholder="" > 
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Imagen</label>
                <div class="col-lg-10">
                  <input type="file" class="form-control-imagen" id="imagen" name="imagen">
                </div>
              </div><!-- End form group -->
              
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </div>

             

            </form>
          </div>
        </div><!-- End the row -->

    </section>
  </div>

  <?php } else{
  header('Location: login.php');
  }
?>

<?php 
  include 'footer.php';
 ?>