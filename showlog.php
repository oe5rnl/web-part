<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="oe5xll" content="width=device-width, initial-scale=1.0">
    <title>OE5XLL Web-Control</title>

    <link rel=stylesheet type="text/css" href="css/style.css">

    <script  language="javascript">
    </script>

  </head>

<body>

<?php

include ("tools.php");

print h1();

?>

<div id='logtext'> <? print(nl2br( file_get_contents('/etc/svxlink/script/sql_change.log') )); ?> </div> 
</body>
</html>
