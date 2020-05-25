<?php

$path = dirname(__FILE__);
$cron = $path . "/index.php";
echo exec("0 5 * * * php -q ".$cron." &> /dev/null");