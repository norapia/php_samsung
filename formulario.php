<!DOCTYPE html>
<html>
<head>
  <title>Formulario</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>

  <h2>Formulario de registro</h2>
  <div class="group"> 
    <form action="procesar.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" class="form-input" required><br><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" class="form-input" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" class="form-input"><br><br>

        <input class="form-btn" name="submit" type="submit" value="Suscribirse">

    </form>
  </div>
</body>
</html>