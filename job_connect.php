<?php
echo "blueberry black tea";
// mysqli
$db_host = "cpanel3";
$db_username = "teammmproject_jobs";
$db_password = "teammm411!";
$db_name = "teammmproject_jobs";

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

echo "peach flavor";

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" .$mysqli->connect_errno .")" . $mysqli->connect_error;
}
else echo "Connected.";

?>