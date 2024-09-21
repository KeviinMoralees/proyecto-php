<?php
include 'create.php';
include 'read.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav class="navbar">
    <ul class="">
<li class="">
    <a class="nav-link" href="index.php">Home</a>
  </li>
      <li class="">
        <a class="nav-link" href="contact.php">Form Contact</a>
      </li>
      <li class="">
        <a class="nav-link" href="list.php">List Contact</a>
      </li>
    </ul>
    </nav>
</header>

<h2 class='list'>ListaContact</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Phone Number</th>
        <th>Mail</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user) { ?>
    <tr>
        <td><?php echo htmlspecialchars($user['name']); ?></td>
        <td><?php echo htmlspecialchars($user['surname']); ?></td>
        <td><?php echo htmlspecialchars($user['phone_number']); ?></td>
        <td><?php echo htmlspecialchars($user['email']); ?></td>
        <td>
            <a href="update.php?id=<?php echo urlencode($user['id']); ?>">Editar</a>
            <a href="delete.php?id=<?php echo urlencode($user['id']); ?>">Eliminar</a>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
