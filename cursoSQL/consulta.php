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

// Query to retrieve registered users
$query = "SELECT * FROM empleado";
$result = $conn->query($query);

// Check if there are any registered users
if ($result->num_rows > 0) {
    echo "<h2>Usuarios Registrados</h2>";
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Apellido 1</th><th>Apellido 2</th><th>Email</th><th>Login</th></tr>";
    // Loop through each row of the result set and display user data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['1apellido']."</td>";
        echo "<td>".$row['2apellido']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['login']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay usuarios registrados.";
}

// Close connection
$conn->close();
?>

