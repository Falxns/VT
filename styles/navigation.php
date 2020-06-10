<?php
    $currScriptName = $_SERVER['SCRIPT_NAME'];
?>
<header>
    <ul class="navigation">
        <li class="navigation_item<?php if ($currScriptName === "/VT/index.php") echo " active"?>"><a class="navtab" href="/VT/index.php"><?php echo $textLanguage["NAV_MAIN"]; ?></a></li>
        <li class="navigation_item<?php if ($currScriptName === "/VT/pages/team.php") echo " active"?>"><a class="navtab" href="/VT/pages/team.php"><?php echo $textLanguage["NAV_TEAM"]; ?></a></li>
        <li class="navigation_item<?php if ($currScriptName === "/VT/pages/support.php") echo " active"?>"><a class="navtab" href="/VT/pages/support.php"><?php echo $textLanguage["NAV_SUP"]; ?></a></li>
        <li class="navigation_item<?php if ($currScriptName === "/VT/pages/labs.php") echo " active"?>"><a class="navtab" href="/VT/pages/labs.php"><?php echo $textLanguage["NAV_LABS"]; ?></a></li>
    </ul>
</header>