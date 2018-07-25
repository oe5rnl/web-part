<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="oe5xll" content="width=device-width, initial-scale=1.0">
    <title>OE5XLL Web-Control</title>
    <link rel=stylesheet type="text/css" href="css/style.css"> 

    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script> -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>

    <script  language="javascript">
        setInterval(function(){ $('#main_status').load('status.php'); },500);
        setInterval(function(){ $('#uptime').load('uptime.php'); },1000);
     </script>

  </head>

<body onload="$('#main_status').load('status.php'); $('#uptime').load('uptime.php');"> 

<?

include ("tools.php");

print h1(); 

?>

<form>
   <div id='main_ip'> <? print("Deine IP-Adresse: " .  getIP() )  ?></div>
   <div id='main_sq_value'> <br><br>Aktueller 2m Squelch Wert: <? print get2mSQvalue() ?> </div> 

   <div id='main_status'></div> 

   <div id='main_save_link'> <a href='./intern/intern.php'>2m Squelch einstellen</a> </div>
   <div id='main_showlog'> <a href='./showlog.php'>Show Logfile</a> </div>
   <div id='main_links'> <? showLinks(getIP()); ?> </div> 

   <div id='uptime'></div> 

   <div id='imp'>Version: 0.6 2017-12-05 by OE5RNL & OE5NVL & OE5XLL Team !</div>

</form>

</body>
</html>

