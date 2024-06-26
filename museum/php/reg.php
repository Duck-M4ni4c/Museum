<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_POST['reg-name'];
$email = $_POST['reg-email'];
$phone = $_POST['reg-phone'];
$password = $_POST['reg-password'];
$passwordConfirm = $_POST['reg-password-again'];

$_SESSION ['Name'] = $name;

if ($db == false){
    echo 'Ошибка подключения';
    exit;
}

$UserMail = mysqli_query ($db, "SELECT email_user from users where email_user = '$email' ");

if (empty($name) || empty($email) || empty($phone) || empty($password) || empty($passwordConfirm)) {
    echo 'Заполните все поля';
    exit;
}
// $phone = preg_replace('/\D/', '', $phone);
// Проверка на правильное заполнение почты
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Неправильный формат электронной почты';
    exit;
}

// Проверка на запрещенные символы в пароле
if (preg_match('/[\'",\*,\[\],\{\}]/', $password)) {
    echo "<p>Недопустимые символы в пароле</p>";
    exit;
}

if (mysqli_num_rows ($UserMail) > 0){ 
    echo "Такая почта уже занята";
    exit; 
} 


if ($password == $passwordConfirm && strlen ($password) > 6 ){ 

    $password_hashed = password_hash($password, PASSWORD_BCRYPT);

    $sqlInsert = "INSERT INTO users SET name_user = '$name', email_user = '$email', phone_user = '$phone', password_user = '$password_hashed', id_role ='2' "; 

    $result = mysqli_query($db, $sqlInsert);
    header ('Location:http://localhost:8000/index.php');
}
else{
    echo "Пароль меньше 6 символов или не совпадают.";
}
}

else{ 
    echo 'Не правильно заполнены поля'; 
    exit; 
} 
?>