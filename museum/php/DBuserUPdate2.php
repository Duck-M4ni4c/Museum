<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );
$id = $_POST['id_user'];
$name = $_POST['name_user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['passAdd'];
$role = $_POST['role'];

$password_hashed = password_hash($password, PASSWORD_BCRYPT);

$sqlInsert = "UPDATE users SET name_user = '$name', email_user = '$email', phone_user = '$phone', password_user = '$password_hashed', id_role ='$role' WHERE id_user = '$id'"; 

$result = mysqli_query($db, $sqlInsert);
header ('Location:http://localhost:8000/php/BDuser.php');
