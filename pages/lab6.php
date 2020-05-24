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
        <title>Лабораторная работа 6</title>
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
            <form action="<?php $_PHP_SELF ?>" method="POST" id="lab-6" class="user-form">
                <h2 class="block-main-header">Лабораторная работа 6, вариант 9</h2>
                <?php
                    session_start();
                    foreach($_SESSION['data'] as $key=>$value) {
                        echo "<p class='user-form_label'><strong>Page:</strong> $value[0], <strong>Time:</strong> $value[1]</p>";
                    }
                ?>
            </form>
        </main>
        <?php 
            include '../styles/footer.php';
        ?>
    </body>
</html>