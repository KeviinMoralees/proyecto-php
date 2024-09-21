<?php
// Incluir la conexión
include 'create.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href='style.css'>
</head>
<header>
<nav class="navbar">
<ul class="">
<li class="">
    <a class="nav-link" href="index.php">Home</a>
  </li>
      <li class="">
        <a class="nav-link" href="contact.php">Contact Form</a>
      </li>
      <li class="">
        <a class="nav-link" href="list.php">Contact List</a>
      </li>
    </ul>
</nav> 
</header>
<body>
    <div>
        <form method="POST" action="">
        <h2>Formulario de Contacto<h2>
        <h3>Name</h3>  
        <input type="text" name="name" placeholder="Nombre" required><br>
        <h3>Surname</h3>
        <input type="text" name="surname" placeholder="Apellido" required><br>
        <h3>Telephone number</h3>
        <input type="text" name="phone_number" placeholder="Número de teléfono" required><br>
        <h3>Email</h3>
        <input type="email" name="email" placeholder="Correo electrónico" required><br>
        <input type="checkbox" name="authorize" value="1" required>Accept terms and conditions<br>
        <button type="submit">Send</button>
        </form>
    <div>

</body>
</html>
