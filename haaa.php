<?php 
session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("apllication",$conn);?>

<!DOCTYPE html>
<html>
<head>
     <title></title>
</head>
<body><table width="100%" border="0">
     <tr height="70px"><td><span><center>FUN</span>CHAT</center></td><td align="center"  bgcolor="white"><font color="black"> <a href="index.php"> HOME </a>| <a href="profile.php"> PROFILE </a>| <a href="notification.php">NOTIFICATION</a> | <a href="logout.php">LOGOUT</a></font></td></tr>
</table>
<?php 
           


        $sql9=mysql_query("select * from `apllication`.`reg_info` where id=122");
        $row=mysql_fetch_array($sql9);  ?> 
         
               <table width="50%" border="1" ><tr height="600px"> <td><?php echo " $row[name]";?> </td></tr>

</body>
</html>