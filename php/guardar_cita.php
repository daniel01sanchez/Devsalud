<?php
include "conexion.php";

$nombre = $_POST['nombre'];
$especialidad = $_POST['especialidad'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO citas (nombre, especialidad, fecha, hora, descripcion)
        VALUES ('$nombre', '$especialidad', '$fecha', '$hora', '$descripcion')";

if ($conexion->query($sql) === TRUE) {
    echo "<script>
            alert('Cita guardada correctamente');
            window.location.href = 'index.php';
            </script>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>
