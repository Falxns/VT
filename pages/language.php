<?php
    session_start();
    if (isset($_POST['language']) && ($_POST['language'] === 'en' || $_POST['language'] === 'ru')) {
        $lang = $_POST['language'];
        $_SESSION['lang'] = $lang;
    } elseif (isset($_SESSION['lang']) && ($_SESSION['lang'] === 'en' || $_SESSION['lang'] === 'ru')) {
        $lang = $_SESSION['lang'];
    }

    if (isset($lang)) {
        $textLanguage = parse_ini_file("C:/Server/data/htdocs/VT/languages/" . $lang . ".ini");
    } else {
        $textLanguage = parse_ini_file("C:/Server/data/htdocs/VT/languages/ru.ini");
        
		$languageSelect = sprintf('<form class="user-form" method="POST" action="%s">', $_SERVER['SCRIPT_NAME']);
		$languageSelect .= '<h2 class="block-main-header">Choose website language:</h2>';
		$languageSelect .= '<select class="user-form_input" id="language" name="language">';
		$languageSelect .= '<option class="user-form_input" value="en">English</option>';
		$languageSelect .= '<option class="user-form_input" value="ru">Русский</option>';
		$languageSelect .= '</select>';
		$languageSelect .= '<input class="user-form_submit" type="submit" value="Select">';
		$languageSelect .= '</form>';

		echo $languageSelect;
    }
    session_write_close();
?>