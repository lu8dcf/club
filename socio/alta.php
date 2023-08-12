<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS - Altas</title>
    
    <!-- Favicons -->
    <link href="../img/escudo.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="../css/alta.css">

</head>
<body>
    <main>
        <header>Alta de Socio</header>

        <div class="progreso" >
            <div class="paso" >
                <p>Nac.</p>
                <div class="num" >
                    <span>1</span>
                </div>
                <img src="../img/verificado.png" alt="imagen check">
            </div>
            <div class="paso" >
                <p>Ubi</p>
                <div class="num" >
                    <span>2</span>
                </div>
                <img src="../img/verificado.png" alt="imagen check">
            </div>
        </div>

        <div class="form-principal" >
            <form method="POST" action="#">

                <!-- PAGINA 1 -->
                <div class="pagina">
                    <h1>Identificación</h1>
                    <div class="campo">
                        <label for="nom">Nombres: </label>
                        <input type="text" name="" id="nom" placeholder="Nombres">
                    </div>
                    <div class="campo">
                        <label for="ape">Apellidos: </label>
                        <input type="text" name="" id="ape" placeholder="Apellidos">
                    </div>
                    <div class="campo">
                        <label for="dni">DNI: </label>
                        <input type="number" name="" id="dni" placeholder="DNI">
                    </div>
                    <div class="campo">
                        <label for="nac">Fecha de Nacimiento: </label>
                        <input type="date" name="" id="nac" min="1923-01-01" >
                    </div>
                    <div class="campo" >
                    <button >Siguiente</button>
                    </div>
                </div>

                <!-- PAGINA 2 -->

                <div class="pagina">
                    <h1>Ubicación</h1>
                    <div class="campo">
                        <label for="pais">Pais: </label>
                        <select name="" id="pais">
                            <option value="-1" disabled selected >Selecciona una opción</option>
                            <option value="0">opcion Pais</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label for="prov">Provincia: </label>
                        <select name="" id="prov">
                            <option value="-1" disabled selected >Selecciona una opción</option>
                            <option value="0">opcion Provincia</option>
                        </select>                    
                    </div>
                    <div class="campo">
                        <label for="ciud">Ciudad: </label>
                        <select name="" id="ciud">
                            <option value="-1" disabled selected >Selecciona una opción</option>
                            <option value="0">opcion Ciudad</option>
                        </select>                    
                    </div>
                    <div class="campo">
                        <label for="cod">Codigo Postal: </label>
                        <input type="number" name="" id="cod" placeholder="CP">
                    </div>
                    
                    <div class="campo botones" >
                        <button class="volver-pag1 volver" >Atrás</button>
                        <button class="adelante-pag3 adelante" >Siguiente</button>
                    </div>
                </div>
            </form>
        </div>
    </main>



            <!-- <form method="POST" action="#">
                                <h4>Altas</h4>
                                <div class="col-md-4 col-sm-5 col-lg-2 input-group mb-3 flotar-izquierda" style="border: none;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Nro Socio</span>
                                    </div>

                                <input type="number" class="form-control" name="matricula"  placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                            
                                
                                </div> 

                                <div class="col-md-8 col-sm-8 col-lg-3 input-group mb-3 flotar-izquierda" style="border: none;">
                        
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Nro DNI</span>
                                    </div>
                                <input type="number" class="form-control" name="dni"  placeholder="Ingrese el DNI" required aria-label="Username" aria-describedby="basic-addon1">
                                

                                </div>

                                <div class="col-md-8 col-sm-8 col-lg-4 input-group flotar-izquierda" style="border: none;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Nombre y Apellido</span>
                                    </div>
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                                    <input type="text" class="form-control"name="apellido" placeholder="Apellido" required>
                                </div>

                                <div class="col-md-4 col-sm-5 col-lg-3 input-group mb-3 flotar-izquierda " style="border: none;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Teléfono</span>
                                    </div>

                                    <input type="number" class="form-control" name="tel" placeholder="Ingrese Telefono" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" name="email"  placeholder="Ingrese el email" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="col-md-4 col-sm-5 col-lg-5 input-group mb-3 flotar-izquierda " style="border: none;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Fecha de Nacimiento: </span>
                                    </div>
                                    <input type="date" name="fecha_nac"  placeholder="Fecha de Nacimiento" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>

                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Subir Foto: </button>
                                    <input type="file" name="foto" accept=".jpg,.png,.jpeg,.gif" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                </div>

                                <select class="form-control choices-single">
                                    <option value="1">Habilitado</option>
                                    <option value="0">Deshabilitado</option>
                                    <option value="2">Termporal</option>
                                    
                                </select>

                                    <script>
                                    new Choices(document.querySelector(".choices-single"));
                                    </script>
                                


                                <button class="btn btn-outline-secondary boton-naranja" type="submit" id="button-addon1">Dar de Alta </button>

                            </form>


                            <?php
                                // carga del formulario en la BD
                             

                                // Verificar si se ha enviado el formulario
                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                // Obtener los datos del formulario
                                    $matricula = $_POST['matricula'];
                                    $dni = $_POST['dni'];
                                    $nombre = $_POST['nombre'];
                                    $apellido = $_POST['apellido'];
                                    $email = $_POST['email'];
                                    
                                    $fecha_nac = $_POST['fecha_nac'];
                                    $tel = $_POST['tel'];
                                
                                    // Conexión a la base de datos SQLite
                                    $db = new SQLite3('./db/mutual.db');
                                    if (!$db) {            
                                        die('Error al conectarse a la base de datos.');
                                    }
                                
                                    // Ejecutar la consulta SQL
                                    $query = "INSERT INTO persona (dni,nombre,apellido,tel,email,fecha_nac,matricula) VALUES ('$dni','$nombre','$apellido','$tel','$email','$fecha_nac','$matricula')";
                                    $resultado = $db->exec($query);
                                    
                                    // Verificar si la consulta se ejecutó correctamente
                                    if ($resultado) {
                                        echo 'Datos insertados correctamente.';
                                    } else {
                                        echo 'Error al insertar los datos.';
                                    }
                                    
                                    // Cerrar la conexión a la base de datos
                                    $db->close();
                                }

                                

                        ?>    -->
    
</body>