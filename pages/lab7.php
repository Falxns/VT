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
        <title>Лабораторная работа 7</title>
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
        <link rel="stylesheet" type="text/css" href="../styles/nav.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
        <link rel="stylesheet" type="text/css" href="../styles/lab7.css">
    </head>
    <body>
        <?php
            include '../styles/navigation.php';
        ?>
        <main>
            <form action="<?php $_PHP_SELF ?>" method="POST" id="lab-7" class="user-form">
                <h2 class="block-main-header">Лабораторная работа 7, вариант 4</h2>
                <label class="user-form_label" for="user-emailfrom">От кого (пр. user@gmail.com):</label>
                <input class="user-form_input" type="email" name="user-emailfrom" id="user-emailfrom" require>
                <label class="user-form_label" for="user-emailto">Кому (пр. user@gmail.com):</label>
                <input class="user-form_input" type="email" name="user-emailto" id="user-emailto" require>
                <label class="user-form_label" for="user-theme">Тема:</label>
                <input class="user-form_input" type="text" name="user-theme" id="user-theme" require>
                <label class="user-form_label" for="user-message">Письмо:</label>
                <textarea class="user-form_input" name="user-message" id="user-message" cols="60" rows="10" require></textarea>
                <?php
                    $randomable = rand(0,4);
                    $arrcaptcha = array();
                    $arrcaptcha[0] = 'fm33xx';
                    $arrcaptcha[1] = 'bc248d';
                    $arrcaptcha[2] = '24d3dv';
                    $arrcaptcha[3] = 'qwm36j';
                    $arrcaptcha[4] = 'kh19lf';
                ?>
                <img src="../captcha/image<?php echo $randomable ?>.png" id="img-captcha"></img>
                <input class="user-form_input" type="text" name="user-captcha" id="user-captcha" require>
                <input class="user-form_submit" type="submit" value="Send">
                <?php
                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\SMTP;
                    use PHPMailer\PHPMailer\Exception;
                    require '../vendor/autoload.php';

                    if (isset($_POST['user-emailfrom']) && isset($_POST['user-emailto']) && isset($_POST['user-theme']) && isset($_POST['user-message']) && isset($_POST['user-captcha'])) {
                        $emailfrom = $_POST['user-emailfrom'];
                        $emailto = $_POST['user-emailto'];
                        $theme = $_POST['user-theme'];
                        $message = $_POST['user-message'];
                        $captcha = $_POST['user-captcha'];
                        if (filter_var($emailfrom, FILTER_VALIDATE_EMAIL) && filter_var($emailto, FILTER_VALIDATE_EMAIL) && trim($theme) !== "" && trim($message) !== "" && strcasecmp($captcha,$arrcaptcha[$randomable]) === 0) {
                            $letter = new PHPMailer();
                            $letter->CharSet = "UTF-8";
                            $letter->isSMTP();
                            $letter->Host = 'smtp.gmail.com';
                            $letter->SMTPAuth = 'true';
                            $letter->SMTPSecure = 'tls';
                            $letter->Port = '587';

                            $letter->Username = 'maksim.gladki.lab7@gmail.com';
                            $letter->Password = 'StrongPasswordLab7';

                            $letter->Subject = $theme;
                            $letter->Body = $message;
                            $letter->SetFrom($emailfrom, $emailfrom);
                            //envelope sender is changed by gmail
                            $letter->addReplyTo($emailfrom);
                            $letter->addAddress($emailto);
                            if($letter->Send()) {
                                echo "<p class='user-form-label'>Letter was sent UwU</p>";
                            } else {
                                echo "<p class='user-form-label'>Letter wasn't sent :c Check your data.</p>";
                            } 
                        } else {
                            echo "<p class='user-form-label'>Emails or letter was filled incorrect. Also check captcha!</p>";
                        }
                    }
                ?>
            </form>
        </main>
        <?php 
            include '../styles/footer.php';
        ?>
    </body>
</html>