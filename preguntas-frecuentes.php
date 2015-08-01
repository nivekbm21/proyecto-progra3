<?php 
  include 'header.php';
 ?>
    
<!-- Preguntas Frecuentes -->

    <div class="container">
      <section>
        <div class="page-header">
          <h2>Preguntas Frecuentes.<small> Solucion a tus Problemas.</small></h2>
        </div><!-- End Page Header -->

        <div class="panel-group" id="accordion">
          
        </div><!-- End panel group -->

      </section>
    </div><!-- End container -->


<!-- Soporte Tecnico -->

  <div class="container">
    <section>
      <div class="page-header" id="Soporte">
          <h2>Soporte.<small> Consulte a nuestros especialistas.</small></h2>
        </div><!-- End Page Header -->

        <div class="col-lg-8">
            <form action="" class="form-horizontal">
              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-name" placeholder="Ingrese su Nombre y Apellidos">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-email" class="col-lg-2 control-label">Correo</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-email" placeholder="Ingrese la direcccion de correo electronico">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-company" class="col-lg-2 control-label">Empresa</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-company" placeholder="Indique el nombre de la empresa.">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-message" class="col-lg-2 control-label">Consulta</label>
                <div class="col-lg-10">
                  <textarea name="user-message" id="user-message" class="form-control" 
                  cols="20" rows="10" placeholder="Ingrese su consulta"></textarea>
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

<?php 
  include 'footer.php';
 ?>