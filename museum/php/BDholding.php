<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'Museum');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<table>">
    <link href="../style/style.css" rel="stylesheet">
    <link href="style/owl.carousel.css" rel="stylesheet">
    <link href="font/fonts.css" rel="stylesheet">
    <style>
    th, td {
        padding: 10px;
        
    }

    th {
        color: black;
    }

    th {
        background: #9F5B3A;
        color: #fff;
    }

    td {
        background: black;
        color: #9F5B3A;
        font-family: "Nocturne Serif";
    }
</style>
</head>
<body>
    <div class="view-db">
    <h1>Запланированные экскурсии</h1>
<table>
<tr>
            <th>ID</th>
            <th>Id экскурсии</th>
            <th>Начало</th>
            <th>Конец</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
           // $sqlin = "";
            $userbd = mysqli_query($db, "SELECT * FROM holding_an_exhibition");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $userbd = mysqli_fetch_all($userbd);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($userbd as $userbd) {
                ?>
                    <tr>
                        <td><?= $userbd[0] ?></td>
                        <td><?= $userbd[1] ?></td>
                        <td><?= $userbd[2] ?></td>
                        <td><?= $userbd[3] ?></td>
                        <td><a href="BDholdingUPdate.php?id=<?= $userbd[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="deleteHolding.php?id=<?= $userbd[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
</table>
    </div>
<div class="add-form">
<h3>Добавить нового пользователя</h3>
    <form action="createHolding.php" method="post">
        <p>Id экскурсии</p>
        <textarea name="idex"></textarea>
        <p>Начало</p>
        <input type="text" name="nach">
        <p>Конец</p>
        <input type="text" name="kon">
        <br/>
        <button type="submit">Добавить </button>
    </form>
    <a href="../profile.php">Выйти</a>
</div>
    

</body>
</html>