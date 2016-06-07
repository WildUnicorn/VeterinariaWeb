<!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="estilos/estilosIndex.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="utf-8">
    <title>Inicio de Sesión</title>
  </head>
  <body>
    <div class="panelForm">
      <div class="divForm">
        <h3>Iniciar Sesión</h3>
        <form action="controlador/validar.php" method="post">
          <legend>Nombre</legend>
            <input class="texto"
              type="text"
              name="txtNombre"
              placeholder="Escriba su nombre:"
              required="required"
            >
            <br>
            <legend>Contraseña</legend>
            <input class="texto"
                type="password"
                name="txtClave"
                placeholder="Escriba su clave:"
                required="required"
            >
            <br>
            <input style="cursor:pointer;" class="boton"
                type="submit"
                name="btnIniciar"
                value="Iniciar Sesión"
            >
        </form>



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
        <legend class="aunNO">¿Aun no creas tu cuenta?</legend>
        <a href="registro.php">Registrarse</a>
      </div>
    </div>
    <h1>Clinica Vets</h1>
  </body>
</html>
