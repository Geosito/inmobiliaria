<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Formulario de contacto</title>
</head>
<body>
  <header>
        <div class="container">
            
            <p class="logo">
                
                <img src="./img/logocompletopng.png" style="max-width: 170px;">
            </p>
            <nav>
                <a href="indexx.html">Inicio</a>
                <a href="tienda.html">Inmuebles</a>
                <a href="contacto.html">Contacto</a>
                <a href="equipo.html">Nuestro Equipo</a>
                <a href="login.html" style="color: rgb(200, 34, 34);">Usuario</a>

            </nav>
        </div>
    </header>

  <div class="container">
    <form method ="post">
      <h2>Formulario de contacto</h2>
      <?php
        include ("registro.php");
        include ("conexion.php");
      ?>

      <label for="nombre">Nombre completo:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Nombre completo">

      <label for="telefono">Gmail:</label>
      <input type="text" id="telefono" name="correo" placeholder="Correo Electronico">

      <label for="motivo">Contrasena:</label>
      <input type="text" id="motivo" name="contrasena" placeholder="Contraseña">

      <input type="submit" id="boton" name="bb" value="Enviar">
    </form>
  </div>

 

  <script src="script.js"></script>
</body>
</html>

 