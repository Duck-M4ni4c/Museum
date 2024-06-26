<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );
$id = $_POST['id_exhibit'];
$name = $_POST['name'];
$publication = $_POST['publication'];
$type = $_POST['type'];
$room = $_POST['room'];
$avtor = $_POST['avtor'];

$sqlInsert = "UPDATE exhibits SET name_exhibit = '$name', publication_exhibit = '$publication', id_type_exhibit = '$type', id_room = '$room', id_author ='$avtor' WHERE id_exhibit = '$id'"; 

$result = mysqli_query($db, $sqlInsert);
header ('Location:http://localhost:8000/php/BDexhibit.php');
