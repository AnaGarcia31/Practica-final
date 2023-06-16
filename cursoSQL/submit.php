<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursoSQL";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Conexión errónea: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO empleado (nombre, 1apellido, 2apellido, email, login, contraseña) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $apellido1, $apellido2, $email, $login, $contraseña);

// Set parameters
$name = $_POST["name"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$email = $_POST["email"];
$login = $_POST["login"];
$contraseña = $_POST["password"];

$contraseña = $_POST["password"];
$min_length = 4; // Longitud mínima permitida para la contraseña
$max_length = 8; // Longitud máxima permitida para la contraseña

$length = strlen($contraseña);

if ($length < $min_length || $length > $max_length) {
    echo "La contraseña debe tener entre $min_length y $max_length caracteres.";
    // Aquí puedes mostrar un mensaje de error o realizar otras acciones, como redirigir a una página de registro nuevamente.
    echo '<br><a href="index.php">Volver al formulario</a>';
} else {
    // La contraseña cumple con la longitud requerida, continuar con la validación adicional

    $email = $_POST['email'];

    // Realizar la consulta a la base de datos para verificar si el correo ya está registrado
    $query = "SELECT COUNT(*) AS count FROM empleado WHERE email = ?";
    $stmt_check = $conn->prepare($query);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $result = $stmt_check->get_result();
    $row = $result->fetch_assoc();
    $count = $row['count'];

    $stmt_check->close(); // Cerrar la declaración preparada después de obtener el resultado

    if ($count > 0) {
        echo "El correo electrónico ya está registrado.";
        // Aquí puedes mostrar un mensaje de error o realizar otras acciones
        echo '<br><a href="index.php">Volver al formulario</a>';
    } else {
        // El correo electrónico no está registrado, continuar con el proceso del formulario y realizar el registro

        // Verificar si la contraseña contiene al menos un número
        if (!preg_match("/\d/", $contraseña)) {
            echo "La contraseña debe contener al menos un número.";
            echo '<br><a href="index.php">Volver al formulario</a>';
        } else {
            // La contraseña cumple con todos los requisitos, ejecutar el registro en la base de datos
            $stmt->execute();
            echo "Se ha registrado con éxito.";
            echo '<br><a href="consulta.php">Consultar usuarios registrados</a>';
        }
    }
}

// Close statement
$stmt->close();

// Close connection
$conn->close();
?>



