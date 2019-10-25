<?php
$SCRIPT_TIMEZONE = date_default_timezone_get();
$GLOBAL_PHP_CONFIG_TIMEZONE = ini_get('date.timezone');
echo "<h2>Your PHP Script Timezone is ".$SCRIPT_TIMEZONE."</h2>";
echo "<h2>Your PHP Config Timezone is ".$GLOBAL_PHP_CONFIG_TIMEZONE."</h2>";
if(strcmp($SCRIPT_TIMEZONE, $GLOBAL_PHP_CONFIG_TIMEZONE)){
    echo 'Script timezone differs from ini-set timezone.'; 
} else { 
    echo 'Script timezone and ini-set timezone match.'; 
} 
?>