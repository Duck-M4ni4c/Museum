<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );
$userbd_id = $_GET['id'];

$userbd = mysqli_query($db, "SELECT * FROM authors  WHERE `id_author` = '$userbd_id'");
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
    <form action="DBauthorsUPdate2.php" method="post">

        <textarea type="hidden" name="id_user" ><?= $userbd['id_author'] ?></textarea>
        <p>Фамилия</p>
        <textarea name="passAdd" ><?= $userbd['surname_author'] ?></textarea>
        <p>Имя</p>
        <textarea name="name_user"><?= $userbd['name_author'] ?></textarea>
        <p>Отчество</p>
        <textarea name="email"><?= $userbd['patronymic_author'] ?></textarea>
    
        <br/>
        <button type="submit">Применить изменения</button>
    </form>

</body>
</html>