
<?php include("../includes/head2.php") ?>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
        
    <style>
        .navbar-toggler-icon {
        background-image: url("https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-512.png");
        }
    </style>
    <link rel="stylesheet" href="../css/menu-hamburguesa.css">
    <link rel="stylesheet" href="../css/menu.css?3">
    </head>

    <body>
        <?php include("../includes/header2.php") ?>
        <header class="encabezado-menu" >
        
            <?php
                // Inicia la sesion del usuario
                    session_start();

                    $dni=$_SESSION['dni'];
                        
                    // Conexión a la base de datos SQLite
                    $db = new SQLite3('../db/club.db');
                    if (!$db) {            
                        die('Error al conectarse a la base de datos.');
                    }

                    $consulta = "SELECT * FROM usuario WHERE dni = '$dni' ";
                    $datos_de = $db->query($consulta);
                    $datos = $datos_de->fetchArray();
                    // echo $datos['nombre']

                    // Cerrar la conexión a la base de datos
                    $db->close();

            ?>

            <div class="container-fluid">
                <!-- Encabezado, primera fila -->
                <div class="row ">

                    
                    <div class=" col-md-2 col-sm-3 col-lg-4 verde">
                        
                    </div>
                    <div class=" col-md-3 col-sm-4 col-lg-2 verde">
                        <div class="btn-group derecha detalle_login ">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <!-- muestra el nombre y aprellido logeado en el extremo  -->
                                <?php echo $datos['nombre'];?><span class="caret"></span>
                            </button>

                            <!-- salir de la session  -->
                            <form method="POST">
                                <ul class="dropdown-menu" role="menu">
                                <!-- <li><a href="#">Perfil</a></li> -->
                                    <li> 
                                        <!-- <img class="out" src="../img/apagado.png" alt="Salir"> -->
                                        <button type="submit" name="Salir">Salir</button>
                                    </li>
                                </ul>
                            </form> 

                        </div>
                    
                    </div>
                </div> 
                
                <?php // Verificar si se ha enviado el formulario y se ha hecho clic en el botón
                    if (isset($_POST['Salir'])) {
                        // Lógica o acciones que deseas realizar al hacer clic en el botón
                        funcionSalir();
                }

                // Función PHP cuando se sale del logon
                function funcionSalir() {
                    // borra el registro de usuario en la vble global
                    unset($_SESSION['dni']);
                    header('location:../login.php');

                }
                ?>

        </header>        
        <nav>            
            <ul >
                <li >
                    <a  href="../socio/socio.php">Socios</a>
                </li>
                                
                <li >
                    <a href="../deporte/deporte.php">Actividades</a>
                </li>
                <li >
                    <a  href="#">Carteleria</a>
                </li>
                <li >
                    <a  href="#">Salones</a>
                </li>
                <li >
                    <a  href="#">Tesoreria</a>
                </li>
            </ul>
        </nav>

        <main >
            <p>administracion</p>
            <p>supongo que algo deberiamos de mostrar aca</p>
                
        </main>

        <!-- js actualizado 5/23 -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    </body>
</html>
