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
        <title><?php echo $textLanguage["LABS_TITLE"];?></title>
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
            <a class="labs-link" href="/VT/pages/lab2.php"><?php echo $textLanguage["LABS_LAB"];?>2</a>
            <a class="labs-link" href="/VT/pages/lab3.php"><?php echo $textLanguage["LABS_LAB"];?>3</a>
            <a class="labs-link" href="/VT/pages/lab4.php"><?php echo $textLanguage["LABS_LAB"];?>4</a>
            <a class="labs-link" href="/VT/pages/lab5.php"><?php echo $textLanguage["LABS_LAB"];?>5</a>
            <a class="labs-link" href="/VT/pages/lab6.php"><?php echo $textLanguage["LABS_LAB"];?>6</a>
            <a class="labs-link" href="/VT/pages/lab7.php"><?php echo $textLanguage["LABS_LAB"];?>7</a>
            <a class="labs-link" href="/VT/pages/lab8.php"><?php echo $textLanguage["LABS_LAB"];?>8</a>
        </main>
        <?php 
            include '../styles/footer.php';
        ?>
    </body>
</html>