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


<form action="/eval_score_CyberSecurity.php" method='Post'>
    <p><span style="color:#ff9999;"><span style="font-size:16px;">ENTER YOUR USERNAME</span></span></p >
    
    <p><span style="color:#ff9999;"><textarea cols="1" name="userName" required="required" rows="1"></textarea></span></p>
    
    
    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT YOUR SKILLS</span></span></p >
    
    <p><span style="color:#000000;">
    <input name="SkillCONCJ[]" type="checkbox" value="C" /></span><span style="color:#000000;">C</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="SkillCONCJ[]" type="checkbox" value="OperatingSystem" /></span><span style="color:#000000;">Operating System</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="SkillCONCJ[]" type="checkbox" value="NET" /></span><span style="color:#000000;">.NET</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="SkillCONCJ[]" type="checkbox" value="C++" /></span><span style="color:#000000;">C++</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="SkillCONCJ[]" type="checkbox" value="Java" /></span><span style="color:#000000;">Java</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="SkillCPIDT[]" type="checkbox" value="C#" /></span><span style="color:#000000;">C#</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillCPIDT[]" type="checkbox" value="PHP" /></span><span style="color:#000000;">PHP</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillCPIDT[]" type="checkbox" value="IDSorIPS" /></span><span style="color:#000000;">IDS or IPS</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillCPIDT[]" type="checkbox" value="DLP" /></span><span style="color:#000000;">DLP</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillCPIDT[]" type="checkbox" value="CTCPorIP" /></span><span style="color:#000000;">TCP or IP</span><span style="color:#000000;"> &nbsp;&nbsp; 


    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT YOUR INTERNS/PROJECTS</span></span></p >
    
    <p><span style="color:#000000;">
    <input name="InternProject[]" type="checkbox" value="Firewall&IntrusionDetection" /></span><span style="color:#000000;">Firewall and Intrusion Detection</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="InternProject[]" type="checkbox" value="Operating Systems" /></span><span style="color:#000000;">Operating Systems</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="InternProject[]" type="checkbox" value="NetworkProtocols&PacketAnalysis" /></span><span style="color:#000000;">Network Protocols and Packet Analysis</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="InternProject[]" type="checkbox" value="CloudComputing" /></span><span style="color:#000000;">Cloud Computing</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="InternProject[]" type="checkbox" value="SaaS" /></span><span style="color:#000000;">SaaS</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="InternProject[]" type="checkbox" value="SecurityInfo&EventManagement" /></span><span style="color:#000000;">Security Info & Event Management</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="InternProjectOth[]" type="checkbox" value="Others" /></span><span style="color:#000000;">Others</span><span style="color:#000000;"> &nbsp;&nbsp; 


    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT COMPLETED COURSES</span></span></p >
    
    <p><span style="color:#000000;">
    <input name="CourseISCDI[]" type="checkbox" value="InformationSystems" /></span><span style="color:#000000;">Information Systems</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="CourseISCDI[]" type="checkbox" value="SecuritySystems" /></span><span style="color:#000000;">Security Systems</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="CourseISCDI[]" type="checkbox" value="CyberDefense" /></span><span style="color:#000000;">Cyber Defense</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="CourseISCDI[]" type="checkbox" value="DataCommunications&Networking" /></span><span style="color:#000000;">Data Communications & Networking</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="CourseISCDI[]" type="checkbox" value="InformationTechnology" /></span><span style="color:#000000;">Information Technology</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="CourseE[]" type="checkbox" value="EthicsLaw&Policy" /></span><span style="color:#000000;">Ethics, Law & Policy</span><span style="color:#000000;"> &nbsp;&nbsp; 


  <p><span style="color:#000000;"><input name="submit" type="submit" value="Evaluate" /></span></p >

</form>


</div>
</div>
</div>
</div>
</div>
</body>

</html>
