<?php
include 'update.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambios</title>
    <link rel="stylesheet" href='style.css'>
</head>
<header>
<nav class="navbar">
<ul class="">
<li class="">
    <a class="nav-link" href="index.php">Inicio</a>
  </li>
      <li class="">
        <a class="nav-link" href="contact.php">Formulario Contacto</a>
      </li>
      <li class="">
        <a class="nav-link" href="list.php">Lista Contacto</a>
      </li>
    </ul>
</nav> 
</header>
<body>
    <div>
    <form method="POST" action="">
    <h2>Actualizar Informacion<h2>
    <h3>Nombre</h3>
    <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
    <h3>Apellido</h3>
    <input type="text" name="surname" value="<?php echo $user['surname']; ?>" required><br>
    <h3>Numero de Telefono</h3>
    <input type="text" name="phone_number" value="<?php echo $user['phone_number']; ?>" required><br>
    <h3>Correo Electronico</h3>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
    <button type="submit"  >Actualizar</button>
</form>
    <div>

</body>
</html>