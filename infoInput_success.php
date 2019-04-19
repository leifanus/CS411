<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head itemscope="" itemtype="http://schema.org/WebSite"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://teammmproject.web.illinois.edu" itemprop="url" rel="canonical" />
	<title itemprop="name">Information Input Successful!</title>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" /><!-- Custom CSS -->
	<link href="css/landing-page.css" rel="stylesheet" /><!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" /><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="intro-header">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="intro-message">
<h1 id="hdrDescription">Input Successful!</h1>
<p><span style="color:#ff9999;">Now you can start the journey!</span></p >
<p></p>

<!--<form action="/show_profile.php" target="_self" method=“post”>-->
<!--<p><span style="color:#ff9999;">PLEASE ENTER YOUR USERNAME</span></p>-->
<!--<p><span style="color:#ff9999;"><textarea cols="10" name="userName" required="required" rows="1"></textarea></span></p>-->
<!--<p><span style="color:#000000;"><input name="show your profile" type="submit" value="show your profile" /></span></p>-->
<!--</form>-->
<form action="/show_profile.php" method='Post'>
    <p><span style="color:#ff9999;"><span style="font-size:16px;">PLEASE ENTER YOUR USERNAME</span></span></p >
    <span style="color:#ff9999;"><textarea cols="10" name="userName" required="required" rows="1"></textarea></span>
  <p><span style="color:#000000;"><input name="submit" type="submit" value="Submit" /></span></p >

</form>


<form action="/search_engine.php" target="_self" method=“post”>
<p><span style="color:#000000;"><input name="search" type="submit" value="Dive Into Job Pool" /></span></p>
</form>

</div>
</div>
</div>
<!-- /.container --></div>
<!-- /.intro-header --><!-- jQuery --><script src="js/jquery.js"></script><!-- Bootstrap Core JavaScript --><script src="js/bootstrap.min.js"></script></div>
</body>
</html>