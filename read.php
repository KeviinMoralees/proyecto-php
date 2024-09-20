<?php
// Incluir la conexión
include 'db.php'; // Asegúrate de que 'db.php' contiene la conexión PDO

// Consultar los datos de la base de datos
$sql = "SELECT id, name, surname, phone_number, email, authorize FROM formulario";
$stmt = $conn->query($sql);

// Obtener todos los resultados
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Cerrar conexión
$conn = null;
?>
