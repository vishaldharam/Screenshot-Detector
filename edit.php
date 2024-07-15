<?php 
session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("apllication",$conn); 

if($_SESSION["LoginID"]==true){

     if(isset($_POST["btn_update"])){
     $target="image/";
      $name=$_FILES['img']['name'];
      $target=$target.basename($_FILES['img']['name']);
if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
     {

$upd=mysql_query("update reg_info set name='".$_POST["new_name"]."', email='".$_POST["new_email"]."', mobileno='".$_POST["new_mobileno"]."', DOB='".$_POST["new_DOB"]."', gender='".$_POST["new_gender"]."' , img='".$name."' , uname='".$_POST["new_uname"]."', pass='".$_POST["new_pass"]."'   where id=".$_POST["id"]);}

if ($upd) {
	header("location:index.php");
}


}
?>



<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Funchat</title>
<!--
App Starter Template
http://www.templatemo.com/tm-492-app-starter
-->
--><link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50" align="center">



<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>



<!-- Navigation Section -->

<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand"><span>Screenshot</span> Grabber</a>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php" class="smoothScroll">Home</a></li>
				
				                             <li><a href="message.php" class="smoothScroll">Message</a></li>

				<li><a href="notification.php" class="smoothScroll">Notification</a></li>
               
                <li><a href="logout.php" class="smoothScroll">Logout</a></li>
        		
			</ul>
		</div>

	</div>
</div>


<!-- Home Section -->

<section id="home" class="main">
     <div class="overlay"></div>
	<div class="container">
		<div class="row">

               <div class="wow fadeInUp col-md-12" data-wow-delay="0.2s">
                    <img  class="img-responsive" >
                    <center><h2>Edit Profile</h2></center>
	<?php
	
	$sql=mysql_query("select * from reg_info where id=".$_SESSION["id"]);
	$res=mysql_fetch_array($sql);
	

?>


                    <?php
                    
        $s7=mysql_query("select * from `reg_info` where id=".$_SESSION["id"]);
  $info2=mysql_fetch_array($s7);?><table class="table-condensed bg-danger" width="40%" align="center" >  
   <form method="post" enctype="multipart/form-data">
           <input type="hidden" name="id" value="<?php echo $info2["id"]; ?>"><tr height="80px"><td>
          <h3><input type="text" name="new_name" value="<?php echo $info2["name"]; ?>"class="form-control"></h3></td><td>
               <h3><input type="text" name="new_email" value="<?php echo $info2["email"]; ?>"class="form-control"></h3></td></tr><tr height="80px"><td>
                    <h3><input type="number" name="new_mobileno" value="<?php echo $info2["mobileno"]; ?>"class="form-control"></h3></td><td>
                         <h3><input type="text" name="new_DOB" value="<?php echo $info2["DOB"]; ?>"class="form-control"></h3></td></tr><tr height="80px"><td>
<h3><input type="text" name="new_gender" value="<?php echo $info2["gender"]; ?>"class="form-control"></h3></td><td>
 <h3><input type="file" name="img" value="<?php echo $info2["img"]; ?>"class="form-control"></h3></td></tr><tr height="80px"><td>
<h3><input type="text" name="new_uname" class="form-control" value="<?php echo $info2["uname"]; ?>"placeholder="Username"></h3></td><td>
<h3><input type="text" name="new_pass" class="form-control"value="<?php echo $info2["pass"]; ?>" placeholder="Password"></h3></td></tr></table><br><br>

                         <button name="btn_update" class="btn btn-warning">Update</button>
</form><?php  ?>
               </div>

               </div>

		</div>
	</div>
</section>



<!-- Back top -->

<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html><?php 
}else 
include("index.php");?>