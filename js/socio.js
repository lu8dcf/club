function vista() {
    // Abre la página emergente con un tamaño específico
    window.open('./vista_socio/perfil_socio.php', 'popup', 'width=800,height=700');
  
    // Envía los datos del formulario a la página de destino
    document.getElementById('vista-socio').submit();
}

function agrega() {
  // Abre la página emergente con un tamaño específico
  window.open('./vista_socio/agregar_socio.php', 'popup', 'width=800,height=700');

  // Envía los datos del formulario a la página de destino
  document.getElementById('agregar-socio').submit();
}

function prueba() {
  // Abre la página emergente con un tamaño específico
  window.open('./vista_socio/foto.php', 'popup', 'width=800,height=700');

  // Envía los datos del formulario a la página de destino
  document.getElementById('prueba').submit();
}

function elimina() {
  
  window.open('eliminarSocio.php', 'popup', 'width=800,height=800');
  document.getElementById('eliminar-socio').submit();
}

function modifica() {
  
  window.open('./funciones_menu/modificar_usuario.php', 'popup', 'width=900,height=500');
  document.getElementById('modificar-socio').submit();
}

function funcionSalir() {
  // borra el registro de usuario en la vle global
  unset($_SESSION['dni']);
  header('location:login1.php');
}

function cerrarVentana() {
      // Cierra la ventana actual
      window.close();
}

function eliminado() {
  var url = "eliminado.php";
  window.open(url, "_blank", "width=400, height=400");
}

function mostrarPrevisualizacion1(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#imagenPrevia').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
    