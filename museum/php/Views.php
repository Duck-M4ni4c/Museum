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
    <h1>Все экспонаты</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Название экспонаиа</th>
            <th>Год публикации</th>
            <th>Тип экспоната</th>
            <th>ID зала</th>
            <th>Картинка</th>
            <th>ID автора</th>
        </tr>

        <?php

        $z1 = "запрос1";
        $userbd = mysqli_query($db, "SELECT * FROM $z1 ");

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
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
    <div class="view-db">
    <h1>Все художники</h1>
    <table>

        <tr>
            <th>ID</th>
            <th>Фамилия автора</th>
            <th>Имя автора</th>
            <th>Отчество автора</th>
        </tr>

        <?php

        $z2 = "запрос2";
        $userbd2 = mysqli_query($db, "SELECT * FROM $z2 ");

        /*
             * Преобразовываем полученные данные в нормальный массив
             */

        $userbd2 = mysqli_fetch_all($userbd2);

        /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

        foreach ($userbd2 as $userbd2) {
        ?>
            <tr>
                <td><?= $userbd2[0] ?></td>
                <td><?= $userbd2[1] ?></td>
                <td><?= $userbd2[2] ?></td>
                <td><?= $userbd2[3] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
    
    <div class="view-db">
    <h1>Все экспонаты Сальвадора Дали</h1>
    <table>
        <tr>
            <th>Экспонат</th>
            <th>Год издания</th>
            <th>Тип экспоната</th>
            <th>зал</th>
            <th>Фамилия автора</th>
            <th>Имя автора</th>
        </tr>

        <?php

        $z3 = "запрос3";
        $userbd = mysqli_query($db, "SELECT * FROM $z3 ");

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
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
   
    <div class="view-db">
    <h1>Все выставки</h1>
    <table>
        <tr>
            <th>Выставка</th>
            <th>Дата начала</th>
            <th>Дата окончания</th>
        </tr>

        <?php

        $z4 = "запрос4";
        $userbd = mysqli_query($db, "SELECT * FROM $z4 ");

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
                
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
    
    <!DOCTYPE html>
<html>
<head>
    <title>Проданные билеты за май</title>
</head>
<body>
    <div class="view-db">
    <h1>Все проданные билеты за май</h1> 
    <table> 
        <tr> 
            <th>Количество билетов</th>
        </tr> 

        <?php 
       
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $z5 = "запрос6"; 
        $result = mysqli_query($db, "SELECT * FROM $z5");

        if ($result) {
            $tickets = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($tickets as $ticket) { 
                echo "<tr>";
                echo "<td>" . htmlspecialchars($ticket['Количество проданных билетов']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='1'>No results found</td></tr>";
        }

        
        ?> 
    </table>
    </div>
    <div class="view-db">
    <h1>Все выстовки за 2024</h1>
    <table>
        <tr>
            <th>Названип</th>
            <th>Дата начала</th>
            <th>Дата окончания</th>
        </tr>

        <?php

        $z6 = "запрос7";
        $userbd6 = mysqli_query($db, "SELECT * FROM $z6 ");

        /*
             * Преобразовываем полученные данные в нормальный массив
             */

        $userbd6 = mysqli_fetch_all($userbd6);

        /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

        foreach ($userbd6 as $userbd6) {
        ?>
            <tr>
                <td><?= $userbd6[0] ?></td>
                <td><?= $userbd6[1] ?></td>
                <td><?= $userbd6[2] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
    <div class="view-db">
    <h1>Все покупатели билетов "Взрослый" на выставку "Зловещие пейзажи"</h1>
    <table>
        <tr>
            <th>Покупатель</th>
            <th>Выставка</th>
            <th>Тип билета</th>
        </tr>

        <?php

        $z7 = "запрос8";
        $userbd7 = mysqli_query($db, "SELECT * FROM $z7 ");

        $userbd7 = mysqli_fetch_all($userbd7);

        foreach ($userbd7 as $userbd7) {
        ?>
            <tr>
                <td><?= $userbd7[0] ?></td>
                <td><?= $userbd7[1] ?></td>
                <td><?= $userbd7[2] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
    <div class="view-db">
    <h1>Все покупатели билетов после 20.06.2024</h1>
    <table>
        <tr>
            <th>Покупатель</th>
            <th>Выставка</th>
            <th>Дата</th>
        </tr>

        <?php

        $z8 = "запрос9";
        $userbd8 = mysqli_query($db, "SELECT * FROM $z8 ");

        $userbd8 = mysqli_fetch_all($userbd8);

        foreach ($userbd8 as $userbd8) {
        ?>
            <tr>
                <td><?= $userbd8[0] ?></td>
                <td><?= $userbd8[1] ?></td>
                <td><?= $userbd8[2] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
   
    <div class="view-db">
    <h1>Все авторы экспонатов представленных в музее</h1>
    <table>
        <tr>
            <th>Экспонат</th>
            <th>Фамилия автора</th>
            <th>Имя автора</th>
        </tr>

        <?php

        $z9 = "запрос10";
        $userbd9 = mysqli_query($db, "SELECT * FROM $z9 ");

        $userbd9 = mysqli_fetch_all($userbd9);

        foreach ($userbd9 as $userbd9) {
        ?>
            <tr>
                <td><?= $userbd9[0] ?></td>
                <td><?= $userbd9[1] ?></td>
                <td><?= $userbd9[2] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
   
</body>
</html>

</body>

</html>