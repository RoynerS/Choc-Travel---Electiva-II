<?php
include 'connect.php';

$query = mysqli_query($conn, "SELECT COUNT(*) AS total_colombia FROM `users` WHERE `pais` = 'Colombia'");

// Obtener el resultado
$row = mysqli_fetch_assoc($query);
$total_colombia = $row['total_colombia'];

$query = mysqli_query($conn, "SELECT COUNT(*) AS total_españa FROM `users` WHERE `pais` = 'España'");

// Obtener el resultado
$row = mysqli_fetch_assoc($query);
$total_españa = $row['total_españa'];

$query = mysqli_query($conn, "SELECT COUNT(*) AS total_argentina FROM `users` WHERE `pais` = 'Argentina'");

// Obtener el resultado
$row = mysqli_fetch_assoc($query);
$total_argentina = $row['total_argentina'];



// Consulta para contar usuarios entre 0-17 años
$query_0_17 = mysqli_query($conn, "SELECT COUNT(*) AS total_0_17 FROM `users` WHERE `edad` BETWEEN 0 AND 17");
$row_0_17 = mysqli_fetch_assoc($query_0_17);
$total_0_17 = $row_0_17['total_0_17'];

// Consulta para contar usuarios entre 18-25 años
$query_18_25 = mysqli_query($conn, "SELECT COUNT(*) AS total_18_25 FROM `users` WHERE `edad` BETWEEN 18 AND 25");
$row_18_25 = mysqli_fetch_assoc($query_18_25);
$total_18_25 = $row_18_25['total_18_25'];

$query_26_50 = mysqli_query($conn, "SELECT COUNT(*) AS total_26_50 FROM `users` WHERE `edad` BETWEEN 26 AND 50");
$row_26_50 = mysqli_fetch_assoc($query_26_50);
$total_26_50 = $row_26_50['total_26_50'];

$query_51_75 = mysqli_query($conn, "SELECT COUNT(*) AS total_51_75 FROM `users` WHERE `edad` BETWEEN 51 AND 71");
$row_51_75 = mysqli_fetch_assoc($query_51_75);
$total_51_75 = $row_51_75['total_51_75'];
// Consulta SQL para obtener el número total de registros en la tabla `users`

$query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM `users`");

// Obtener el número total de registros
$row = mysqli_fetch_assoc($query);
$total_registered = $row['total'];

// Ejecutar la consulta
$query = mysqli_query($conn, "SELECT COUNT(*) AS total_admin FROM `users` WHERE `role` = 'admin'");

// Obtener el resultado
$row = mysqli_fetch_assoc($query);
$total_admin = $row['total_admin'];
