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
    <h1>Пользователи</h1>
<table>
<tr>
            <th>ID</th>
            <th>Пароль</th>
            <th>Имя</th>
            <th>Почта</th>
            <th>Телефон</th>
            <th>Роль</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
           // $sqlin = "";
            $userbd = mysqli_query($db, "SELECT * FROM users");

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
                        <td><a class="edit-btn" href="BDuserUPdate.php?id=<?= $userbd[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="deleteUser.php?id=<?= $userbd[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
</table>
    </div>

    <div class="add-form">
    <h3>Добавить нового пользователя</h3>
    <form action="create.php" method="post">
        <p>Пароль</p>
        <input type="text" name="passAdd">
        <p>Имя</p>
        <textarea name="name_user"></textarea>
        <p>Почта</p>
        <input type="email" name="email">
        <p>Телефон</p>
        <input type="number" name="phone">
        <p>Роль</p>
        <input type="number" name="role">
        <br/>
        <button type="submit">Добавить пользователя</button>
    </form>
    <a  href="../profile.php">Выйти</a>
    </div>
   

</body>
</html>