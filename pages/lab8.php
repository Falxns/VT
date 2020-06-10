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
        <title><?php echo $textLanguage["LABS_LAB"];?>8</title>
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
            <form action="<?php $_PHP_SELF ?>" method="POST" id="lab-8" class="user-form">
                <h2 class="block-main-header"><?php echo $textLanguage["LABS_LAB"];?>8,<?php echo $textLanguage["LABS_VAR"];?>1</h2>
                <label class="user-form_label" for="number-input"><?php echo $textLanguage["LABS_TRANSL"];?></label>
            </form>
        </main>
        <?php 
            include '../styles/footer.php';
        ?>
    </body>
</html>