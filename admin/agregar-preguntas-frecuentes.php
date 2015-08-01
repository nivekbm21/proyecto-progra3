<?php 
  include 'header.php';
 ?>   


<?php if (isset($_SESSION['estado']) && $_SESSION['estado'] == '1') { ?>
                
    

<!-- Agregar Pregunta Frecuente -->

  <div class="container">
    <section>
      <div class="page-header" id="agregar-Pregunta-Frecuente">
          <h2>Agregar Pregunta Frecuente.<small> Agregar un nueva Pregunta Frecuente.</small></h2>
        </div><!-- End Page Header -->

        <div class="col-lg-8">
            <form action="../common/valid-agregar-preguntas-frecuentes.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Pregunta</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="pregunta" placeholder="Inserte la Pregunta Frecuente">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-message" class="col-lg-2 control-label">Respuesta</label>
                <div class="col-lg-10">
                  <textarea name="respuesta" class="form-control" 
                  cols="20" rows="10" placeholder="Ingrese la respuesta a la Pregunta Frecuente"></textarea>
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