<?php
include_once './connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];
    $pais = $_POST['pais'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Verificar si el correo electrónico ya existe en la base de datos
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if ($result) {
        if ($result->num_rows > 0) {
            echo "Email Address Already Exists !";
        } else {
            // Insertar el nuevo registro sin incluir la columna 'id'
            $insertQuery = "INSERT INTO users (firstName, lastName, edad, pais, email, password)
                            VALUES ('$firstName', '$lastName','$edad','$pais', '$email', '$hashedPassword')";
            if ($conn->query($insertQuery) === TRUE) {
                echo "Registro exitoso.";
                header("location: login.php");
                exit();
            } else {
                echo "Error en la inserción: " . $conn->error;
            }
        }
    } else {
        echo "Error en la consulta: " . $conn->error;
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role']; // Almacena el rol del usuario en la sesión
            if ($_SESSION['role'] == 'Admin') {
                header("Location: dashboard.php"); // Redirige a la página de administrador si el usuario es un administrador
            } else {
                header("Location: inicio.php"); // Redirige a la página principal si el usuario no es un administrador
            }
            exit();
        } else {
            echo "Incorrect Password";
        }
    } else {
        echo "Email Not Found";
    }
}
