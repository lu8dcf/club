<?php
     // Inicia la sesion del usuario
        unset($_SESSION['dni']);
        session_start();
     
     // Verificar si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los datos del formulario
        $dni = $_POST['dni'];
        
        $contrasenia = $_POST['contrasenia'];
        
        // Conexión a la base de datos SQLite
        $db = new SQLite3('./db/club.db');
        
        // Verificar si la conexión fue exitosa
        if (!$db) {            
            die('Error al conectarse a la base de datos.');
        }
        
        // Ejecutar la consulta SQL
        $query = "SELECT * FROM usuario WHERE dni = '$dni' AND contrasenia = '$contrasenia' ";
        
        $resultado = $db->query($query);
        
        
        // // Verificar si el login es correcto.
        if ($resultado->fetchArray()) {
        
            $_SESSION['dni'] = $dni;

            $consulta = "SELECT * FROM usuario WHERE dni = '$dni' ";
            $datos_de = $db->query($consulta);
            $datos = $datos_de->fetchArray();
            
            // segun el logon va a estilo de pagina
            // 1- administrador    2- Secretaria     3- tesorero

            // esto debe ser modificado tomando las opciones de la tabra de categorias
            if ($datos['categoria'] == 1){
              echo " a menu";
              header('location:./menu/menu.php');
            }elseif ($datos['categoria'] == 2){
              header('location:./vista_socio/perfil_socio.php');
            }elseif($datos['categoria'] == 3){
              header('location:tesorero.php');
            }


              
        } else {

            // muestra un emergente que esta incorrecto
            echo "<script type='text/javascript'>";
            echo "alert('DNI o contraseña incorrecta')";
            echo "</script>";
        }
        $db->close();
        
        
    }
?>