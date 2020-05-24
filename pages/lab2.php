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
        <title>Лабораторная работа 2</title>
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
        <link rel="stylesheet" type="text/css" href="../styles/nav.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
    </head>
    <body>
        <?php 
            include '../styles/navigation.php';
        ?>
        <main>
            <form action="<?php $_PHP_SELF ?>" method="GET" id="lab-2" class="user-form">
                <h2 class="block-main-header">Лабораторная работа 2, вариант 9</h2>
                <label class="user-form_label" for="number-input">Введите число: </label>
                <input class="user-form_input" name="number-input" pattern="^[0-9]+$">
                <input class="user-form_submit" type="submit" value="Send">
                <?php
                    if( isset($_GET["number-input"])) {
                        $number = $_GET["number-input"];
                        $answer = 0;
                        for ($i = 0; $i < strlen($number); $i++) {
                            $answer += $number[$i];
                        }
                        echo "<label class='user-form_label'>Ответ: $answer</label>";
                    }
                ?>
            </form>
        </main>
        <?php 
            include '../styles/footer.php';
        ?>
    </body>
</html>