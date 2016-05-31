<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="estilos/estilosIndex.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="utf-8">
    <title>Inicio de Sesión</title>
  </head>
  <body>
<<<<<<< HEAD
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
=======
    <h1>Iniciar Sesión</h1>
        <form action="controlador/validar.php" method="post">
            <input
                type="text"
                name="txtNombre"
                placeholder="Escriba su nombre:"
                required="required"
            >
            <br>
            <input
                type="password"
                name="txtClave"
                placeholder="Escriba su clave:"
                required="required"
            >
            <br>
            <input
                type="submit"
                name="btnIniciar"
                value="Iniciar sesión"
            >
        </form>
        <div id="subTitulos">
          si no esta registrado entrar
        </div>
        <a href="registro.php">aqui</a>
>>>>>>> d5bbb4421f30332c6beafc0188bf62031226a4a4

        <?php
        if(isset($_GET["m"])){
    $m = $_GET["m"];

    switch($m) {
        case 1:
            echo "No debe entrar a validar!";
            break;
        case 2:
            echo "Debe iniciar sesión para ver el menu";
            break;
        case 3:
            echo "Datos erróneos";
            break;

                  }
              }
         ?>

  </body>
</html>
