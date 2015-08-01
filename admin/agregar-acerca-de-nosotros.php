<?php 
  include 'header.php';
 ?>   


<?php if (isset($_SESSION['estado']) && $_SESSION['estado'] == '1') { ?>
                
    

<!-- Agregar Acerca de Nosotros -->

  <div class="container">
    <section>
      <div class="page-header" id="agregar-acerca-de-nosotros">
          <h2>Agregar Acerca de Nosotros.<small> Agregar un nuevo Acerca de Nosotros.</small></h2>
        </div><!-- End Page Header -->

        <div class="col-lg-8">
            <form action="../common/valid-agregar-acerca-de-nosotros.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Titulo</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="titulo" placeholder="Inserte el titulo del servicio">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-message" class="col-lg-2 control-label">Contenido</label>
                <div class="col-lg-10">
                  <textarea name="contenido" class="form-control" 
                  cols="20" rows="10" placeholder="Ingrese el detalle del servicio"></textarea>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Tipo de Contenido</label>
                <div class="col-lg-10">
                   <select name="tipo" class="form-control">
                    <option value="l">Texto Largo</option>
                    <option value="c">Texto Corto</option>
                   </select>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Estado</label>
                <div class="col-lg-10">
                   <select name="simbolo" class="form-control">
                    <option value="2">Estrella</option>
                    <option value="1">Check</option>
                    <option value="3">Circulo</option>
                   </select>
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