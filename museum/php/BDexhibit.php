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
    <h1>Экспонаты</h1>
<table>
<tr>
            <th>ID</th>
            <th>Название</th>
            <th>Год публикации</th>
            <th>Id типа экспоната</th>
            <th>Id зала</th>
            <th>Картинка</th>
            <th>Id автора</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
           // $sqlin = "";
            $userbd = mysqli_query($db, "SELECT * FROM exhibits");

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
                        <td><?= $userbd[4] ?></td>
                        <td><?= $userbd[5] ?></td>
                        <td><?= $userbd[6] ?></td>
                        <td><a href="BDexhibitsUPdate.php?id=<?= $userbd[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="deleteExhibit.php?id=<?= $userbd[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
</table>
    </div>
<div class="add-form">
<h3>Добавить новый экспонат</h3>
    <form action="createEchibit.php" method="post">
        <p>Название экспоната</p>
        <input type="text" name="name">
        <p>Год публикации</p>
        <textarea name="god"></textarea>
        <p>Id типа экспоната</p>
        <input type="text" name="type">
        <p>Id зала</p>
        <input type="number" name="zalid">
        <p>Id автора</p>
        <input type="number" name="avtorid">
        <br/>
        <button type="submit">Добавить     Экспонат</button>
    </form>
    <a href="../profile.php">Выйти</a>
</div>
    

</body>
</html>