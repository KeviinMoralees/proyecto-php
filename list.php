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
        <ul>
            <li><a class="nav-link" href="index.php">Inicio</a></li>
            <li><a class="nav-link" href="contact.php">Formulario Contacto</a></li>
            <li><a class="nav-link" href="list.php">Lista Contacto</a></li>
        </ul>
    </nav>
</header>

<h2 class='list'>Lista de Contactos</h2>
<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Número de teléfono</th>
        <th>Email</th>
        <th>Acciones</th>
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
