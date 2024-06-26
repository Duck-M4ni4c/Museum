<?php
session_start();
$db = mysqli_connect('localhost','root', '', 'Museum' );
$userbd_id = $_GET['id'];

$userbd = mysqli_query($db, "SELECT * FROM holding_an_exhibition  WHERE `id_holding_an_exhibition` = '$userbd_id'");
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
<h3>Запланировать новую эксукурсию</h3>
    <form action="DBholdingUPdate2.php" method="post">

        <textarea type="hidden" name="id_holding" ><?= $userbd['id_holding_an_exhibition'] ?></textarea>
        <p>Id экскурсии</p>
        <textarea name="idex" ><?= $userbd['id_exhibition'] ?></textarea>
        <p>Начало</p>
        <textarea name="start"><?= $userbd['start_datetime'] ?></textarea>
        <p>Конец</p>
        <textarea name="end"><?= $userbd['end_datetime'] ?></textarea>
        <br/>
        <button type="submit">Применить изменения</button>
    </form>

</body>
</html>