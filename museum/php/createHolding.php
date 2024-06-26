<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idex = $_POST['idex'];
    $nach = $_POST['nach'];
    $kon = $_POST['kon'];

    $sqlInsert = "INSERT INTO holding_an_exhibition SET id_exhibition = '$idex', start_datetime = '$nach', end_datetime = '$kon' "; 

    $result = mysqli_query($db, $sqlInsert);
    header ('Location:http://localhost:8000/php/BDholding.php');
}