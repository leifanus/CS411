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

$q = $_POST['userName'];


$sql = "SELECT * FROM UserInfo WHERE userName = '$q'";

$result = $mysqli->query($sql);

echo "<table border='2'> 
<tr>
<th>userName</th>
<th>Major</th>
<th>School</th>
<th>GPA</th>
</tr>";


if (mysqli_num_rows($result)) {
    while($row = $result->fetch_assoc()){
          echo "<tr>";
          echo "<td>" . $row['userName'] . "</td>";
          echo "<td>" . $row['Major'] . "</td>";
          echo "<td>" . $row['School'] . "</td>";
          echo "<td>" . $row['GPA'] . "</td>";
          echo "</tr>";
    }
}

else {
    echo("User Info is empty.");
    
}

$mysqli->close();

?>

</body>
</html>