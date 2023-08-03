
<?php include("./includes/head.php") ?>
<?php include("./includes/ingreso.php") ?>
<head>
<link href="./css/login.css" rel="stylesheet">
</head>
<body>
  <?php include("./includes/header.php") ?>
  

  <main>
    <h1>Ingreso</h1>
    <img src="./img/escudo.png" alt="Imagen no encontrada">
    
    <form  method="POST" action="">
      
      <label for="dni">DNI:</label>
      <input type="number" class="form-control" id="dni" placeholder="Ingrese el DNI" name="dni" required>
              
      <label for="pwd">Contraseña:</label>
      <input type="password" class="form-control" id="contrasenia" placeholder="Ingrese Contraseña" name="contrasenia" required>
              
      <label class="form-check-label">
      <input  type="checkbox" name="remember" > Recordar Usuario
      </label>
      
      <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
    
  </main>

    <?php include("./includes/footer.php") ?>