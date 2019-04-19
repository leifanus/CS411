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
