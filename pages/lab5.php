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
        <title><?php echo $textLanguage["LABS_LAB"];?>5</title>
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
        <link rel="stylesheet" type="text/css" href="../styles/nav.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
        <link rel="stylesheet" type="text/css" href="../styles/lab5.css">
    </head>
    <body>
        <?php 
            include '../styles/navigation.php';
        ?>
        <main>
            <form action="<?php $_PHP_SELF ?>" method="GET" id="lab-5" class="user-form">
                <h2 class="block-main-header"><?php echo $textLanguage["LABS_LAB"];?>5,<?php echo $textLanguage["LABS_VAR"];?>9</h2>
                <label class="user-form_label" for="text-input"><?php echo $textLanguage["LABS_SQL"];?></label>
                <input class="user-form_input" type="text" name="text-input" id="text-input"></input>
                <input class="user-form_submit" type="submit" value="<?php echo $textLanguage["LABS_SEND"];?>">
                <?php
                    define('DB_HOST', 'localhost');
                    define('DB_USER', 'root');
                    define('DB_PASSWORD', '');
                    define('DB_NAME', 'lab5_general');

                    $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                    if ($mysqli->connect_errno) {
                        exit('Connection error.');
                    }
                    $mysqli->set_charset('utf8');

                    if ( isset($_GET["text-input"]) ) {
                        $userquery = $_GET["text-input"];
                        if ( preg_match("/--|\/\*/", $userquery) ) {
                            exit('You were trying to inject SQL.');
                        } else {
                            if ($userquery === '') {
                                exit('Blank SQL query!');
                            }
                            $started = microtime(true);
                            $result = $mysqli->query($userquery);
                            $end = microtime(true);
                            $mem_usage = memory_get_usage();
                            $difference = $end - $started;
                            $queryTime = number_format($difference, 10);
                            if (!$result) {
                                echo 'Incorrect SQL query.';
                            } else {
                                echo "SQL query access! ^-^ Time: $queryTime, Memory usage: $mem_usage";
                            }
                        }
                    }
                    $result = $mysqli->query("SELECT table_titles.id AS id, table_titles.name AS name, table_titles.date_release AS date, table_studios.name AS studio
                        FROM table_titles, table_studios
                        WHERE table_titles.studio_id=table_studios.id
                        ORDER BY table_titles.date_release");
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $creationsTable = "<table>";
                    $creationsTable .= "<tr><td class='lab-table_head'>ID</td><td class='lab-table_head'>Name</td><td class='lab-table_head'>Release date</td><td class='lab-table_head'>Studio</td></tr>";
                    foreach ($rows as $row) {
                        $creationsTable .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name'], $row['date'], $row['studio']);
                    }
                    $creationsTable .= "</table>";

                    $result = $mysqli->query("SELECT id, name, date_registration, anime_number
                        FROM table_studios");
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $articlesTable = "<table>";
                    $articlesTable .= "<tr><td class='lab-table_head'>ID</td><td class='lab-table_head'>Studio name</td><td class='lab-table_head'>Registration date</td><td class='lab-table_head'>Number of animes</td></tr>";
                    foreach ($rows as $row) {
                        $articlesTable .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name'], $row['date_registration'], $row['anime_number']);
                    }
                    $articlesTable .= "</table>";
                    echo $articlesTable, $creationsTable;
                ?>
            </form>
        </main>
        <?php 
            include '../styles/footer.php';
        ?>
    </body>
</html>