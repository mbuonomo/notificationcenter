<?php

require 'class.notification.php';

$obj = new notificationcenter('http://176.31.127.193:8000/faye', '/messages');
$t = $obj->shoot('test', 'system');
$fp = fopen('last.txt', 'w');
fwrite($fp, time());
fclose($fp);
?>