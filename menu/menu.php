<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administración</title>

    <!-- bootsrap actualizado 5/23 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        .navbar-toggler-icon {
        background-image: url("https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-512.png");
        }
    </style>

    <link rel="stylesheet" href="./estilos/admin.css?2">
    </head>

    <body>
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

                    <div class=" col-md-7 col-sm-5 col-lg-6 verde">
                        <h1 class="titulo">Club</h1>
                    </div>

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
                                    <li> <img class="out" src="../img/apagado.png" alt="Imagen no encontrada">
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
                    header('location:login1.php');

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
                                <a class="nav-link" href="#">Socios</a>
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
                                
                                <li class="nav-item active">
                                <a class="nav-link" href="usuaios.php">Listado de Usuarios - pa sacar</a>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                </aside>

                <div class="col-md-10 col-sm-9 col-xs-12 ">
                    <div class="row">
                        <div class="col-md-12 medio">
                            <div class="col-lg- " style="border: none;">
                                <h2>Listado de Usuarios </h2>
                            </div>
                        </div>
                        
                        




                        <div class="col-md-2 col-md-4 col-xs-6 azul"></div>
                        <div class="col-md-2 col-md-4 col-xs-6 azul"></div>
                        <div class="col-md-4 col-md-4 col-xs-6 azul"></div>

                    <div class="col-xs-12 col-md-12 rojo ">



                        <div class="container-fluid mt-3 tabla ">

                                <!-- MOSTRAR EN MODO TABLA LOS TITULOS.. NO SE SI ESTA BIEN -->

                                                
                            <!-- titulos -->
                            <!-- <input value="Nro Socio" >
                                        <input value="Nro DNI" size="8" >
                                        <input value="Nombre" >
                                        <input value="Apellido" >
                                        <input value="email" >
                                        <input value="telefono" >
                                        <input value="Fecha de Nac" size="10" > -->
                        

                            <h2>Usuarios Registrados</h2>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nro Socio</th>
                                                    <th>Nro DNI</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Email</th>
                                                    <th>Telefono</th>
                                                    <th>Fecha de Nac</th>

                                                </tr>
                                            </thead>

                        
                                    

                                        <?php
                            // listado y modificacin de usuarios

                            // Conexión a la base de datos SQLite
                            $db = new SQLite3('./db/mutual.db');
                            if (!$db) {            
                                die('Error al conectarse a la base de datos.');
                            }
                            
                            // Consulta para obtener los datos de la tabla
                            $query = "SELECT * FROM persona";
                            $resultado = $db->query($query);
                            
                            // Verificar si se encontraron registros
                            if ($resultado->numColumns() > 0) {
                                // Mostrar el formulario de modificación para cada registro
                                

                                while ($row = $resultado->fetchArray(SQLITE3_ASSOC)) {
                                    $matricula = $row['matricula'];
                                    $dni = $row['dni'];
                                    $nombre = $row['nombre'];
                                    $apellido = $row['apellido'];
                                    $email = $row['email'];
                                    $tel=$row['tel'];
                                    $fecha_nac = $row['fecha_nac'];

                                    ?>
                                
                                    

                                        
                                    <!-- LISTADO PARA VER Y MODIFICAR -->

                                    <form method="POST" action="guardar.php">

                                    <!-- ESTOY TRABAJANDO EN ESTA PARTE DE MOSTRAR EN MODO TABLA -->

                                        <!-- <div class="container-fluid mt-3 tabla ">
                                            <table class="table table-hover">
                                            
                                            <tbody>
                                                <tr>
                                                    <td><input class="tabla_usuarios" type="hidden" name="id_persona" value="<?php echo $id_persona; ?>"></td>
                                                    <td><input class="tabla_usuarios" type="number" name="matricula-<?php echo $id_persona; ?>"  value="<?php echo $matricula; ?>" required></td>
                                                    <td><input class="tabla_usuarios"  type="number" name="dni-<?php echo $id_persona; ?>"  value="<?php echo $dni; ?>"  size="8"  required></td>

                                                    <td><input  class="tabla_usuarios" type="text" name="nombre-<?php echo $id_persona; ?>" $id="nombre" value="<?php echo $nombre; ?>" required></td>
                                                    <td><input class="tabla_usuarios"  type="text" name="apellido-<?php echo $id_persona; ?>" $id="apellido" value="<?php echo $apellido; ?>" required></td>
                                                    <td><input  class="tabla_usuarios" type="email" name="email-<?php echo $id_persona; ?>" $id="email" value="<?php echo $email; ?>"></td>
                                                    <td><input  class="tabla_usuarios" type="number" name="tel-<?php echo $id_persona; ?>" $id="tel" value="<?php echo $tel; ?>"></td>
                                                    <td><input  class="tabla_usuarios" type="date" name="fecha_nac-<?php echo $id_persona; ?>" $id="fecha_nac" value="<?php echo $fecha_nac; ?>" ></td>
                                                    <td><input class="tabla_usuarios"  type="submit" value="Modificar"></td>

                                            
                                                </tr>
                                                
                                            </tbody>
                                            </table>
                                        </div> -->


                                        <input type="hidden" name="id_persona" value="<?php echo $id_persona; ?>">

                                        <input type="number" name="matricula-<?php echo $id_persona; ?>" id="matricula" value="<?php echo $matricula; ?>" required>
                                                                        
                                        <input type="number" name="dni-<?php echo $id_persona; ?>" id="dni" value="<?php echo $dni; ?>"  size="8"  required>

                                        <input type="text" name="nombre-<?php echo $id_persona; ?>" $id="nombre" value="<?php echo $nombre; ?>" required>
                                        <input type="text" name="apellido-<?php echo $id_persona; ?>" $id="apellido" value="<?php echo $apellido; ?>" required>
                                        
                                        <input type="email" name="email-<?php echo $id_persona; ?>" $id="email" value="<?php echo $email; ?>">
                                        <input type="number" name="tel-<?php echo $id_persona; ?>" $id="tel" value="<?php echo $tel; ?>">
                                        <input type="date" name="fecha_nac-<?php echo $id_persona; ?>" $id="fecha_nac" value="<?php echo $fecha_nac; ?>" >
                                        
                                        <input type="submit" value="Modificar">
                                    </form>
                                    <?php
                                }
                            }
                                // Liberar la memoria del resultado
                                $resultado->finalize();
                                
                                
                            
                            // Cerrar la conexión a la base de datos
                            $db->close();
                            ?>
                        
                        
                        </div>
                        
                    </div>
                </div>

            
            </div>

            


        </main>

        <!-- js actualizado 5/23 -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    </body>
</html>
