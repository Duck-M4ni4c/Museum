<?php
// session_start();
// $db = mysqli_connect('localhost', 'root', '', 'Museum');

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = $_POST['loginEmail'];
//     $password = $_POST['loginPassword'];

//     if ($db == false) {
//         echo 'Ошибка подключения';
//         exit;
//     }

//     $query = "SELECT * FROM users WHERE email_user = '$email'";
//     $result = mysqli_query($db, $query);

//     if (mysqli_num_rows($result) > 0) {
//         $user = mysqli_fetch_assoc($result);

//         if (password_verify($password, $user['password_user'])) {
//             $_SESSION['name'] = $user['name_user'];
//             $_SESSION['email'] = $user['email_user'];

//             // Вместо редиректа, можно просто вывести сообщение об успешной авторизации
//           header('Location: http://localhost:8000/profile.html');
//           exit;
//         } else {
//             echo 'Неверный пароль';
//         }
//     } else {
//         echo 'Пользователь с такой почтой не найден';
//     }
// } else {
//     echo 'Не правильно заполнены поля';
//     exit;
// }

session_start(); 
$db = mysqli_connect('localhost', 'root', '', 'Museum'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $email = $_POST['loginEmail']; 
    $password = $_POST['loginPassword']; 

    if ($db == false) { 
        echo 'Ошибка подключения'; 
        exit; 
    } 

    $query = "SELECT * FROM users WHERE email_user = ?"; 
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) { 
        $user = $result->fetch_assoc(); 

        if (password_verify($password, $user['password_user'])) { 
            $_SESSION['email'] = $user['email_user']; 

            // Перенаправление на страницу профиля
            header('Location: http://localhost:8000/profile.php'); 
            exit; 
        } else { 
            echo 'Неверный пароль'; 
        } 
    } else { 
        echo 'Ошибка в почте или в пароле'; 
    } 
} else { 
    echo 'Не правильно заполнены поля'; 
    exit; 
}
?>
