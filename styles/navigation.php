<?php
    $currScriptName = $_SERVER['SCRIPT_NAME'];
?>
<header>
    <ul class="navigation">
        <li class="navigation_item<?php if ($currScriptName === "/VT/index.php") echo " active"?>"><a class="navtab" href="/VT/index.php">ГЛАВНАЯ</a></li>
        <li class="navigation_item<?php if ($currScriptName === "/VT/pages/team.php") echo " active"?>"><a class="navtab" href="/VT/pages/team.php">КОМАНДА</a></li>
        <li class="navigation_item<?php if ($currScriptName === "/VT/pages/support.php") echo " active"?>"><a class="navtab" href="/VT/pages/support.php">ПОДДЕРЖКА</a></li>
        <li class="navigation_item<?php if ($currScriptName === "/VT/pages/labs.php") echo " active"?>"><a class="navtab" href="/VT/pages/labs.php">ЛАБОРАТОРНЫЕ</a></li>
    </ul>
</header>