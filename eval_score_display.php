<?php

// include 'eval_score_SDE.php';

// echo $jobType;
// echo $skillScore;
// echo $courseScore;
// echo $internProjectScore;
// echo $majorScore;
$val0 = $_GET['new'];

$val = json_decode(urldecode($val0), TRUE);


$jobType = (string)$val["jobType"];
$skillScore = (float)$val["skillScore"];
$courseScore = (float)$val["courseScore"];
$schoolScore = (float)$val["schoolScore"];
$internProjectScore = (float)$val["internProjectScore"];
$majorScore = (float)$val["majorScore"];
$gpaScore = (float)$val["gpaScore"];

if ($jobType == "SDE") {
    $SDEScore = (float)$val["SDEScore"];
    $totalScore = $SDEScore;
}
elseif ($jobType == "DataScientist") {
    $DataScienScore = (float)$val["DataScienScore"];
    $totalScore = $DataScienScore;
}
elseif ($jobType == "DatabaseAdministrator") {
    $DatabaseAdministratorScore = (float)$val["DatabaseAdministratorScore"];
    $totalScore = $DatabaseAdministratorScore;
}
elseif ($jobType == "HardwareEngineer") {
    $HardwareEngineeringScore = (float)$val["HardwareEngineeringScore"];
    $totalScore = $HardwareEngineeringScore;
}
elseif ($jobType == "WebDeveloper") {
    $WebDeveloperScore = (float)$val["WebDeveloperScore"];
    $totalScore = $WebDeveloperScore;
}
elseif ($jobType == "ComputerArchitecture") {
    $ComputerArchScore = (float)$val["ComputerArchScore"];
    $totalScore = $ComputerArchScore;    
}
elseif ($jobType == "CyberSecurity") {
    $CyberSecurityScore = (float)$val["CyberSecurityScore"];
    $totalScore = $CyberSecurityScore;
}


// echo $jobType, $skillScore, $courseScore, $schoolScore, $internProjectScore, $majorScore, $gpaScore, $SDEScore;

$dataPoints = array(
	array("label"=> "Skill", "y"=> $skillScore),
	array("label"=> "Course", "y"=> $courseScore),
	array("label"=> "School", "y"=> $schoolScore),
	array("label"=> "Intern / Project", "y"=> $internProjectScore),
	array("label"=> "Major", "y"=> $majorScore),
	array("label"=> "GPA", "y"=> $gpaScore)
);


//Define Neural Network parameters
// $A11 = 0.0770313349159401; $A12 = 0.0591114887829076; $A13 = 0.014360346837359;
// $A21 = 0.0463538621260152; $A22 = -0.035143350695776; $A23 = 0.041917931262619;
// $A31 = 0.0694313350406391; $A32 = 0.0686791540852063; $A33 = 0.0606009229082465;
// $A41 = -0.0492948372474125; $A42 = 0.0779547043527066; $A43 = -0.044078593464859;
// $A51 = -0.0561539859508764; $A52 = 0.019351579856496; $A53 = 0.0565991182698927;
// $A61 = -0.071840296665542; $A62 = -0.0202841301490205; $A63 = 0.0585868908798231;


// $B11 = -0.0189953400376492; $B12 = 0.077083597569968; $B13 =	0.0172947540827558;
// $B21 =0.0794987866807712; $B22 =	0.04539457463924;	$B23 = -0.012274079338093;
// $B31 =0.0341619066585003; $B32 =-0.073510917884379;	$B33 =-0.0397189738409495;
// $B41 =0.0899904963814134; $B42 =0.051590919985668;	$B43 =0.0421971828930941;
// $B51 =0.0153157210422933;	$B52 =-0.0211349844369448;	$B53 =-0.0439274051546244;
// $B61 =-0.032208764029289;	$B62 =0.0163128367541039;	$B63 =-0.0194446460532885;
// $B71 =0.0100983048256924;	$B72 =-0.0125659182170902;	$B73 =-0.034247414628822;


// $C1 = -0.0142060656717044;
// $C2 = 0.0892463901319763;
// $C3 = -0.0423759777768464;

// $D1 = -0.0399913931588962;
// $D2 = -0.0212134207187377;
// $D3 = -0.064869990633553;
// $D4 = -0.0528633816134135;
// $D5 = 0.09561090547064;
// $D6 = -0.021615179958518;
// $D7 = 0.0169910287247355;

$A11 = 0.0381; $A12 = 0.5562; $A13 = 1.3146;
$A21 = 0.1677; $A22 = 0.2248; $A23 = 0.3637;
$A31 = 1.1475; $A32 = 0.3899; $A33 = 0.2744;
$A41 = 0.5449; $A42 = 0.5116; $A43 = 0.5591;
$A51 = 0.0264; $A52 = 0.4922; $A53 = 0.7903;
$A61 = 0.2174; $A62 = -0.1063; $A63 = -0.0963;


$B11 = 1.2553; $B12 = 1.2533; $B13 = 0.6353;
$B21 =-0.0946; $B22 = 0.0657;	$B23 = 0.0969;
$B31 =0.1742; $B32 =-0.0186;	$B33 =-0.2357;
$B41 =0.2713; $B42 =0.0595;	$B43 =0.1030;
$B51 =-0.4274;	$B52 =-0.3112;	$B53 =-0.4804;
$B61 =0.3676;	$B62 =1.0812;	$B63 =1.2006;
$B71 =0.0660;	$B72 =0.0874;	$B73 =0.4207;


$C1 = 0.2257;
$C2 = -0.4233;
$C3 = -0.2077;

$D1 = 0.8418;
$D2 = 0.0172;
$D3 = -0.3160;
$D4 = -0.7033;
$D5 = -0.3720;
$D6 = -0.0808;
$D7 = -0.6422;

$H1 = ($skillScore*$A11 + $courseScore*$A21 + $schoolScore*$A31 + $internProjectScore*$A41 + $majorScore*$A51 + $gpaScore*$A61 + $C1)/100.0;
$H2 = ($skillScore*$A12 + $courseScore*$A22 + $schoolScore*$A32 + $internProjectScore*$A42 + $majorScore*$A52 + $gpaScore*$A62 + $C2)/100.0;
$H3 = ($skillScore*$A13 + $courseScore*$A23 + $schoolScore*$A33 + $internProjectScore*$A43 + $majorScore*$A53 + $gpaScore*$A63 + $C3)/100.0;

//Relu Function
if ($H1 < 0 ) {
    $H1 = 0;
}
if ($H2 < 0 ) {
    $H2 = 0;
}
if ($H3 < 0 ) {
    $H3 = 0;
}

$O1 = $H1*$B11 + $H2*$B12 + $H3*$B13 + $D1;
$O2 = $H1*$B21 + $H2*$B22 + $H3*$B23 + $D2;
$O3 = $H1*$B31 + $H2*$B32 + $H3*$B33 + $D3;
$O4 = $H1*$B41 + $H2*$B42 + $H3*$B43 + $D4;
$O5 = $H1*$B51 + $H2*$B52 + $H3*$B53 + $D5;
$O6 = $H1*$B61 + $H2*$B62 + $H3*$B63 + $D6;
$O7 = $H1*$B71 + $H2*$B72 + $H3*$B73 + $D7;

//Softmax function
// echo $O1, $O2, $O3, $O4, $O5, $O6, $O7;

$P1 = exp($O1)/(exp($O1)+exp($O2)+exp($O3)+exp($O4)+exp($O5)+exp($O6)+exp($O7));
$P2 = exp($O2)/(exp($O1)+exp($O2)+exp($O3)+exp($O4)+exp($O5)+exp($O6)+exp($O7));
$P3 = exp($O3)/(exp($O1)+exp($O2)+exp($O3)+exp($O4)+exp($O5)+exp($O6)+exp($O7));
$P4 = exp($O4)/(exp($O1)+exp($O2)+exp($O3)+exp($O4)+exp($O5)+exp($O6)+exp($O7));
$P5 = exp($O5)/(exp($O1)+exp($O2)+exp($O3)+exp($O4)+exp($O5)+exp($O6)+exp($O7));
$P6 = exp($O6)/(exp($O1)+exp($O2)+exp($O3)+exp($O4)+exp($O5)+exp($O6)+exp($O7));
$P7 = exp($O7)/(exp($O1)+exp($O2)+exp($O3)+exp($O4)+exp($O5)+exp($O6)+exp($O7));

$dataPoints2 = array(
	array("label"=> "SDE", "y"=> $P1),
	array("label"=> "Data Analyst / Data Scientist", "y"=> $P2),
	array("label"=> "Database Administrator", "y"=> $P3),
	array("label"=> "Cyber Security", "y"=> $P4),
	array("label"=> "Hardware Engineer", "y"=> $P5),
	array("label"=> "Computer Architecture", "y"=> $P6),
	array("label"=> "Web Developer", "y"=> $P7)
);


	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

// var tt = "Your Score = ".$totalScore."!";
var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
        text: "Your Score ",
        // text: $totalScore.toString(),
	},
	
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}",
// 		yValueFormatString: "#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});

chart1.render();
 
 
var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "Likelihood to Each Jobs",
// 		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
        dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

}

</script>
</head>
<body>
<div id="chartContainer1" style="width: 45%; height: 300px;display: inline-block;"></div> 
<div id="chartContainer2" style="width: 45%; height: 300px;display: inline-block;"></div><br/>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<font size="6">
<?php
echo "Total Score is ", $totalScore;
?>
</body>
</html>
