<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['passAdd'];
    $email = $_POST['name_user'];
    $phone = $_POST['email'];
   
    $sqlInsert = "INSERT INTO authors SET surname_author = '$name', name_author = '$email', patronymic_author = '$phone' "; 

    $result = mysqli_query($db, $sqlInsert);
    header ('Location:http://localhost:8000/php/BDauthors.php');
}