<?php
$db_host = "Localhost";
$db_username = "teammmproject_a";
$db_password = "teammmproject_a";
$db_name = "teammmproject_jobs";
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);


 
// Define variables and initialize with empty values
$Major = $School = $GPA = "";
// $Major_err = $School_err = $GPA_err = 
$userName_err = "";
$userName = $_POST["userName"];
$sqlFindUser = "SELECT userName FROM UserInfo WHERE userName = '$userName'"; 
$resultFind = $mysqli->query($sqlFindUser);
$rowFind = $resultFind->fetch_assoc();

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($userName))){
        $userName_err = "Please enter your username.";
    }
    else{
        $userName = trim($userName);
        
        if(empty(trim($_POST["Major"]))){
            $sqlMajor = "SELECT Major FROM UserInfo WHERE userName = '$userName'";
            $resultMajor = $mysqli->query($sqlMajor);
            $Major = mysqli_fetch_row($resultMajor);
            
            //$Major = $temp["Major"];
            
        }
        if(!empty(trim($_POST["Major"]))){
            $Major = trim($_POST["Major"]);
        }
        
        if(empty(trim($_POST["School"]))){
            $sqlSchool = "SELECT School FROM UserInfo WHERE userName = '$userName'";
            $School = $mysqli->query($sqlSchool);
        }
        else{
            $School = trim($_POST["School"]);
        }
        
        if(empty(trim($_POST["GPA"]))){
            $sqlGPA = "SELECT GPA FROM UserInfo WHERE userName = '$userName'";
            $GPA = $mysqli->query($sqlGPA);
        }
        else{
            $GPA = trim($_POST["GPA"]);
        }
    }
    
    
    
    
    
    // Check input errors before inserting in database
    if(empty($userName_err)){
        if (sizeof($rowFind) == 0) {
            $sql = "INSERT INTO UserInfo (UserName, Major, School, GPA) VALUES (?, ?, ?, ?)";
        }
        else {
            $sql = "UPDATE UserInfo SET Major = '$Major', School = '$School', GPA = '$GPA' WHERE userName = '$userName'";
        }
         
        if($stmt = mysqli_prepare($mysqli, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssd", $param_userName, $param_Major, $param_School, $param_GPA);
            
            // Set parameters
            $param_userName = $userName;
            $param_Major = $Major;
            $param_School = $School;
            $param_GPA = $GPA;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: infoInput_success.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($mysqli);
}
?>
 





<!DOCTYPE html>
<html lang="en">
<head itemscope="" itemtype="http://schema.org/WebSite"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://teammmproject.web.illinois.edu" itemprop="url" rel="canonical" />
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
<h1 id="hdrDescription">What's New?</h1>

<p></p>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    
    <p><span style="color:#ff9999;">PLEASE ENTER YOUR USERNAME</span></p>
    
    <p><span style="color:#ff9999;"><textarea cols="1" name="userName" required="required" rows="1"></textarea></span></p>
    <!--<p><textarea cols="1" name="userName" required="required" rows="1"></textarea></p>-->
    
    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT YOUR MAJOR</span></span></p>
    
    <p><span style="color:#000000;"><input name="Major" type="radio" value="CS" /></span><span style="color:#aaaaaa;">CS</span><span style="color:#000000;">&nbsp;&nbsp; &nbsp; &nbsp;<input name="Major" type="radio" value="CE" /></span><span style="color:#aaaaaa;">CE</span><span style="color:#000000;"> &nbsp;&nbsp; </span></p>
    
    <p><span style="color:#ff9999;"><span style="font-size:16px;">SELECT YOUR SCHOOL</span></span></p>
    
    <p><span style="color:#000000;"><span style="font-size:16px;"><input name="School" type="radio" value="UIUC" /></span></span><span style="color:#aaaaaa;">UIUC&nbsp;&nbsp; <input name="School" type="radio" value="CMU" />CMU&nbsp;&nbsp; <input name="School" type="radio" value="UCSD" />UCSD</span></p>
    
    <p><span style="color:#ff9999;">ENTER YOUR GPA</span></p>
    
    <p><span style="color:#ff9999;"><textarea cols="1" name="GPA" rows="1"></textarea></span></p>
    
    <p></p>
    
    <p><span style="color:#000000;"><input name="submit" type="submit" value="Submit" /></span></p>
</form>
</div>
</div>
</div>
<!-- /.container --></div>
<!-- /.intro-header --><!-- jQuery --><script src="js/jquery.js"></script><!-- Bootstrap Core JavaScript --><script src="js/bootstrap.min.js"></script></div>
</body>
</html>