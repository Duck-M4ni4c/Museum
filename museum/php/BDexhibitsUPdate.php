<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );
$userbd_id = $_GET['id'];

$userbd = mysqli_query($db, "SELECT * FROM exhibits  WHERE `id_exhibit` = '$userbd_id'");
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
<h3>Добавить новый экспонат</h3>
    <form action="DBexhibitUPdate2.php" method="post">

        <textarea type="hidden" name="id_exhibit" ><?= $userbd['id_exhibit'] ?></textarea>
        <p>Название</p>
        <textarea name="name" ><?= $userbd['name_exhibit'] ?></textarea>
        <p>Год публикации</p>
        <textarea name="publication"><?= $userbd['publication_exhibit'] ?></textarea>
        <p>Id типа экспоната</p>
        <textarea name="type"><?= $userbd['id_type_exhibit'] ?></textarea>
        <p>Id зала</p>
        <textarea name="room"><?= $userbd['id_room'] ?></textarea>
        <p>Id автора</p>
        <textarea name="avtor"><?= $userbd['id_author'] ?></textarea>
        <br/>
        <button type="submit">Применить изменения</button>
    </form>

</body>
</html>