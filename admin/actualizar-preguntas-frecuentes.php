<?php 
  include 'header.php';
 ?>   
<?php if (isset($_SESSION['estado']) && $_SESSION['estado'] == '1') { ?>
<?php 
  include '../common/dbConnection.php';
  $connexion= new Connect;
  $preguntas_frecuentes=$connexion->getUnPreguntas_frecuentes($_GET["id"]);
?>

<!-- Agregar Pregunra Frecuente -->

  <div class="container">

    <section>
      <div class="page-header" id="agregar-Pregunta-Frecuente">
          <h2>Actualizar Preguntas Frecuentes.<small> Actualizar un Pregunta desde Administrador.</small></h2>
        </div><!-- End Page Header -->

        <div class="col-lg-8">
            <form action="../common/valid-actualizar-preguntas-frecuentes.php" class="form-horizontal" method="POST" enctype="multipart/form-data">

              <input type="hidden" class="form-control" name="id" value="<?php echo $preguntas_frecuentes['id']; ?>"placeholder="">


              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Pregunta </label> 

                 <div class="col-lg-10">
                  <input type="text" class="form-control" name="pregunta" value="<?php echo $preguntas_frecuentes['pregunta']; ?>" placeholder="" > 
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Respuesta</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="respuesta"  value="<?php echo $preguntas_frecuentes['respuesta']; ?>"placeholder="">
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