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


<form action="/eval_score_HardwareEngineer.php" method='Post'>
    <p><span style="color:#ff9999;"><span style="font-size:16px;">ENTER YOUR USERNAME</span></span></p >
    
    <p><span style="color:#ff9999;"><textarea cols="1" name="userName" required="required" rows="1"></textarea></span></p>
    
    
    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT YOUR SKILLS</span></span></p >
    
    <p><span style="color:#000000;">
    <input name="SkillC[]" type="checkbox" value="C" /></span><span style="color:#000000;">C</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="SkillC[]" type="checkbox" value="Cpp" /></span><span style="color:#000000;">C++</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="SkillCFV[]" type="checkbox" value="CAD" /></span><span style="color:#000000;">CAD</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillCFV[]" type="checkbox" value="FPGA" /></span><span style="color:#000000;">FPGA</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="SkillCFV[]" type="checkbox" value="Verilog" /></span><span style="color:#000000;">Verilog</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT YOUR INTERNS/PROJECTS</span></span></p >
    
    <p><span style="color:#000000;">
    <input name="InternProject[]" type="checkbox" value="EmbeddedProgramming" /></span><span style="color:#000000;">Embedded Programming</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="InternProject[]" type="checkbox" value="DesignAndManufactureDevices" /></span><span style="color:#000000;">Design and Manufacture Devices</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="InternProjectOth[]" type="checkbox" value="Others" /></span><span style="color:#000000;">Others</span><span style="color:#000000;"> &nbsp;&nbsp; 


    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT COMPLETED COURSES</span></span></p >
    
    <p><span style="color:#000000;">
    <input name="Course1[]" type="checkbox" value="ComputerProgramming" /></span><span style="color:#000000;">Computer Programming</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;
    <input name="Course1[]" type="checkbox" value="ComputerSystem" /></span><span style="color:#000000;">Computer System</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Course1[]" type="checkbox" value="ComputerArchitecture" /></span><span style="color:#000000;">Computer Architecture</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Course1[]" type="checkbox" value="ElectronicalEngineeringFundamentals" /></span><span style="color:#000000;">Electronical Engineering Fundamentals</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Course2[]" type="checkbox" value="CircuitsAndOhmslaw" /></span><span style="color:#000000;">Circuits and Ohm's Law</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Course2[]" type="checkbox" value="ControlSystems" /></span><span style="color:#000000;">Control Systems</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Course2[]" type="checkbox" value="EngineeringDesign" /></span><span style="color:#000000;">Engineering Design</span><span style="color:#000000;"> &nbsp;&nbsp; 
    <input name="Course2[]" type="checkbox" value="BoardDesign" /></span><span style="color:#000000;">Board Design</span><span style="color:#000000;"> &nbsp;&nbsp; 
  <p><span style="color:#000000;"><input name="submit" type="submit" value="Evaluate" /></span></p >

</form>


</div>
</div>
</div>
</div>
</div>
</body>

</html>

