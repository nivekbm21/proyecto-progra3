<?php 
  include 'header.php';
 ?>   


<?php if (isset($_SESSION['estado']) && $_SESSION['estado'] == '1') { ?>
                
<!-- Agregar Usuario -->

  <div class="container">
    <section>
      <div class="page-header" id="agregar-Servicio">
          <h2>Agregar Usuario.<small> Agregar un nuevo Usuario Administrador.</small></h2>
        </div><!-- End Page Header -->

        <div class="col-lg-8">
            <form action="../common/valid-agregar-usuario.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="nombre" placeholder="">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Apellido</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="apellido" placeholder="">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Usuario</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="usuario" placeholder="">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Contraseña</label>
                <div class="col-lg-10">
                  <input type="password" class="form-control" name="contrasena" placeholder="">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Cargo</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="cargo" placeholder="">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Estado</label>
                <div class="col-lg-10">
                   <select name="estado" class="form-control">
                    <option value="0">Deshabilitado</option>
                    <option value="1">Habilitado</option>
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