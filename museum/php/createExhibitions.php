<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['passAdd'];
    $email = $_POST['name_user'];
    $puk = 1 ;

    $sqlInsert = "INSERT INTO exhibitions SET name_exhibition = '$email', description_exhibition = '$name' "; 

    $result = mysqli_query($db, $sqlInsert);
    header ('Location:http://localhost:8000/php/BDexhibition.php');
}