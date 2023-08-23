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

    <link rel="stylesheet" href="../css/alta.css?2">

</head>
<body>
    <?php
        $fecha_Alta = date("Y-m-d"); // Esto obtiene la fecha actual en formato "día-mes-año"
    ?>
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
                <p>Ubicación</p>
                <div class="num" >
                    <span>2</span>
                </div>
                <img src="../img/verificado.png" alt="imagen check">
            </div>
            <div class="paso" >
                <p>Domicilio</p>
                <div class="num" >
                    <span>3</span>
                </div>
                <img src="../img/verificado.png" alt="imagen check">
            </div>
            <div class="paso" >
                <p>Contacto</p>
                <div class="num" >
                    <span>4</span>
                </div>
                <img src="../img/verificado.png" alt="imagen check">
            </div>
        </div>

        <div class="form-principal" >
            <form method="POST" action="">

                <!-- PAGINA 1 -->
                <div class="pagina movPagina">
                    <h1>Identificación</h1>
                    <input type="hidden" name="fecha_Alta" value="<?php echo $fecha_Alta; ?>">
                    <input type="hidden" name="pago" value="pruebaPago">

                    <div class="campo">
                        <label for="nom">Nombres: <b class="error" id="nom-error" ></b> </label>
                        <input type="text" name="nombre" id="nom" placeholder="Nombres" maxlength="20">
                    </div>
                    <div class="campo">
                        <label for="ape">Apellidos: <b class="error" id="ape-error" ></b> </label>
                        <input type="text" name="apellido" id="ape" placeholder="Apellidos " maxlength="20">
                    </div>
                    <div class="campo">
                        <label for="dni">DNI:<b class="error" id="dni-error" ></b>  </label>
                        <input type="number" name="dni" id="dni" placeholder="DNI" maxlength="9">
                    </div>
                    <div class="campo">
                        <label for="nac">Fecha de Nacimiento: <b class="error" id="nac-error" ></b>  </label>
                        <input type="date" name="fecha_nac" id="nac" min="1923-01-01" >
                    </div>
                    <div class="campo sigPagina " >
                    <button >Siguiente</button>
                    </div>
                </div>

                <!-- PAGINA 2 -->

                <div class="pagina">
                    <h1>Ubicación</h1>
                    <div class="campo">
                        <label for="pais">Pais: <b class="error" id="pais-error" ></b> </label>
                        <select name="opcion_pais" id="pais">
                            <!-- <option value="-1" disabled selected >Selecciona una opción</option> -->
                            <option value="1" selected>Argentina</option>
                            <option value="0">opcion Pais</option>

                        </select>
                    </div>
                    <div class="campo">
                        <label for="prov">Provincia: <b class="error" id="prov-error" ></b> </label>
                        <select name="opcion_prov" id="prov">
                            <!-- <option value="-1" disabled selected >Selecciona una opción</option> -->
                            <option value="1" selected>Buenos Aires</option>
                            <option value="0">opcion Provincia</option>
                        </select>                    
                    </div>
                    <div class="campo">
                        <label for="ciud">Ciudad: <b class="error" id="ciud-error" ></b> </label>
                        <select name="opcion_ciudad" id="ciud">
                            <!-- <option value="-1" disabled selected >Selecciona una opción</option> -->
                            <option value="1" selected>Punta Alta</option>
                            <option value="2" >Bahia Blanca</option>
                            <option value="0">opcion Ciudad</option>
                        </select>                    
                    </div>
                    <div class="campo">
                        <label for="cod">Codigo Postal: <b class="error" id="cod-error" ></b>  </label>
                        <input type="number" name="codigo_postal" id="cod" placeholder="CP">
                    </div>
                    
                    <div class="campo botones" >
                        <button class="volver-pag1 volver" >Atrás</button>
                        <button class="adelante-pag3 adelante" >Siguiente</button>
                    </div>
                </div>
                <!-- PAGINA 3 -->

                <div class="pagina">
                    <h1>Domicilio</h1>
                    <div class="campo">
                        <label for="barrio">Barrio: <b class="error" id="barrio-error" ></b> </label>
                        <select name="opcion_barrio" id="barrio">
                            <option value="-1" disabled selected >Selecciona una opción</option>
                            <option value="0">opcion Barrio</option>
                        </select>                    
                    </div>
                    <div class="campo">
                        <label for="calle">Calle: <b class="error" id="calle-error" ></b> </label>
                        <select name="opcion_calle" id="calle">
                            <option value="-1" disabled selected >Selecciona una opción</option>
                            <option value="0">opcion Calle</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label for="nmr">Número: <b class="error" id="nmr-error" ></b> </label>
                        <input type="number" name="calle_numero" id="nmr" placeholder="Número del domicilio">                    
                    </div>
                    
                    <div class="campo">
                        <label for="dept">Departamento: <b class="error" id="dept-error" ></b> </label>
                        <input type="text" name="departamento" id="dept" placeholder="Depto">                    
                    </div>
                    
                    <div class="campo botones" >
                        <button class="volver-pag2 volver" >Atrás</button>
                        <button class="adelante-pag4 adelante" >Siguiente</button>
                    </div>
                </div>
                <!-- PAGINA 4 -->

                <div class="pagina">
                    <h1>Final</h1>

                    <div class="campo">
                        <label for="categoria">Categoria: <b class="error" id="categoria-error" ></b> </label>
                        <select name="opcion_categoria" id="categoria">
                            <option value="-1" disabled default >Selecciona una opción</option>
                            <option value="1">Administrador</option>
                            <option value="2">Socio</option>
                            <option value="3">Tesorero</option>
                            <option value="4">Vitalicio</option>

                            <option value="0">opcion Categoria</option>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="email">Email: <b class="error" id="email-error" ></b> </label>
                        <input type="email" name="email" id="email" placeholder="Dirección de correo">                    
                    </div>
                    <div class="campo">
                        <label for="socio">N° Socio:<b class="error" id="socio-error" ></b>  </label>
                        <input type="number" name="n_socio" id="socio" placeholder="Número de Socio" maxlength="9">
                    </div>
                    <div class="campo">
                        <label for="tel">Celular: <b class="error" id="tel-error" ></b> </label>
                        <input type="number" name="celular" id="tel" placeholder="(cod-Área - sin 0)( sin 15 xxxxxx) ">                    
                    </div>
                    
                    <div class="campo botones" >
                        <button class="volver-pag3 volver" >Atrás</button>
                        <button class="finalizar adelante" type="submit" name="agregar" onclick="terminar()" >Finalizar</button>

                    </div>
                    <div class="contenedor-mensajes">
                        <div class="loading">Cargando</div>
                        <div class="error-message">ERROR!</div>
                    <div class="sent-message"> Usuario cargado!</div>
                </div>
                </div>
            </form>
        </div>


        <?php
                        // carga del formulario en la BD

                     
                    // Verificar si se ha enviado el formulario
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        echo ("request_metod");
                        if (isset($_POST['agregar'])){
                            echo ("php agregarrequest_metod");
                        // Obtener los datos del formulario
                            $n_Socio=$_POST['n_socio'];
                            $fecha_Alta = $_POST['fecha_Alta'];

                            $nombre = $_POST['nombre'];
                            $apellido = $_POST['apellido'];
                            $dni = $_POST['dni'];
                            $fecha_nac = $_POST['fecha_nac'];

                            $opcion_pais=$_POST['opcion_pais'];
                            $opcion_prov=$_POST['opcion_prov'];
                            $opcion_ciudad=$_POST['opcion_ciudad'];
                            $codigo_postal=$_POST['codigo_postal'];

                            $opcion_barrio=$_POST['opcion_barrio'];
                            $opcion_calle=$_POST['opcion_calle'];
                            $calle_numero=$_POST['calle_numero'];
                            $departamento=$_POST['departamento'];

                            $opcion_categoria=$_POST['opcion_categoria'];
                            $email=$_POST['email'];
                            $celular=$_POST['celular'];

                            $pago=$_POST['pago'];

                            // Conexión a la base de datos SQLite
                            $db = new SQLite3('../db/club.db');
                            if (!$db) {            
                                die('Error al conectarse a la base de datos.');
                            }
                        
                            // Ejecutar la consulta SQL
                            $query = "INSERT INTO socio (nSocio,fechaAlta,categoria,nombre,apellido,dni,calle,numero,
                                barrio,dto,ciudad,cp,provincia,pais,fechaNac,tel,email,pago) VALUES 
                                ('$n_Socio','$fecha_Alta','$opcion_categoria','$nombre','$apellido',
                                '$dni','$opcion_calle','$calle_numero','$opcion_barrio','$departamento',
                                '$opcion_ciudad','$codigo_postal','$opcion_prov','$opcion_pais',
                                '$fecha_nac','$celular','$email','$pago')";
                            $resultado = $db->exec($query);

                            // Cerrar la conexión a la base de datos
                            $db->close();
                            
                            // Verificar si la consulta se ejecutó correctamente
                            if ($resultado) {
                                 // Redireccionar a una página de confirmación
                                // Redireccionar usando JavaScript
                                echo '<meta http-equiv="refresh" content="2;url=confirmacion.php">';
                                exit(); // Asegura que el script termine después de la redirección
                                echo "Se cargo el registro";
                                                                  
                            } else {
                                
                                echo "NO se Cargo el Registro !!";
                                                                             
                            } 
                        }
                    }
                ?>  
    </main>

    
    <script src="../js/alta.js?3" > </script>
</body>