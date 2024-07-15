<?php 
$conn=mysql_connect("localhost","root","");
mysql_select_db("apllication",$conn);
if (isset($_POST["save"])) {
	$target="image/";
      $name=$_FILES['img']['name'];
      $target=$target.basename($_FILES['img']['name']);
if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
	{

		$sql=mysql_query("INSERT INTO `Apllication`.`reg_info` (`id`, `name`, `email`, `mobileno`, `DOB`, `gender`, `img`, `uname`, `pass`) VALUES ('".$_POST["id"]."','".$_POST["name"]."','".$_POST["email"]."','".$_POST["mobileno"]."','".$_POST["DOB"]."','".$_POST["gender"]."','".$name."','".$_POST["uname"]."','".$_POST["pass"]."')");}
	if ($sql) {
		echo "RECORD INSERTED";
		header("location:login.php");
	}
	else
		echo "NOT INSERTED";

}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title><link rel="stylesheet" type="text/css" href="bootstrap.css">
 </head>
 <body align="center" ><br><br>
<div class="col-md-12 colspan=2"><div class="col-md-4"></div><div class="col-md-3 "><img src="sun.png"></div><div class="col-md-5"></div></div><br><br><hr><table class="table-condensed bg-danger" width="40%" align="center" ><tr height="80px"><td>
 	<form method="post" enctype="multipart/form-data">
 		<input type="number" name="id" placeholder="id" class="form-control" required></td><td>
 		 <input type="text" name="name" placeholder="name" class="form-control" required></td></tr>
 		<tr height="80px"><td><input type="text" name="email" placeholder="email" class="form-control" required></td><td>
 		<input type="number" name="mobileno" placeholder="mobileno" class="form-control" required></td></tr><tr height="80px"><td>
 		<input type="text" name="DOB" placeholder="DOB" class="form-control" required></td><td>
        <input type="radio"  name="gender" value="male" required>Male
 <input type="radio"  name="gender" value="female"  required>Female</td></tr><tr height="80px"><td>
       <input type="file" name="img" required></td></tr><tr height="80px"><td>
        <input type="text" name="uname" placeholder="Username" class="form-control" required></td><td>
         <input type="Password" name="pass" placeholder="Password" class="form-control" required></td></tr></table><br><br>

 		<button name="save" class="btn btn-primary">SignIn</button>



 	</form>
 
 </body>
 </html>