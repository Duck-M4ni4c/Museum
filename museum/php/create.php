<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name_user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['passAdd'];
    $role = $_POST['role'];
   
    if (empty($name) || empty($email) || empty($phone) || empty($password) || empty($role)) {
        echo 'Заполните все поля';
        exit;
    }
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Неправильный формат электронной почты';
        exit;
    }

    $UserMail = mysqli_query ($db, "SELECT email_user from users where email_user = '$email' ");

    if (preg_match('/[\'",\*,\[\],\{\}]/', $password)) {
        echo "<p>Недопустимые символы в пароле</p>";
        exit;
    }
    
    if (mysqli_num_rows ($UserMail) > 0){ 
        echo "Такая почта уже занята";
        exit; 
    } 

    $password_hashed = password_hash($password, PASSWORD_BCRYPT);

    $sqlInsert = "INSERT INTO users SET name_user = '$name', email_user = '$email', phone_user = '$phone', password_user = '$password_hashed', id_role ='$role' "; 

    $result = mysqli_query($db, $sqlInsert);
    header ('Location:http://localhost:8000/php/BDuser.php');
}