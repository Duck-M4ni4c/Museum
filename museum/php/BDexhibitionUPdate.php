<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );
$userbd_id = $_GET['id'];

$userbd = mysqli_query($db, "SELECT * FROM exhibitions  WHERE `id_exhibition` = '$userbd_id'");
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
    <form action="DBexhibitionUPdate2.php" method="post">

        <textarea type="hidden" name="id_user" ><?= $userbd['id_exhibition'] ?></textarea>
        <p>Название экскурсии</p>
        <textarea name="passAdd" ><?= $userbd['name_exhibition'] ?></textarea>
        <p>Описание</p>
        <textarea name="name_user"><?= $userbd['description_exhibition'] ?></textarea>
    
        <br/>
        <button type="submit">Применить изменения</button>
    </form>

</body>
</html>