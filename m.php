<?php

     $s2=mysql_query("SELECT `reg_info`.name, `message`.to, `message`.id,`message.`msg`,` `message`.`from`  FROM  `message` inner join reg_info on `message`.`to`=`reg_info`.id where `to`=".$_SESSION["id"]);
     while($n=mysql_fetch_array($s2)){echo "<table class='table-condensed bg-danger' width='40%'' align='center'> <tr><td></td><td>$n[name]-$n[msg]</td></td></tr></table>";}?>