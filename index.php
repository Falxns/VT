<?php
    include './pages/lab6route.php';
?>
<?php
    include './pages/language.php';
?>
<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
    <head>
        <title><?php echo $textLanguage["MAIN_TITLE"]; ?></title>
        <link rel="stylesheet" type="text/css" href="./styles/main.css">
        <link rel="stylesheet" type="text/css" href="./styles/nav.css">
        <link rel="stylesheet" type="text/css" href="./styles/footer.css">
        <link rel="stylesheet" type="text/css" href="./styles/support.css">
    </head>
    <body>
        <?php 
            include './styles/navigation.php';
        ?>
        <main>
            <section class="block-main">
                <div class="block-main-header">
                    <p><?php echo $textLanguage["MAIN_UPDATE"]; ?></p>
                </div>
                <ul class="main-item">
					<li>
                        <a class="item" href="./pages/kaminotou.php">
                            <span class="date">3<?php echo $textLanguage["MAIN_DATE_MAY"]; ?></span>
                            <img class="picture" src="./titles/kaminotou.jpg">
                            <span class="announcement"><strong><?php echo $textLanguage["MAIN_TITLES_KAMINOTOU"]; ?></strong><?php echo $textLanguage["MAIN_ADDEDSERIES"]; ?>2.</span>
                        </a>
                    </li>
                    <li>
                        <a class="item" href="./pages/kaminotou.php">
                            <span class="date">2<?php echo $textLanguage["MAIN_DATE_MAY"]; ?></span>
                            <img class="picture" src="./titles/kaminotou.jpg">
                            <span class="announcement"><strong><?php echo $textLanguage["MAIN_TITLES_KAMINOTOU"]; ?></strong><?php echo $textLanguage["MAIN_ADDEDSERIES"]; ?>1.</span>
                        </a>
                    </li>
                    <li>
                        <a class="item" href="./pages/evangelion.php">
                            <span class="date">25<?php echo $textLanguage["MAIN_DATE_MARCH"]; ?></span>
                            <img class="picture" src="./titles/evangelion.jpg">
                            <span class="announcement"><strong><?php echo $textLanguage["MAIN_TITLES_EVA"]; ?></strong><?php echo $textLanguage["MAIN_ADDEDSERIES"]; ?>3.</span>
                        </a>
                    </li>
                    <li>
                        <a class="item" href="./pages/evangelion.php">
                            <span class="date">24<?php echo $textLanguage["MAIN_DATE_MARCH"]; ?></span>
                            <img class="picture" src="./titles/evangelion.jpg">
                            <span class="announcement"><strong><?php echo $textLanguage["MAIN_TITLES_EVA"]; ?></strong><?php echo $textLanguage["MAIN_ADDEDSERIES"]; ?>2.</span>
                        </a>
                    </li>
                    <li>
                        <a class="item" href="./pages/evangelion.php">
                            <span class="date">23<?php echo $textLanguage["MAIN_DATE_MARCH"]; ?></span>
                            <img class="picture" src="./titles/evangelion.jpg">
                            <span class="announcement"><strong><?php echo $textLanguage["MAIN_TITLES_EVA"]; ?></strong><?php echo $textLanguage["MAIN_ADDEDSERIES"]; ?>1.</span>
                        </a>
                    </li>
                </ul>
            </section>
            <section class="block-main">
                <div class="block-main-header">
                    <p><?php echo $textLanguage["MAIN_NEWS"]; ?></p>
                </div>
                <ul class="main-item">
                    <li>
                        <a class="item">
                            <span class="date">20<?php echo $textLanguage["MAIN_DATE_MARCH"]; ?></span>
                            <span class="news-announcement"><?php echo $textLanguage["MAIN_NEWS_1"]; ?></span>
                        </a>
                    </li>
                </ul>
            </section>
        </main>
        <?php 
            include './styles/footer.php';
        ?>
    </body>
</html>