<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'Museum');

if ($db == false) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Проверка, если почта пользователя установлена в сессии
if (!isset($_SESSION['email'])) {
    echo 'Вы не авторизованы. Пожалуйста, войдите в систему.';
    exit;
}

// Извлечение почты пользователя из сессии
$user_email = $_SESSION['email'];

// SQL-запрос для получения имени пользователя по его почте
$query = "SELECT name_user FROM users WHERE email_user = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("s", $user_email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $user_name = $user['name_user'];
} else {
    echo 'Пользователь не найден.';
    exit;
}

$stmt->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="style/style.css" rel="stylesheet">
    <link href="style/owl.carousel.css" rel="stylesheet">
    <link href="font/fonts.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <style>
        th,
        td {
            padding: 10px;
        }

        th {
            background: #606060;
            color: #fff;
        }

        td {
            background: #b5b5b5;
        }
    </style>
</head>

<body>
    <div id="profile-form" class="profile-form">
        <div class="profile_block dflex">
            <div class="profile_img"><img src="img/profile.png"></div>
            <div class="profile_name_block">
                <div class="profile_name">ШАлом, <?php echo htmlspecialchars($user_name); ?><a href="/"><img src="img/Settings.png"></a></div>
                <div class="profile_city">Г. Москва</div>
            </div>
        </div>
        <div class="profile_info dflex">

            <div class="links-admin">
                <a class="links-admin__btn" href="php/BDuser.php">Таблица пользователей</a><br/>
                <a class="links-admin__btn" href="php/BDauthors.php">Таблица авторы</a><br/>
                <a class="links-admin__btn" href="php/BDexhibition.php">Таблица экскурсии</a><br/>
                <a class="links-admin__btn" href="php/BDexhibit.php">Таблица экспонаты</a><br/>
                <a class="links-admin__btn" href="php/BDholding.php">Таблица запланированные экскурсии</a><br/>
                <a class="links-admin__btn" href="php/Views.php">Представления</a><br/>
                <a class="links-admin__btn" href="index.php">Выйти</a>
            </div>
        </div>
    </div>
</body>

</html>