<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>inicio</title>
  </head>
  <body>
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
