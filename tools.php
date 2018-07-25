<?
/*
$_2MSQL   = "gpio23";
$_70CMSQL = "gpio4";
$_SUSQL   = "gpio31";

$_PTTGES  = "gpio18";
$_PTT2M   = "gpio24";
$_PTT70CM = "gpio17";
*/

function getIP()
{
  return $_SERVER['REMOTE_ADDR'];
}

function getGPIOstate($text, $gpio, $style)
//function getGPIOstate($text, $gpio)
{
  $cmd = "cat /sys/class/gpio/$gpio/value";
  exec($cmd, $ret);
  if ($ret[0] == "0") {
    $gpio_state = "<div id='gpio_color_off'><div id='$style'>$text</div></div>";
    //$gpio_state = "<div id='gpio_color_off'>$text</div>";
  }
  else {
    $gpio_state = "<div id='gpio_color_on'><div id='$style'>$text</div></div>";
    //$gpio_state = "<div id='gpio_color_on'>$text</div>";
  }
  return $gpio_state;
}

function get2mSQvalue()
{
  return file_get_contents('/etc/svxlink/script/SQL_value_2m');
}

function showLinks($ip)
{
  list ($ip1, $ip2, $ip3, $p4) = split('[.]', $ip);

  if ($ip1 == "44") { ?>
    <a href='http://44.143.104.1'>Windows Webserver</a><br>
    <a href='http://44.143.104.2'>Kamera</a><br>
    <a href='http://44.143.104.3'>NetIO-Control</a><br>
  <? } else { ?>
    <a href='http://oe5xxx.ham-radio-op.net'>NetIO-Control</a><br>
  <? }

}

function h1()
{
  $ret = "<div id='h1'><h1>OE5XLL Web-Control</h1></div>";
  return $ret;
}


?>

