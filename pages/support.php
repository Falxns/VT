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
        <title><?php echo $textLanguage["SUP_TITLE"];?></title>
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
        <link rel="stylesheet" type="text/css" href="../styles/nav.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
    </head>
    <body>
        <?php 
            include '../styles/navigation.php';
        ?>
        <main>
            <h2 class="block-main-header"><?php echo $textLanguage["SUP_HEADERSUP"];?></h2>
            <form class="user-form" action="" method="POST">
                <section class="user-form_section">
                    <label class="user-form_label" for="user-name"><?php echo $textLanguage["SUP_FORM_NAME"];?></label>
                    <input class="user-form_input" name="user-name" type="text" required>
                </section>
                <section class="user-form_section">
                    <label class="user-form_label" for="user-email"><?php echo $textLanguage["SUP_FORM_NUMBER"];?></label>
                    <input class="user-form_input" name="user-email" type="text" >
                </section>
                <section class="user-form_section">
                    <label class="user-form_label" for="user-subject"><?php echo $textLanguage["SUP_FORM_EMAIL"];?></label>
                    <input class="user-form_input" name="user-subject" type="text" required>
                </section>
                <section class="user-form_section">
                    <label class="user-form_label" for="user-subject"><?php echo $textLanguage["SUP_FORM_SUBJ"];?></label>
                    <input class="user-form_input" name="user-subject" type="text">
                </section>
                <label class="user-form_label" for="user-message"><?php echo $textLanguage["SUP_FORM_MSG"];?></label>
                <textarea class="user-form_message" name="user-message" id="user-message" cols="60" rows="10" required></textarea>
                <input class="user-form_submit" type="submit" value="<?php echo $textLanguage["SUP_FORM_SEND"];?>">
            </form>
        </main>
        <?php 
            include '../styles/footer.php';
        ?>
    </body>
</html>