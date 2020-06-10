<?php
    include './lab6route.php';
?>
<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
    <head>
        <title>Евангелион</title>
        <link rel="stylesheet" type="text/css" href="../styles/description.css">
        <link rel="stylesheet" type="text/css" href="../styles/nav.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
    </head>
    <body>
        <header>
            <ul class="navigation">
                <li class="navigation_item">
                    <a class="navtab" href="../index.php">ГЛАВНАЯ</a>
                </li>
                <li class="navigation_item">
                    <a class="navtab" href="./team.php">КОМАНДА</a>
                </li>
                <li class="navigation_item">
                    <a class="navtab" href="./support.php">ПОДДЕРЖКА</a>
                </li>
                <li class="navigation_item">
                    <a class="navtab" href="./labs.php">ЛАБОРАТОРНЫЕ</a>
                </li>
            </ul>
        </header>
        <main>
            <h2 class="block-main-header">Евангелион:</h2>
            <div class="anime-container">
                <iframe class="anime-container_video" src="https://www.youtube.com/embed/t-QSmNReDyI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <ul class="anime-container_list">
                    <li>Рейтинг: </li>
                    <li>Количество просмотров: </li>
                    <li>Дата выхода: </li>
                    <li>Жанр: </li>
                </ul>
                <h3 class="anime-container_description-header">Описание:</h3>
                <p class="anime-container_description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione ea optio minima perferendis rem. Commodi dignissimos iure magni facilis delectus! Tempore assumenda nihil ex sint quidem minima inventore. Tempora, vero. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, quam consectetur obcaecati in deserunt fugiat quaerat. Architecto id distinctio totam recusandae praesentium, aliquid possimus minus obcaecati, vero, eligendi impedit esse.</p>
            </div>
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