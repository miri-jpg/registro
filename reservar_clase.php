<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GimnasioOnline";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$clase_id = $_GET['clase_id'];
$id_miembro = 1; 
$sql = "INSERT INTO Reservas (id_miembro, id_clase, estado_reserva)
        VALUES ('$id_miembro', '$clase_id', 'Reservado')";

if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada exitosamente!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
