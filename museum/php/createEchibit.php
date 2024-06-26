<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $God = $_POST['god'];
    $type = $_POST['type'];
    $zalid = $_POST['zalid'];
    $avtor = $_POST['avtorid'];
   
    $sqlInsert = "INSERT INTO exhibits SET name_exhibit = '$name', publication_exhibit = '$God', id_type_exhibit = '$type', id_room = '$zalid', id_author ='$avtor' "; 

    $result = mysqli_query($db, $sqlInsert);
    header ('Location:http://localhost:8000/php/BDexhibit.php');
}