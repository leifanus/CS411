<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head itemscope="" itemtype="http://schema.org/WebSite"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
	<title itemprop="name">Dive into Job Pool</title>
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
<h1 id="hdrDescription">Hello we are TEAMMM from CS411@Illinois!</h1>

<p></p>

<p></p>

<p><span style="color:#AFEEEE;"><span style="font-size:22px;">All you care is getting a job.</span></span></p>

<p></p>

<p></p>

<!--<p><span style="color:#000000;"><span style="font-size:16px;">SELECT YOUR MAJOR YOU ARE INTERESTED</span></span></p>-->


<!--<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">-->
<!--    <p><span style="color:#ff9999;">PLEASE ENTER YOUR USERNAME</span></p >-->
    
    <!--<p><textarea cols="1" name="userName" required="required" rows="1"></textarea></p >-->
<!--    <p><span style="color:#ff9999;"><textarea cols="1" name="userName" required="required" rows="1"></textarea></span></p >-->
    
<!--    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT YOUR MAJOR</span></span></p >-->
    
<!--    <p><span style="color:#000000;"><input name="Major" type="radio" value="CS" /></span><span style="color:#aaaaaa;">CS</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;<input name="Major" type="radio" value="CE" /></span><span style="color:#aaaaaa;">CE</span><span style="color:#000000;"> &nbsp;&nbsp; </span></p >-->
    
<!--    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT YOUR SCHOOL</span></span></p >-->
    
<!--    <p><span style="color:#000000;"><span style="font-size:16px;"><input name="School" type="radio" value="UIUC" /></span></span><span style="color:#aaaaaa;">UIUC&nbsp;&nbsp; <input name="School" type="radio" value="CMU" />CMU&nbsp;&nbsp; <input name="School" type="radio" value="UCSD" />UCSD</span></p >-->
    
<!--    <p><span style="color:#ff9999;">ENTER YOUR GPA</span></p >-->
    
<!--    <p><span style="color:#ff9999;"><textarea cols="1" name="GPA" rows="1"></textarea></span></p >-->
    
<!--    <p></p >-->
    
<!--    <p><span style="color:#000000;"><input name="submit" type="submit" value="Submit" /></span></p >-->
<!--</form>-->


<form action="/search_display.php" method='Post'>
    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT THE MAJOR YOU ARE INTERESTED</span></span></p >
    
    <p><span style="color:#000000;"><input name="Major" type="radio" value="CS" />
    </span><span style="color:#000000;">CS</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="Major" type="radio" value="IE" /></span><span style="color:#000000;">IE</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Major" type="radio" value="ME" /></span><span style="color:#000000;">ME</span><span style="color:#000000;"> &nbsp;&nbsp; </span></p >
    <!--<input name="Major" type="radio" value="CE" /></span><span style="color:#000000;">CE</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Major" type="radio" value="Data Science" /></span><span style="color:#000000;">Data Science</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Major" type="radio" value="ECE" /></span><span style="color:#000000;">ECE</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Major" type="radio" value="IT" /></span><span style="color:#000000;">IT</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Major" type="radio" value="Physics" /></span><span style="color:#000000;">Physics</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Major" type="radio" value="Statistics" /></span><span style="color:#000000;">Statistics</span><span style="color:#000000;"> &nbsp;&nbsp;</span></p >-->
    
    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT THE COMPANY YOU ARE INTERESTED</span></span></p >
    
    <p><span style="color:#000000;"><input name="Company[]" type="checkbox" value="Google" />
    </span><span style="color:#000000;">Google</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="Company[]" type="checkbox" value="Facebook" /></span><span style="color:#000000;">Facebook</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Company[]" type="checkbox" value="Apple" /></span><span style="color:#000000;">Apple</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Company[]" type="checkbox" value="Amazon" /></span><span style="color:#000000;">Amazon</span><span style="color:#000000;"> &nbsp;&nbsp; </span></p >
    <!--<input name="Company[]" type="checkbox" value="Carle Foundation Hospital" /></span><span style="color:#000000;">Carle Foundation Hospital</span><span style="color:#000000;"> &nbsp;&nbsp; -->
    <!--<input name="Company[]" type="checkbox" value="Cruise Automation" /></span><span style="color:#000000;">Cruise Automation</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Company[]" type="checkbox" value="E1 Marketing Lab" /></span><span style="color:#000000;">E1 Marketing Lab</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Company[]" type="checkbox" value="GE" /></span><span style="color:#000000;">GE</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Company[]" type="checkbox" value="Goldman" /></span><span style="color:#000000;">Goldman</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Company[]" type="checkbox" value="IVM" /></span><span style="color:#000000;">IVM</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Company[]" type="checkbox" value="Lifion by ADP" /></span><span style="color:#000000;">Lifion by ADP</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Company[]" type="checkbox" value="McMaster-Carr" /></span><span style="color:#000000;">McMaster-Carr</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Company[]" type="checkbox" value="METROPOLITAN DIVISION" /></span><span style="color:#000000;">METROPOLITAN DIVISION</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Company[]" type="checkbox" value="McMaster-Carr" /></span><span style="color:#000000;">McMaster-Carr</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Company[]" type="checkbox" value="Northwestern Polytec" /></span><span style="color:#000000;">Northwestern Polytec</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Company[]" type="checkbox" value="Uber" /></span><span style="color:#000000;">Uber</span><span style="color:#000000;"> &nbsp;&nbsp;-->
    <!--<input name="Company[]" type="checkbox" value="ViaSat Inc." /></span><span style="color:#000000;">ViaSat Inc.</span><span style="color:#000000;"> &nbsp;&nbsp;</span></p >-->

    <!--<p><span style="color:#ff9999;"><span style="font-size:16px;">OTHER INFORMATION</span></span></p >-->
    
    <!--<p><span style="color:#000000;"><input name="Info" type="radio" value="Internships" />-->
    <!--</span><span style="color:#000000;">Internships</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;-->
    <!--<input name="Info" type="radio" value="Courses" /></span><span style="color:#000000;">Courses</span><span style="color:#000000;"> &nbsp;&nbsp;  </span></p >-->

  <p><span style="color:#000000;"><input name="submit" type="submit" value="Submit" /></span></p >

</form>



<form action="/update_UserInfo.php" method='Post'>
  <p><span style="color:#000000;"><input name="update" type="submit" value="Update My Profile" /></span></p >
</form>

<form action="/delete_userRecords.php" target="_self" method=“post”>
<p><span style="color:#000000;"><input name="deleteUserRecord" type="submit" value="Delete My Profile" /></span></p>
<!--<p><span style="color:#000000;"><input name="submit" type="submit" value="Submit" /></span></p>-->
</form>




</div>
</div>
</div>
</div>

</body>
 /.container --></div>
 /.intro-header --><!-- jQuery --><script src="js/jquery.js"></script><!-- Bootstrap Core JavaScript --><script src="js/bootstrap.min.js"></script></body>
</html>


</div>
</div>
</div>
</div>
 /.container --></div>
 /.intro-header --><!-- jQuery --><script src="js/jquery.js"></script><!-- Bootstrap Core JavaScript --><script src="js/bootstrap.min.js"></script></body>
</html>

