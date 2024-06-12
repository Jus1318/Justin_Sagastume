<?php
// Iniciar la sesión para almacenar el directorio
session_start();

// Verificar si ya existe un directorio en la sesión, si no, inicializarlo
if (!isset($_SESSION['directorio'])) {
    $_SESSION['directorio'] = array();
}

// Si el formulario ha sido enviado, agregar el nuevo contacto al directorio
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevoContacto = array(
        "identificacion" => $_POST['identificacion'],
        "nombre" => $_POST['nombre'],
        "telefono" => $_POST['telefono'],
        "email" => $_POST['email']
    );
    $_SESSION['directorio'][] = $nuevoContacto;
}

// Obtener el directorio de la sesión
$directorio = $_SESSION['directorio'];

// Imprimir el arreglo en una tabla
if (!empty($directorio)) {
    echo "<table>";
    echo "<tr><th>Identificación</th><th>Nombre</th><th>Teléfono</th><th>Correo Electrónico</th></tr>";
    foreach ($directorio as $persona) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($persona["identificacion"]) . "</td>";
        echo "<td>" . htmlspecialchars($persona["nombre"]) . "</td>";
        echo "<td>" . htmlspecialchars($persona["telefono"]) . "</td>";
        echo "<td>" . htmlspecialchars($persona["email"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No hay contactos en el directorio.</p>";
}
?>