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

  </body>
</html>
