<?php
    include './lab6route.php';
?>
<?php
    include './language.php';
?>
<?php
    const HOLIDAYS_FILE_NAME = '../holidays.txt';
    const DATE_FORMAT = 'd.m.Y';
    const HOLIDAY_FORMAT = 'd-m';

    $weekDays = array(
                    "Воскресенье",
                    "Понедельник",
                    "Вторник",
                    "Среда",
                    "Четверг",
                    "Пятница",
                    "Суббота"
                );

    function getWeekDay($time)
    {
        global $weekDays;
        return $weekDays[(int)date('w', $time)];
    }

    function get_date()
    {
        if (isset($_GET['date']))
            return $_GET['date'];
        else    
            return "";
        
    }

    function validate_date($date, $format)
    {
        $dateFormat = date_create_from_format($format, $date);
        return $dateFormat && $dateFormat->format($format) == $date;
    }

    function get_holidays_time($fileName)
    {
        $holidaysFile = fopen($fileName, "r");
        if ($holidaysFile)
        {
            while (!feof($holidaysFile))
            {
                $dateStr = trim(fgets($holidaysFile));
                if (validate_date($dateStr, HOLIDAY_FORMAT))
                    $holidaysTime[] = $dateStr;
            }
        }
        return $holidaysTime;
    }


    function get_min_delivery_date()
    {
        global $holidaysTime;
        $deliveryTime = time();

        if (date('H', $deliveryTime) >= 12)
            $deliveryTime = strtotime("2 day", $deliveryTime);
        else
            $deliveryTime = strtotime("1 day", $deliveryTime);
            
        $deliveryTime = strtotime(date(DATE_FORMAT, $deliveryTime));

        while (in_array(date(HOLIDAY_FORMAT, $deliveryTime), $holidaysTime))
            $deliveryTime = strtotime("1 day", $deliveryTime);

        return $deliveryTime;
    }

    function write_user_delivery_date($date)
    {
        global $holidaysTime;
        $deliveryTime = get_min_delivery_date();
        $userTime = strtotime($date);
        if ($userTime > $deliveryTime)
        {
            $deliveryTime = $userTime;
            while (in_array(date(HOLIDAY_FORMAT, $deliveryTime), $holidaysTime))
                $deliveryTime = strtotime("1 day", $deliveryTime);
        }
        echo "Дата доставки: ".get_date_string($deliveryTime);

    }

    function get_date_string($date)
    {
        $weekDay = getWeekDay($date);
        return strftime("%d.%m.%Y ($weekDay)", $date);
    }      

    function write_delivery_date()
    {
        echo "Предлагаемая дата доставки: ".get_date_string(get_min_delivery_date());
    }


    setlocale(LC_ALL, 'ru_RU.UTF-8');
    $holidaysTime = get_holidays_time(HOLIDAYS_FILE_NAME);

?>

<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
    <head>
        <title><?php echo $textLanguage["LABS_LAB"];?>3</title>
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
            <form action="<?php $_PHP_SELF ?>" id="lab-3" class="user-form">
                <h2 class="block-main-header"><?php echo $textLanguage["LABS_LAB"];?>3,<?php echo $textLanguage["LABS_VAR"];?>9</h2>
                <label class="user-form_label" for="date-input"><?php echo $textLanguage["LABS_DELIVERY"];?></label>
                <input class="user-form_input" type="text" name="date" id="date" placeholder="ДД.ММ.ГГГГ" pattern="\d\d\.\d\d\.\d\d\d\d" title="ДД.ММ.ГГГГ" required value=<?php echo get_date()?>>
                <input class="user-form_submit" type="submit" value="<?php echo $textLanguage["LABS_SEND"];?>">
                <?php
                    if (isset($_GET['date']))
                    {
                        if (validate_date($_GET['date'], DATE_FORMAT))
                            write_user_delivery_date($_GET['date']);
                        else
                            echo "<em>Вы ввели несуществующую дату.</em>";
                        echo "<br>";
                    }
                    write_delivery_date();
                ?>
            </form>
        </main>
        <?php 
            include '../styles/footer.php';
        ?>
    </body>
</html>