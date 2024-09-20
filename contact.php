<?php
// Incluir la conexión
include 'create.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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
        <h2>Formulario de Contacto<h2>
        <h3>Nombre</h3>  
        <input type="text" name="name" placeholder="Nombre" required><br>
        <h3>Apellido</h3>
        <input type="text" name="surname" placeholder="Apellido" required><br>
        <h3>Numero de Telefono</h3>
        <input type="text" name="phone_number" placeholder="Número de teléfono" required><br>
        <h3>Correo Electronico</h3>
        <input type="email" name="email" placeholder="Correo electrónico" required><br>
        <input type="checkbox" name="authorize" value="1" required> Acepto los terminos y Condiciones<br>
        <button type="submit">Enviar</button>
        </form>
    <div>

</body>
</html>
