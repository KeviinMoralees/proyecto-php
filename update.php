<?php
// Incluir la conexión
include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $authorize = $_POST['authorize'];

    // Actualizar datos
    $sql = "UPDATE formulario SET name=:name, surname=:surname, phone_number=:phone_number, email=:email, authorize=:authorize WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':id' => $id,
        ':name' => $name,
        ':surname' => $surname,
        ':phone_number' => $phone_number,
        ':email' => $email,
        ':authorize' => $authorize
    ]);

    echo "Registro actualizado correctamente.";
    header("Location: list.php");
}

// Obtener datos actuales
$sql = "SELECT * FROM formulario WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>
