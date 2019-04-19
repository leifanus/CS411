<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head itemscope="" itemtype="http://schema.org/WebSite"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
	<title itemprop="name">Evaluate Yourself</title>
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
<h1 id="hdrDescription">Evaluate Yourself</h1>

<p></p>

<p></p>

<p><span style="color:#AFEEEE;"><span style="font-size:22px;">See how great you are!</span></span></p>

<p></p>

<p></p>


<form action="/eval_score_DatabaseAdministrator.php" method='Post'>
    <p><span style="color:#ff9999;"><span style="font-size:16px;">ENTER YOUR USERNAME</span></span></p >
    
    <p><span style="color:#ff9999;"><textarea cols="1" name="userName" required="required" rows="1"></textarea></span></p>
    
    
    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT YOUR SKILLS</span></span></p >
    
    <p><span style="color:#000000;">
    <input name="SkillSOM[]" type="checkbox" value="OracleOrMySQL" /></span><span style="color:#000000;">Oracle or MySQL</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="SkillSOM[]" type="checkbox" value="SQL" /></span><span style="color:#000000;">SQL</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="SkillOth[]" type="checkbox" value="PL/SQL" /></span><span style="color:#000000;">PL/SQL</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillOth[]" type="checkbox" value="ERP" /></span><span style="color:#000000;">ERP</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillOth[]" type="checkbox" value="SAP" /></span><span style="color:#000000;">SAP</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillOth[]" type="checkbox" value="XML" /></span><span style="color:#000000;">XML</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillOth[]" type="checkbox" value="CGI" /></span><span style="color:#000000;">CGI</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillOth[]" type="checkbox" value="Java" /></span><span style="color:#000000;">Java</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillOth[]" type="checkbox" value="Puby" /></span><span style="color:#000000;">Puby</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillOth[]" type="checkbox" value="SSL" /></span><span style="color:#000000;">SSL</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT YOUR INTERNS/PROJECTS</span></span></p >
    
    <p><span style="color:#000000;">
    <input name="InternProject[]" type="checkbox" value="DBDesignAndAdministration" /></span><span style="color:#000000;">Database Design and Administration</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="InternProject[]" type="checkbox" value="BackupAndRecovery" /></span><span style="color:#000000;">Backup and Recovery</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="InternProject[]" type="checkbox" value="PerformanceTuning" /></span><span style="color:#000000;">Performance Tuning</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="InternProjectOth[]" type="checkbox" value="Others" /></span><span style="color:#000000;">Others</span><span style="color:#000000;"> &nbsp;&nbsp; 


    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT COMPLETED COURSES</span></span></p >
    
    <p><span style="color:#000000;">
    <input name="Course1[]" type="checkbox" value="DBManagement" /></span><span style="color:#000000;">Database Management</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="Course1[]" type="checkbox" value="DBIntegrityAndSecurity" /></span><span style="color:#000000;">Database Integrity and Security</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Course1[]" type="checkbox" value="WebAppDesignAndCreation" /></span><span style="color:#000000;">Web Application Design and Creation</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Course2[]" type="checkbox" value="ArchitectureAndAdministration" /></span><span style="color:#000000;">Architecture And Administration</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Course2[]" type="checkbox" value="ObjectOrientedProgram" /></span><span style="color:#000000;">Object-Oriented Programming</span><span style="color:#000000;"> &nbsp;&nbsp; 

  <p><span style="color:#000000;"><input name="submit" type="submit" value="Evaluate" /></span></p >

</form>


</div>
</div>
</div>
</div>
</div>
</body>

</html>

