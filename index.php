<?php 
session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("apllication",$conn);
if($_SESSION["LoginID"]==true){

if(isset($_GET["profile"])){

header("location:profile.php");

}

if(isset($_GET["message"])){

header("location:message.php");

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
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50" class="bg-warning" align="center">


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

               <div class="wow fadeInUp col-md-7 col-sm-5" data-wow-delay="0.2s">
                    <img  class="img-responsive" ></div>
<div class="col-md-12"><h1>Welcome to Sreenshot Grabber</h1></div><br><br>
     <div class="col-md-12"></div> <div class="col-md-12">
     <div class="col-md-8" align="right"> <h2> <?php         
if (isset($_SESSION["id"])) {
          
          $sql9=mysql_query("select * from `reg_info`where id=".$_SESSION["id"]);
       while( $row1=mysql_fetch_array($sql9)){?>
            <a href="profile.php ">
        <?php echo "<br>Hiiii... $row1[name]";   ?></a>  </h2>
          </div>
          <div class="col-md-4" align="left"><a href="profile.php"><?php echo "<img src='image/$row1[img]' height=100px width=100px></img>";?></a><?php  }} ?>
          
          </div> </div>  
     <div class="col-md-12">
<form method="get">
     <button name="profile" class="btn btn-primary">Profile</button> &nbsp&nbsp&nbsp
     <button name="message" class="btn btn-success">Message</button>
    
</form>
  


 
         
             

          

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
include("login.php");
?>