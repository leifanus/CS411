<!DOCTYPE html>
<html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>



<?php

$db_host = "Localhost";
$db_username = "teammmproject_a";
$db_password = "teammmproject_a";
$db_name = "teammmproject_jobs";
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);


$q = $_POST['Major'];
$q2 = $_POST['Company'];
$size = sizeof($q2);
// echo $q2[2];

if ($q == "CS") {
    if ($q2== ""){
    $sql = "SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q';";
    $sql2 = "SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q' GROUP BY company ORDER BY company;";
    }
    else{
    if($size==1){
    $sql = "SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[0]';";
    $sql2 = "SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[0]' GROUP BY company ORDER BY company;";   
    }
    else if($size==2){
    $sql = "(SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[0]') UNION
            (SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[1]');";
    $sql2 = "(SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[0]' GROUP BY company ORDER BY company) UNION 
            (SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[1]' GROUP BY company ORDER BY company);";   
    }
    else if($size==3){
    $sql = "(SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[0]') UNION
            (SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[1]') UNION
            (SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[2]');";
    $sql2 = "(SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[0]' GROUP BY company ORDER BY company) UNION 
            (SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[1]' GROUP BY company ORDER BY company) UNION
            (SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[2]' GROUP BY company ORDER BY company);";   
    }
    else if($size==4){
    $sql = "(SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[0]') UNION
            (SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[1]') UNION
            (SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[2]') UNION
            (SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[3]') ;";
    $sql2 = "(SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[0]' GROUP BY company ORDER BY company) UNION 
            (SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[1]' GROUP BY company ORDER BY company) UNION
            (SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[2]' GROUP BY company ORDER BY company) UNION
            (SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[3]' GROUP BY company ORDER BY company);";   
    }
    else if($size==5){
    $sql = "(SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[0]') UNION
            (SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[1]') UNION
            (SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[2]') UNION
            (SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[3]') UNION
            (SELECT studentID, company, job FROM Students NATURAL JOIN Education WHERE major = '$q' AND company = '$q2[4]');";
    $sql2 = "(SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[0]' GROUP BY company ORDER BY company) UNION 
            (SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[1]' GROUP BY company ORDER BY company) UNION
            (SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[2]' GROUP BY company ORDER BY company) UNION
            (SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[3]' GROUP BY company ORDER BY company) UNION
            (SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q'AND company = '$q2[4]' GROUP BY company ORDER BY company);";   
    }
    }
}
else if ($q == "IE") {
    $sql = "SELECT DISTINCT * FROM Students NATURAL JOIN Education WHERE major = '$q';";
    $sql2 = "SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q' GROUP BY company ORDER BY company;";
}
else if ($q == "ME") {
    $sql = "SELECT DISTINCT * FROM Students NATURAL JOIN Education WHERE major = '$q';";
    $sql2 = "SELECT company, count(*) AS Number FROM Students NATURAL JOIN Education WHERE major = '$q' GROUP BY company ORDER BY company;";
}

$result = $mysqli->query($sql);
$result2 = $mysqli->query($sql2);

echo "<table border='2'> 
<tr>
<th>studentID</th>
<th>company</th>
<th>job</th>
</tr>";


if (mysqli_num_rows($result)) {
    while($row = $result->fetch_assoc()){
          echo "<tr>";
          echo "<td>" . $row['studentID'] . "</td>";
          echo "<td>" . $row['company'] . "</td>";
          echo "<td>" . $row['job'] . "</td>";
          echo "</tr>";
    }
}

// if (mysqli_num_rows($result)) {
//     // header('Location: ../job_major.php');
//     // exit();
//     while($row = $result->fetch_assoc()){
//         echo("CS: " . $row["studentID"]. "<br/>");
//     }
// }

// else {
//     echo("0 result");
    
// }

if (mysqli_num_rows($result2)) {
    while($row = $result2->fetch_assoc()){
          echo "There are ". $row['Number']. " students". " in ". $row['company'] . "."."<br/>";
        //   echo $row['company'] . $row['Number']. "<br/>";
    }
}

$mysqli->close();

?>

</body>
</html>
