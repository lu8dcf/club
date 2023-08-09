<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliminar - Usuario</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../js/perfil.js"> </script>

    <!-- Favicons -->
    <link href="../index/assets/img/favicon.png" rel="icon">

    <link rel="stylesheet" href="../estilos/perfil_socio.css?3">
  </head>

  <body>
    <!-- contenedor de la pagina -->
  <div class="container-fluid">

    <?php
      // obtiene el dni a eliminar y lo cambia a otra variable
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
        $dniEliminar = $_POST['dni'];
         
      }
    ?>
    <!-- esto hace un espacio -->
    <div class="col-"> </div>

<!-- Encabezado, primera fila -->

    <h3 class="text-header usuario-eliminado"> ¿Está seguro de eliminar el siguiente usuario?</h3>

      <!-- botones de si eliminar o no -->
      <table class="table table-hover tabla-eliminar">
          <tr>
            <td>
              <form method="POST" action="eliminado.php">
                <!-- valor del dni a eliminar sera enviado a la sigiente pag -->
                <input type="hidden" name="dniEliminar" value="<?php echo $dniEliminar; ?>">

                <button class="btn btn-outline-secondary boton-naranja boton-tabla" type="submit" name="borrar" id="button-addon1" >SI </button>
              </form>
            </td>

            <td>
              <form>
                <button class="btn btn-outline-secondary boton-naranja boton-tabla" onclick="cerrarVentana()" id="button-addon1">NO </button>
              </form>
            </td>
          </tr>
      </table>

          

  

    <?php
        // muestra la info del usuario
        include '../vista_socio/perfil_socio.php';
    ?>
       
    </div>
</body>
</html>