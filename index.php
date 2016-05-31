<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="estilos/estilosIndex.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="utf-8">
    <title>Inicio de Sesión</title>
  </head>
  <body>
  <div class="banner">
    <img src="img/banner2.jpg">    
  </div>
    
    
  <div class="panelForm">
    <div class="divForm">
      <h2>Iniciar Sesión</h2>
      <form action="controlador/validar.php" method="post">
          <legend>Hola</legend>
          <input
              type="email"
              name="txtCorreo"
              placeholder="Escriba su correo:"
              required="required"
          >
          <br>
          <input
              type="password"
              name="txtPass"
              placeholder="Escriba su pass:"
              required="required"
          >
          <br>
          <input class="boton" 
              type="submit"
              name="btnIniciar"
              value="Iniciar sesión"
          >
      </form>
      <div id="subTitulos">
        ¿Aún no creas tu cuenta?
      </div>
      <a href="registro.php">Registrarse</a>
    </div>
  </div>

  </body>
</html>
