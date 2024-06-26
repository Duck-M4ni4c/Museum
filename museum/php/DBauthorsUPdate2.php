<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );
$id = $_POST['id_user'];
$name = $_POST['passAdd'];
$email = $_POST['name_user'];
$phone = $_POST['email'];

$sqlInsert = "UPDATE authors SET surname_author = '$name', name_author = '$email', patronymic_author = '$phone' WHERE id_author=' $id' "; 

$result = mysqli_query($db, $sqlInsert);
header ('Location:http://localhost:8000/php/BDauthors.php');
