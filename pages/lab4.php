<?php
    include './lab6route.php';
?>
<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
    <head>
        <title>Лабораторная работа 4</title>
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
        <link rel="stylesheet" type="text/css" href="../styles/nav.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <link rel="stylesheet" type="text/css" href="../styles/lab4.css">
    </head>
    <body>
        <?php 
            include '../styles/navigation.php';
        ?>
        <main>
            <form action="<?php $_PHP_SELF ?>" method="GET" id="lab-4" class="user-form">
                <h2 class="block-main-header">Лабораторная работа 4, вариант 9</h2>
                <label class="user-form_label" for="number-input">Введите текст: </label>
                <textarea class="user-form_input" name="text-input" id="text-input" cols="60" rows="10"></textarea>
                <input class="user-form_submit" type="submit" value="Send">
                <div class="result-container">
                    <?php
                        if(isset($_GET["text-input"])) {
                            $text = $_GET["text-input"];
                            $text = preg_replace("/[a-zA-Z]+/", "<p class='lab_blue'>$0</p>", $text);
                            $text = preg_replace("/[а-яё]+/ui", "<p class='lab_red'>$0</p>", $text);
                            $text = preg_replace("/[0-9]+/", "<p class='lab_green'>$0</p>", $text);
                            echo $text;
                        }
                    ?>
                </div>
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