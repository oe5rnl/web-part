<?php

//var_dump($_POST); 
$sq = $_POST['sql'];

$remote_ip = $_SERVER['REMOTE_ADDR'] ;
$heute = date("d.m.Y H:i:s "); 

$log_message  = $heute . " | " . $sq . " | " . $remote_ip . "\r\n";

$datei_handle=fopen("/etc/svxlink/script/sql_change.log",a);
fwrite($datei_handle, $log_message);
fclose($datei_handle);

$datei_handle=fopen("/etc/svxlink/script/SQL_value_2m",w);
fwrite($datei_handle,$sq);
fclose($datei_handle);

$cmd="/usr/sbin/i2cset -y 1 0x2d 0x08 0x$sq";
exec($cmd);

$mail_message = "<br>OE5XLL URC 2m Squelch changed<br><br>Datum: $heute<br>Squelch_level: $sq<br>Client IP: $remote_ip<br><br>vy 73 oe5xll"; 

$cmd="/etc/svxlink/script/mail.py \"$mail_message\" ";

$outputfile = "/var/run/xll-web-senmail.out";
$pidfile = "/var/run/xll-web-senmail.pid";

exec(sprintf("%s > %s 2>&1 & echo $! >> %s", $cmd, $outputfile, $pidfile));

usleep(100000);

header( 'Location: intern.php?ret=g' ) ;

?>

