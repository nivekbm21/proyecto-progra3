<?php 
  include 'header.php';
 ?>   
<?php if (isset($_SESSION['estado']) && $_SESSION['estado'] == '1') { ?>
<?php 
  include '../common/dbConnection.php';
  $connexion= new Connect;
  $acerca_nosotros=$connexion->getUnAcerca_nosotros($_GET["id"]);
   
  
 ?>

<div class="container">

    <section>
      <div class="page-header" id="agregar-Servicio">
          <h2>Actualizar Acerca de Nosotros.<small> Actualizar  Acerca de Nosotros desde Administrador.</small></h2>
        </div><!-- End Page Header -->

        <div class="col-lg-8">
            <form action="../common/valid-actualizar-acerca-de-nosotros.php" class="form-horizontal" method="POST" enctype="multipart/form-data">

              <input type="hidden" class="form-control" name="id" value="<?php echo $acerca_nosotros['id']; ?>"placeholder="">


              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Titulo </label> 

                 <div class="col-lg-10">
                  <input type="text" class="form-control" name="titulo" value="<?php echo $acerca_nosotros['titulo']; ?>" placeholder="" > 
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Contenido</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="contenido"  value="<?php echo $acerca_nosotros['contenido']; ?>"placeholder="">
                </div>
              </div><!-- End form group -->

               <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Tipo</label>
                <div class="col-lg-10">
                  <select name="tipo" class="form-control">
                    <option value="l">Texto Largo</option>
                    <option value="c">Texto Corto</option>
                   </select>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Simbolo</label>
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