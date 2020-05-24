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
        <title>Команда</title>
        <link rel="stylesheet" type="text/css" href="../styles/team.css">
        <link rel="stylesheet" type="text/css" href="../styles/nav.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <link rel="stylesheet" type="text/css" href="../styles/support.css">
    </head>
    <body>
        <?php 
            include '../styles/navigation.php';
        ?>
        <main>
            <h2 class="block-main-header">Наша команда:</h2>
            <table class="team-table">
                <tr class="team-table_row">
                    <th class="team-table_head" >№</th>
                    <th class="team-table_head" >Имя</th>
                    <th class="team-table_head" >Должность</th>
                </th>
                <tr class="team-table_row">
                    <td class="team-table_data" >1</td>
                    <td class="team-table_data" >Илья Андросов</td>
                    <td class="team-table_data" >Клаун</td>
                </tr>
                <tr class="team-table_row">
                    <td class="team-table_data" >2</td>
                    <td class="team-table_data" >Максим Гладкий</td>
                    <td class="team-table_data" >Редактор</td>
                </tr>
                <tr class="team-table_row">
                    <td class="team-table_data" >3</td>
                    <td class="team-table_data" >Lupin</td>
                    <td class="team-table_data" >Войсер</td>
                </tr>
                <tr class="team-table_row">
                    <td class="team-table_data" >4</td>
                    <td class="team-table_data" >Silv</td>
                    <td class="team-table_data" >Войсер</td>
                </tr>
                <tr class="team-table_row">
                    <td class="team-table_data" >5</td>
                    <td class="team-table_data" >N-word</td>
                    <td class="team-table_data" >Саббер</td>
                </tr>
                <tr class="team-table_row">
                    <td class="team-table_data" >6</td>
                    <td class="team-table_data" >xxxFracTurexxx</td>
                    <td class="team-table_data" >Технарь</td>
                </tr>
                <tr class="team-table_row">
                    <td class="team-table_data" >7</td>
                    <td class="team-table_data" >Djastik</td>
                    <td class="team-table_data" >Клаун</td>
                </tr>
                <tr class="team-table_row">
                    <td class="team-table_data" >8</td>
                    <td class="team-table_data" >thefox2x2</td>
                    <td class="team-table_data" >Стример</td>
                </tr>
            </table>
        </main>
        <?php 
            include '../styles/footer.php';
        ?>
    </body>
</html>