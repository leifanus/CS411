<?php
session_start();

?>

<!--if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){-->
<!--    header("location: login.php");-->
<!--    exit;-->
<!--}-->

<!DOCTYPE html>
<html lang="en">
<head 

</head>
<body>
<div class="intro-header">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="intro-message">
<h1 id="hdrDescription">Hola</h1>

<p></p>

<p></p>

<p><span style="color:#AFEEEE;"><span style="font-size:22px;">All you care is getting a job.</span></span></p>

<p></p>

<p></p>


<?php

$db_host = "Localhost";
$db_username = "teammmproject_a";
$db_password = "teammmproject_a";
$db_name = "teammmproject_jobs";
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);


$q = $_POST['major'];

if ($q == "CS") {
    $sql = "SELECT studentID FROM Education WHERE major = '$q';";
}
else if ($q == "IE") {
    $sql = "SELECT DISTINCT job FROM Students NATURAL JOIN Education WHERE major = '$q';";
}
else if ($q == "ME") {
    $sql = "SELECT DISTINCT job FROM Students NATURAL JOIN Education WHERE major = '$q';";
}

$result = $mysqli->query($sql);

if (mysqli_num_rows($result)) {
    // header('Location: ../job_major.php');
    // exit();
    while($row = $result->fetch_assoc()){
        echo("CS: " . $row["studentID"]. "<br/>");
    }
}

else {
    echo("0 result");
    
}

$mysqli->close();
?>


</div>
</div>
</div>
</div>
<!-- /.container --></div>
<!-- /.intro-header --><!-- jQuery --><script src="js/jquery.js"></script><!-- Bootstrap Core JavaScript --><script src="js/bootstrap.min.js"></script></body>
</html>