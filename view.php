  <?php 
$conn=mysql_connect("localhost","root","");
mysql_select_db("apllication",$conn);
# code...

		 $sql=mysql_query("select * from `apllication`.`message` where `to`='107'");
		 $row=mysql_fetch_array($sql);
		 echo $row[msg];
	
	 ?>