<?php


function getUptime()
{
  $cmd = "/usr/bin/uptime";
  exec($cmd, $ret);
  return $ret[0];
}

//print date("U");

print getUptime();

?>
