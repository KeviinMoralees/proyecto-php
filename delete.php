<?php
// Incluir la conexión
include 'db.php';

$id = $_GET['id'];

// Eliminar registro
$sql = "DELETE FROM formulario WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);

echo "Registro eliminado correctamente.";
header("Location: index.php")
?>
