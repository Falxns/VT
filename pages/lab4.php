<?php
    include './lab6route.php';
?>
<?php
    include './language.php';
?>
<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
    <head>
        <title>Лабораторная работа 4</title>
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
        <link rel="stylesheet" type="text/css" href="../styles/nav.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
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
        <?php 
            include '../styles/footer.php';
        ?>
    </body>
</html>