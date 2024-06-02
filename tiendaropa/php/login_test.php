<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$email = $_POST['email'];
$pass = $_POST['pass'];



$sql = $conn->prepare("SELECT * FROM usuarios WHERE email = ? AND pass = ?");
$sql->bind_param('ss', $email, $pass);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) {
   
    header('location: ../index.html');
} else {
   
    echo "Email o contraseña incorrectos.";
}

$sql->close();
$conn->close();


?>