<?php

//print date("U");

include ("tools.php");

?>

<div id='sq_2'  > <? print getGPIOstate("SQ2"  ,"gpio23", "s1") ?> </div>
<div id='sq_70' > <? print getGPIOstate("SQ70" ,"gpio4" , "s2") ?> </div>
<div id='ptt_su'> <? print getGPIOstate("PTT"   ,"gpio18", "s3") ?> </div> 


