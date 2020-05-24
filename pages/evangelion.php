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
        <title><?php echo $textLanguage["MAIN_TITLES_EVA"];?></title>
        <link rel="stylesheet" type="text/css" href="../styles/description.css">
        <link rel="stylesheet" type="text/css" href="../styles/nav.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
    </head>
    <body>
        <?php 
            include '../styles/navigation.php';
        ?>
        <main>
            <h2 class="block-main-header"><?php echo $textLanguage["MAIN_TITLES_EVA"];?>:</h2>
            <div class="anime-container">
                <iframe class="anime-container_video" src="https://www.youtube.com/embed/t-QSmNReDyI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <ul class="anime-container_list">
                    <li><?php echo $textLanguage["ANIME_RANK"];?></li>
                    <li><?php echo $textLanguage["ANIME_VIEWS"];?></li>
                    <li><?php echo $textLanguage["ANIME_RELEASEDATE"];?></li>
                    <li><?php echo $textLanguage["ANIME_GENRE"];?></li>
                </ul>
                <h3 class="anime-container_description-header"><?php echo $textLanguage["ANIME_DESCRIPTION_HEADER"];?></h3>
                <p class="anime-container_description"><?php echo $textLanguage["ANIME_DESCRIPTION"];?></p>
            </div>
        </main>
        <?php 
            include '../styles/footer.php';
        ?>
    </body>
</html>