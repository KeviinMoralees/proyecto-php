<?php
// Incluir la conexión
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $authorize = isset($_POST['authorize']) ? 1 : 0; // Convertir checkbox en valor 1 o 0

    // Insertar datos en la base de datos
    $sql = "INSERT INTO formulario (name, surname, phone_number, email, authorize) 
            VALUES (:name, :surname, :phone_number, :email, :authorize)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':surname' => $surname,
        ':phone_number' => $phone_number,
        ':email' => $email,
        ':authorize' => $authorize
    ]);

    // Redirigir a la página de lista después de la inserción
    header("Location: list.php");
    exit(); // Asegúrate de que el script se detiene después de redirigir
}
?>