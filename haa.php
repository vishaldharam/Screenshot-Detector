<?php 
session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("appllication",$conn);
  ?> <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
 <?php  
$sql9=mysql_query("select * from `reg_info` where id=".$_GET["id"]);
	while($res=mysql_fetch_array($sql9))
	{
  echo "<a href='haa.php?id=$res[id]'>View</a>";
 }
  
if(isset($_GET["id"])){

        $row=mysql_fetch_array($sql9); 
                     echo "$row[name]"; }
                 
                 ?>
  </body>
  </html>
 