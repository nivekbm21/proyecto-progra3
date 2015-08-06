<?php 
  include 'header.php';
 ?>

<?php if (isset($_SESSION['estado']) && $_SESSION['estado'] == '1') { ?>

    <div class="container">
        <section>
            <hr>
            <h2>Administraci&oacute;n.<small> Te ayudamos a modificar tu sitio.</small></h2>
            
            <table class="table">
                <tr>
                    <th>Contenido</th>
                    <th>Description</th>
                    <th></th>
                </tr>
                <tr>
                    <th>Usuarios</th>
                    <td>Administrar Usuarios</td>
                    <td><button  type="button" class="btn btn_default" onClick="window.location.href='vista-usuario.php'" ><span class="glyphicon glyphicon-wrench"></span></button></td>
                </tr>
                <tr>
                    <th>Slider</th>
                    <td>Administrar imagenes del rotador</td>
                    <td><button  type="button" class="btn btn_default" onClick="window.location.href='vista-slider.php'" ><span class="glyphicon glyphicon-wrench"></span></button></td>
                </tr>
                <tr>
                    <th>Servicios</th>
                    <td>Administrar la informacion de Servicios</td>
                    <td><button  type="button" class="btn btn_default" onClick="window.location.href='vista-Servicio.php'" ><span class="glyphicon glyphicon-wrench"></span></button></td>
                </tr>
                <tr>
                    <th>Acerca de Nosotros</th>
                    <td>Administrar la informacion de Acerca de Nosotros</td>
                    <td><button  type="button" class="btn btn_default" onClick="window.location.href='vista-Acerca-Nosotros.php'" ><span class="glyphicon glyphicon-wrench"></span></button></td>
                </tr>
                <tr>
                    <th>Preguntas Frecuentes</th>
                    <td>Administrar la informacion de preguntas frecuentes</td>
                    <td><button  type="button" class="btn btn_default" onClick="window.location.href='vista-Preguntas-Frecuentes.php'" ><span class="glyphicon glyphicon-wrench"></span></button></td>
                </tr>
                <tr>
                    <th>Contactenos</th>
                    <td>Administrar la informacion de los formularios de contactos</td>
                    <td><button  type="button" class="btn btn_default" onClick="window.location.href='vista-Contacto.php'" ><span class="glyphicon glyphicon-wrench"></span></button></td>
                </tr>
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