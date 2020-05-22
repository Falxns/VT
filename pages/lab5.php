<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
    <head>
        <title>Лабораторная работа 5</title>
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
        <link rel="stylesheet" type="text/css" href="../styles/nav.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <link rel="stylesheet" type="text/css" href="../styles/lab5.css">
    </head>
    <body>
        <?php 
            include '../styles/navigation.php';
        ?>
        <main>
            <form action="<?php $_PHP_SELF ?>" method="GET" id="lab-5" class="user-form">
                <h2 class="block-main-header">Лабораторная работа 5, вариант 9</h2>
                <label class="user-form_label" for="text-input">Введите SQL-запрос: </label>
                <input class="user-form_input" type="text" name="text-input" id="text-input"></input>
                <input class="user-form_submit" type="submit" value="Send">
                <?php
                    define('DB_HOST', 'localhost');
                    define('DB_USER', 'root');
                    define('DB_PASSWORD', '');
                    define('DB_NAME', 'lab5_general');

                    $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                    if ($mysqli->connect_errno) {
                        exit('Connection error.');
                    }
                    $mysqli->set_charset('utf8');
                    $result = $mysqli->query("SELECT table_titles.id AS id, table_titles.name AS name, table_titles.date_release AS date, table_studios.name AS studio
                        FROM table_titles, table_studios
                        WHERE table_titles.studio_id=table_studios.id
                        ORDER BY table_titles.date_release");
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $creationsTable = "<table>";
                    $creationsTable .= "<tr><td class='lab-table_head'>ID</td><td class='lab-table_head'>Name</td><td class='lab-table_head'>Release date</td><td class='lab-table_head'>Studio</td></tr>";
                    foreach ($rows as $row) {
                        $creationsTable .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name'], $row['date'], $row['studio']);
                    }
                    $creationsTable .= "</table>";

                    $result = $mysqli->query("SELECT id, name, date_registration, anime_number
                    FROM table_studios");
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $articlesTable = "<table>";
                    $articlesTable .= "<tr><td class='lab-table_head'>ID</td><td class='lab-table_head'>Studio name</td><td class='lab-table_head'>Registration date</td><td class='lab-table_head'>Number of animes</td></tr>";
                    foreach ($rows as $row) {
                        $articlesTable .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name'], $row['date_registration'], $row['anime_number']);
                    }
                    $articlesTable .= "</table>";
                    echo $articlesTable, $creationsTable;
                ?>
            </form>
        </main>
        <footer class="footer-container">
            <a class="contacts" href="https://vk.com/maxim_falonse" target="_blank">
                <img class="icon" src="../vk-logo.png">
            </a>
            <a class="contacts" href="https://www.instagram.com/falxns_/" target="_blank">
                <img class="icon" src="../inst-logo.png">
            </a>
            <p class="email">maks.falonse@gmail.com</p>
            <p class="phone">+375295656229</p>
        </footer>
    </body>
</html>