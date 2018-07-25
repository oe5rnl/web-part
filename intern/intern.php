<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="oe5xll" content="width=device-width, initial-scale=1.0">
    <title>OE5XLL Web-Control</title>

    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script> -->
    <script type="text/javascript" src="../js/jquery.min.js"></script> 

    <link rel=stylesheet type="text/css" href="../css/style.css">

    <script  language="javascript">
      setInterval(function(){ $('#intern_status').load('../status.php'); },500);
    </script>

  </head>

<body onload="$('#intern_status').load('../status.php');">

<?

include ("../tools.php");

print h1();


$saved = $_GET['ret'];
if ( !empty($saved) && ($saved=="g") ) {
    print("<div id='intern_saved' >Squelch Wert wurde eingestellt !!!</div>");
}

?>
<form id='intern' action='intern_ex.php' method='POST' >

   <div id="intern_status"></div> 

       <div id='intern_sq_eingabe1'>2m Squelch Wert [00-ff]</label></div>    

   <div id='intern_sq_std'><label for='sq'> Standardwert: 9a </div>

   <div id='intern_sq_eingabe2'><input id='sq' name='sql' value='<? echo get2mSQvalue() ?>' maxlength='2' required pattern='^[0-9a-f]{2}$' > </div> 

   <div id='intern_send'> <button type="submit" id="send" >2m Squelch speichern </button></div>

   <div id='intern_links'> <? showLinks(getIP()); ?></div>

   <div id='intern_home'> <a href='../index.php'>Home</a><br></div> 

 <div id='intern_imp'>Version: 0.6 2017-12-05 by OE5RNL & OE5NVL & OE5XLL Team !</div>

</form>
</body>
</html>

