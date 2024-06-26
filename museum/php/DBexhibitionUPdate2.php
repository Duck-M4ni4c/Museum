<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );
$id = $_POST['id_user'];
$name = $_POST['passAdd'];
$email = $_POST['name_user'];

$sqlInsert = "UPDATE exhibitions SET name_exhibition = '$name', description_exhibition = '$email' WHERE id_exhibition = '$id'"; 

$result = mysqli_query($db, $sqlInsert);
header ('Location:http://localhost:8000/php/BDexhibition.php');
