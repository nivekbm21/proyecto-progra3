<?php 
  include 'header.php';
 ?>   


<?php if (isset($_SESSION['estado']) && $_SESSION['estado'] == '1') { ?>
                
    

<!-- Agregar Servicios -->

  <div class="container">
    <section>
      <div class="page-header" id="agregar-Servicio">
          <h2>Agregar Servicio.<small> Agregar un nuevo Servicio.</small></h2>
        </div><!-- End Page Header -->

        <div class="col-lg-8">
            <form action="../common/valid-agregar-servicio.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Titulo</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Inserte el titulo del servicio">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-message" class="col-lg-2 control-label">Contenido</label>
                <div class="col-lg-10">
                  <textarea name="contenido" id="contenido" class="form-control" 
                  cols="20" rows="10" placeholder="Ingrese el detalle del servicio"></textarea>
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