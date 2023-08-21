<?php
$servername = "nombre_del_servidor";
$username = "nombre_de_usuario";
$password = "contraseña";
$dbname = "firma_registro";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$carnet = $_POST['carnet'];
$medida = $_POST['medida'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "INSERT INTO registros (nombre, apellido, celular, correo, carnet, medida) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $nombre, $apellido, $celular, $correo, $carnet, $medida);

if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error en el registro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>