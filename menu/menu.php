
<?php include("../includes/head2.php") ?>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
        
    <style>
        .navbar-toggler-icon {
        background-image: url("https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-512.png");
        }
    </style>

    <link rel="stylesheet" href="../css/menu.css?3">
    </head>

    <body>
        <?php include("../includes/header2.php") ?>
        <header>
        
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

        <main>

            <div class="row">
                <!-- Menu hamburguesa -->
                <aside class="col-md-2 col-sm-3">

                    <nav class="navbar navbar-expand-xxl navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="../socio/socio.php">Socios</a>
                                </li>
                                 
                                <li class="nav-item adentro">
                                    <a class="nav-link adentro" href="#">Actividades</a>
                                </li>
                                <li class="nav-item adentro">
                                    <a class="nav-link adentro" href="#">Carteleria</a>
                                </li>
                                <li class="nav-item adentro">
                                    <a class="nav-link adentro" href="#">Salones</a>
                                </li>
                                <li class="nav-item adentro">
                                    <a class="nav-link adentro" href="#">Tesoreria</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </aside>

                <div class="col-md-10 col-sm-9 col-xs-12 ">
                    <div class="row">
                        <div class="col-md-12 medio">
                            <div class="col-lg- " style="border: none;">
                                <h1>Administración </h1>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-2 col-md-4 col-xs-6 azul"></div>
                        <div class="col-md-2 col-md-4 col-xs-6 azul"></div>
                        <div class="col-md-4 col-md-4 col-xs-6 azul"></div>
                        <div class="col-xs-12 col-md-12 rojo "></div>
                        <div class="container-fluid mt-3 tabla "></div>

                    </div>
                </div>
            </div>
        </main>

        <!-- js actualizado 5/23 -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
