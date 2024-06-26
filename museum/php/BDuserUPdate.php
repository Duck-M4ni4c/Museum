<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );
$userbd_id = $_GET['id'];

$userbd = mysqli_query($db, "SELECT * FROM users  WHERE `id_user` = '$userbd_id'");
$userbd = mysqli_fetch_assoc($userbd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Добавить нового пользователя</h3>
    <form action="DBuserUPdate2.php" method="post">

        <textarea type="hidden" name="id_user" ><?= $userbd['id_user'] ?></textarea>
        <p>Пароль</p>
        <textarea name="passAdd" ><?= $userbd['password_user'] ?></textarea>
        <p>Имя</p>
        <textarea name="name_user"><?= $userbd['name_user'] ?></textarea>
        <p>Почта</p>
        <textarea name="email"><?= $userbd['email_user'] ?></textarea>
        <p>Телефон</p>
        <textarea name="phone"><?= $userbd['phone_user'] ?></textarea>
        <p>Роль</p>
        <textarea name="role"><?= $userbd['id_role'] ?></textarea>
        <br/>
        <button type="submit">Применить изменения</button>
    </form>

</body>
</html>