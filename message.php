  <?php 
$conn=mysql_connect("localhost","root","");
	
mysql_select_db("apllication",$conn);
session_start();
if($_SESSION["LoginID"]==true){



//for insert messages.....

if (isset($_POST["send"])) {
	$target="image/";
      $name=$_FILES['img1']['name'];
      $target=$target.basename($_FILES['img1']['name']);
$d=move_uploaded_file($_FILES['img1']['tmp_name'], $target);
	
	$o=mysql_query("INSERT INTO `message` ( `msg`, `to`, `from`, `date`,`img1`) VALUES ( '".$_POST["msg"]."','".$_POST["id"]."', '".$_SESSION["id"]."', '','".$name."')");}
	//for delete.....
	if (isset($_POST["delete"])) {

		 $del=mysql_query("delete from `message` where `to`=".$_POST["id"]);

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
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50" >


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

               
               <div class="wow fadeInUp col-md-12" data-wow-delay="0.1s" align="center">
                    <img  class="img-responsive" ><div class="col-md-2" align="left">
    <?php echo "<h2>#Friends:</h2>";    ?>         
 		<?php

     $s1=mysql_query("select * from `reg_info`");
     while ($row=mysql_fetch_array($s1)) {
     	echo "<table class='table-condensed' width='100%'align='center' border='2'><tr height='10px'><td width='180px'><a href='message.php?msg_id= $row[id]'><font size='4px' color='white'>$row[name]</font></a></td></tr></table>";

     	
     }



      ?>
	</div><div class="col-md-5" align="right">
		<?php 
		if (isset($_GET["msg_id"])) {
		   $s4=mysql_query("select * from `reg_info` where id=".$_GET["msg_id"]);
     $row4=mysql_fetch_array($s4);
     	echo "<br><br><br><table class='table-condensed' width='100%'align='center' border='0'><tr height='100px'><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src='image/$row4[img]'></img></td></tr></table>";
     

		  ?>
	</div><div class="col-md-3" align="left"><?php
        echo "<br><br><br><p>#Name:$row4[name]<br><br>#Mobileno:$row4[mobileno]<br><br>#DOB:$row4[DOB]<br><br>#Gender:$row4[gender]</p>";


	 ?><br><br><br><br><form method="post" enctype="multipart/form-data">
	 	<input type="hidden" name="id" value="<?php echo $_GET["msg_id"]; ?>"><input type="text" name="msg" placeholder="Message"class="form-control" ><br><input type="file" name="img1">
</div><div class="col-md-2" align="left"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<button name="send" class="btn btn-primary">Send</button>
<button name="delete" class="btn btn-danger">Delete All</button>
</form></div><?php } ?>
	

                   
              

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
</html>
<?php 
}
else 
	include("index.php");?>