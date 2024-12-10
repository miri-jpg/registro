<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GimnasioOnline";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $direccion = $_POST['direccion'];

    $sql = "INSERT INTO Miembros (nombre, apellido, email, telefono, fecha_nacimiento, direccion)
            VALUES ('$nombre', '$apellido', '$email', '$telefono', '$fecha_nacimiento', '$direccion')";

    if ($conn->query($sql) === TRUE) {
        echo "Miembro registrado exitosamente!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
