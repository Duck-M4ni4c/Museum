<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );
$id = $_POST['id_holding'];
$idex = $_POST['idex'];
$strat = $_POST['start'];
$phone = $_POST['end'];

$sqlInsert = "UPDATE holding_an_exhibition SET  id_holding_an_exhibition = '$id', id_exhibition = '$idex', start_datetime = '$strat', end_datetime = '$phone' WHERE id_holding_an_exhibition = '$id'"; 

$result = mysqli_query($db, $sqlInsert);
header ('Location:http://localhost:8000/php/BDholding.php');
