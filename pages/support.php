<?php
    include './lab6route.php';
?>
<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
    <head>
        <title>Поддержка</title>
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
        <link rel="stylesheet" type="text/css" href="../styles/nav.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
    </head>
    <body>
        <?php 
            include '../styles/navigation.php';
        ?>
        <main>
            <h2 class="block-main-header">Свяжитесь с нами:</h2>
            <form class="user-form" action="" method="POST">
                <section class="user-form_section">
                    <label class="user-form_label" for="user-name">Ваше имя:</label>
                    <input class="user-form_input" name="user-name" type="text" required>
                </section>
                <section class="user-form_section">
                    <label class="user-form_label" for="user-email">Ваш номер:</label>
                    <input class="user-form_input" name="user-email" type="text" >
                </section>
                <section class="user-form_section">
                    <label class="user-form_label" for="user-subject">Электронный адрес:</label>
                    <input class="user-form_input" name="user-subject" type="text" required>
                </section>
                <section class="user-form_section">
                    <label class="user-form_label" for="user-subject">Тема сообщения:</label>
                    <input class="user-form_input" name="user-subject" type="text">
                </section>
                <label class="user-form_label" for="user-message">Сообщение:</label>
                <textarea class="user-form_message" name="user-message" id="user-message" cols="60" rows="10" required></textarea>
                <input class="user-form_submit" type="submit" value="Отправить">
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