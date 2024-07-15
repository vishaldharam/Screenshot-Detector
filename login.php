<?php $conn=mysql_connect("localhost","root","");
mysql_select_db("apllication",$conn);
session_start();

if (isset($_POST["save"])) {
$uname=$_POST["uname"];
$pass=$_POST["pass"];
if ($uname=="" or $pass=="") {
	echo "Username / Password is Empty";
}
else{
	$sql1=mysql_query("select * from `reg_info` where uname='$uname' and pass='$pass'");
	$var=mysql_num_rows($sql1);
	  if ($var!=0) {
         $row=mysql_fetch_array($sql1);
 
        $_SESSION["LoginID"]=true;
		$_SESSION["id"]=$row["id"];
		
	   header("location:index.php");
	   
	
	}}
	if($uname!=$_SESSION["uname"] && $pass!=$_SESSION["pass"] ){	echo "Wrong uname /pass";}

}



if (isset($_POST["new"])) {
	header("location:registration.php");
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body align="center" class="bg-warning">


<b>	<br><br><br><br><br><div class="col-md-12 ">&nbsp&nbsp<div class="col-md-4"></div><div class="col-md-4 bg-info"><img src="sun.png" class="bg-info"></div><div class="col-md-4"></div></div>
           <div class="col-md-12 "><div class="col-md-4" ></div><div class="col-md-4 bg-info">
<form method="post">
	<br><div style="height: 8px;"></div>
<input type="text" name="uname" placeholder="username" class="form-control" ><br>
	
	<div style="height: 8px;"></div>
<input type="password" name="pass" placeholder="Password" class="form-control" ><hr color="black">
	<button name="save" class="btn btn-primary">Login</button>&nbsp&nbsp

</form></b><div class="col-md-4"></div></div>

</body>
</html>