  <?php include("../includes/head2.php") ?>
      <head>
        <link href="../css/socio.css?3" rel="stylesheet">
        <link href="../css/botones.css?4" rel="stylesheet">
        <link rel="stylesheet" href="../css/socio.css">

      </head>
  <?php include("../includes/header2.php") ?>
<body>

  <nav>            
    <ul >
      <li >
        <a  href="alta.php">Agregar</a>
      </li>
      <li >
        <a  href="#">Imprimir</a>
      </li>
      <li >
        <form method="POST" action="" class="formBusca">
                  
          
          <input type="text" name="textoBusqueda" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Busqueda">
          <button class="botonBusca" type="submit" name="busqueda" id="button-addon1"></button>
        </form>
      </li>
      
      <li >
        <a  href="#"></a>
      </li>
      <li >
        <a  href="../menu/menu.php">Menu</a>
      </li>
    </ul>
  </nav>
  <main class="main-socio">
      <h1>Socios</h1>

      <table>
        <thead>
          <tr>
            <th>ID SOCIO</th>
            <th>DNI</th>
            <th>NOMBRE y APELLIDO</th>
            <th>CATEGORIA</th>
                                      
          </tr>
        </thead>
        <tbody>

          <!-- funcion en php de la obtencion de listado de socios -->
          <?php
              // Conexión a la base de datos SQLite
              $db = new SQLite3('../db/club.db');
              
              if (!$db) {
                  die('Error al conectarse a la base de datos.');
              }
              
              // Consulta SQL para obtener los registros
              $query = "SELECT * FROM socio";

              // -------------------------------------------------------------------------------------
              // si fue pulsada la opcion de BUSQUEDA se activara este filtro
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $busca = $_POST['textoBusqueda'];
                    
                
                    // Realizar la consulta solo si se han proporcionado los valores de filtro
                    if (!empty($busca)) {
                        $query = "SELECT * FROM socio WHERE nSocio LIKE '%$busca%' OR nombre LIKE '%$busca%' OR apellido LIKE '%$busca%'OR dni LIKE '%$busca%'";
                                    
                    }
                }
                //--------------------------------------------------------------------------------
                    // Ejecutar la consulta y mostrar los resultados
                    $result = $db->query($query);
              

                    $resultado = $db->query($query);

              
              
              // Verificar si se encontraron registros
              if ($resultado->numColumns() > 0) {
                                   
                  // Recorrer los registros y mostrarlos en la tabla
                  while ($row = $resultado->fetchArray(SQLITE3_ASSOC)) {
                      $nSocio=$row['nSocio'];
                      $dni = $row['dni'];
                      $nombre = $row['nombre'];
                      $apellido = $row['apellido'];
                      $nomYape = $nombre . ' ' . $apellido;
                      $categoria = $row['categoria'];
                      if ($categoria==1){
                        $textoCategoria='Administrador';
                      }elseif($categoria==2){
                        $textoCategoria='Socio';
                      }elseif($categoria==3){
                        $textoCategoria='Tesorero';
                      }
                      elseif($categoria==4){
                        $textoCategoria='Vitalicio';
                      }

                    //   $estado = $row['estado'];
                    //   if ($estado==1){
                    //     $textoEstado='Habilitado';
                    //   }elseif($estado==2){
                    //     $textoEstado='Desabilitado';
                    //   }elseif($estado==3){
                    //     $textoEstado='Temporal';
                    //   }

                   ?>

                   <!-- Funcion para ventana emergente de Perfil de Socio -->



          <tr>
            <td><?php echo $nSocio; ?></td>
            <td><?php echo $dni; ?></td>
            <td><?php echo $nomYape; ?></td>
            <td><?php echo $textoCategoria; ?></td>
            <!-- <td><?php echo $textoEstado; ?></td> -->

            <td class=boton>  
              <form id=vista-socio method="POST"  action="./vista_socio/perfil_socio.php" target="popup" onsubmit="vista()">
                      <!-- guia para saber a que dni pertenece el boton -->
                  <input type="hidden" name="nSocio" value="<?php echo $nSocio; ?>">
                  <button class=botonVer type="submit" title="Descripcion" ></button>
              </form>
            </td>

            <td class=boton>
              <form id=modificar-socio method="POST" action="./vista_socio/perfil_socio.php" target="popup" onsubmit="modifica()">
                  
                  <input type="hidden" name="nSocio" value="<?php echo $nSocio; ?>">
                  <button  class=botonEditar type="submit" title="Modificar" ></button>
              </form>
            </td>

            <td class=boton>
              <form id=eliminar-socio method="POST" action="eliminarSocio.php" target="popup" onsubmit="elimina()">
                      
                  <input type="hidden" name="nSocio" value="<?php echo $nSocio; ?>">
                  <button  class=botonElimina type="submit" title="Eliminar" ></button>
              </form>
            </td>

                    
          </tr>

            <?php
            }
            ?>
        </tbody>
      </table>
                    
                  
      <?php
                  
        } else {
            echo 'No se encontraron registros.';
        }
        
        // Cerrar la conexión a la base de datos
        $db->close();
      ?>
  </main>
  <script src="../js/socio.js"> </script>
</body>
