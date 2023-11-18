<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="formulario1 container">

<form method="post" action="">
    <h2>Iniciar Sesion</h2>
    <h4><a href="index.php">Inicio</a></h4>

    <div class="input-group">
        
        <div class="input-container">
            <input type="email" name="email" placeholder="email">
            <i class="fa-solid fa-envelope"></i>
        </div>

        <div class="input-container">
            <input type="password" name="password" placeholder="contraseña">
            <i class="fa-solid fa-eye"></i>
        </div>
        <input type="submit" name="iniciar" class="btn" onclick="myFunction()">
    </div>
</form>
</section>

<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['usuario'] = $row['id'];
            header("Location: inicio.php");
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}

$conn->close();
?>
    
</body>
</html>