<?php 
session_start(); 
$db = mysqli_connect('localhost', 'root', '', 'Museum'); 

// Проверка успешного подключения к базе данных
if (!$db) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
}

// Используем подготовленные выражения для защиты от SQL-инъекций
$userbd_id = $_GET['id']; 

$sqlDelete = "DELETE FROM authors WHERE id_author = ?"; 
$stmt = mysqli_prepare($db, $sqlDelete);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, 'i', $userbd_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
} else {
    die("Ошибка подготовки SQL-запроса: " . mysqli_error($db));
}

mysqli_close($db);

header('Location: http://localhost:8000/php/BDauthors.php'); 
exit();
?>