<?php

$db_host = "Localhost";
$db_username = "teammmproject_a";
$db_password = "teammmproject_a";
$db_name = "teammmproject_jobs";
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

$userName = $_POST['userName'];
$userName_err = "";
if(empty(trim($userName))){
    $userName_err = "Please enter your username.";
}
else{
    $userName = trim($_POST["userName"]);
}

if(empty($userName_err)) {

    $sql = "SELECT Major, School, GPA FROM UserInfo WHERE userName = '$userName'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    
    $major = $row['Major'];
    $school = $row['School'];
    $gpa = $row['GPA'];
    
    $sql2 = "SELECT rank FROM Schools WHERE schoolName = '$school'";
    $result2 = $mysqli->query($sql2);
    $row2 = $result2->fetch_assoc();
    $rank = $row2['rank'];
    
    $skillHPADJ = $_POST['SkillHPADJ'];
    $skillPJC = $_POST['SkillPJC'];
    
    $internProject = $_POST['InternProject'];
    $internProjectOth = $_POST['InternProjectOth'];
    
    $courseDB = $_POST['CourseDB'];
    $courseUI = $_POST['CourseUI'];
    
    $jobType = "WebDeveloper";
    $skillScore = sizeof($skillHPADJ) * 15.00 + sizeof($skillPJC) * 2.50;
    $courseScore = sizeof($courseUI) * 45.00 + sizeof($courseDB) * 10.00;
    $schoolScore = $rank * 20.00;
    
    if (sizeof($internProject) >= 4) {
        $internProjectScore = 80.00 + sizeof($internProjectOth) * 20.00;
    }
    else {
        $internProjectScore = sizeof($internProject) / 4.00 * 80.00 + sizeof($internProjectOth) * 20.00;
    }
    
    
    if ($major == 'CS') {
        $majorScore = 100.00; 
    }
    else {
        $majorScore = 0.00;
    }
    
    
    if ($gpa >= 2.8 && $gpa < 3.0) {
        $gpaScore = 40.00;
    }
    elseif ($gpa >=3.0 && $gpa < 3.5) {
        $gpaScore = 60.00;
    }
    elseif ($gpa >=3.5 && $gpa < 3.75) {
        $gpaScore = 80.00;
    }
    elseif ($gpa >= 3.75 && $gpa <= 4.0) {
        $gpaScore = 100.00;
    }
    else {
        $gpaScore = 0.00;
    }
    
    
    $WebDeveloperScore = $skillScore * 0.3 + $internProjectScore * 0.35 + $majorScore * 0.15 + $gpaScore * 0.1 + $schoolScore * 0.05 + $courseScore * 0.05;
    // echo("skill = ");
    // echo($skillScore);
    // echo(" intern = ");
    // echo($internProjectScore);
    // echo(" major = ");
    // echo($majorlScore);
    // echo(" gpa = ");
    // echo($gpaScore);
    // echo(" userSchool");
    // echo($school);
    // echo(" rank = ");
    // echo($rank);
    // echo(" school = ");
    // echo($schoolScore);
    // echo(" WebDeveloperScore = ");
    // echo($WebDeveloperScore);

    $sql3 = "SELECT userName, jobType FROM Score WHERE userName = '$userName' AND jobType = '$jobType'";
    $result3 = $mysqli->query($sql3);

    if (mysqli_num_rows($result3)) {
        $sqlUpdate = "UPDATE Score SET skillScore = '$skillScore', courseScore = '$courseScore', internProjectScore = '$internProjectScore', majorScore = '$majorScore', gpaScore = '$gpaScore', schoolScore = '$schoolScore', totalScore = '$WebDeveloperScore' WHERE userName = '$userName' AND jobType = '$jobType'";
        if ($stmt = mysqli_prepare($mysqli, $sqlUpdate)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssddddddd", $param_userName, $param_jobType, $param_skill, $param_course, $param_internProject, $param_major, $param_gpa, $param_school, $param_total);
            
            // Set parameters
            $param_userName = $userName;
            $param_jobType = $jobType;
            $param_skill = $skillScore;
            $param_course = $courseScore;
            $param_school = $schoolScore;
            $param_internProject = $internProjectScore;
            $param_major = $majorScore;
            $param_gpa = $gpaScore; 
            $param_total = $WebDeveloperScore;
    
            $comb = array("jobType" => (string)$jobType,  
              "skillScore" => (string)$skillScore,
              "courseScore" => (string)$courseScore,
              "schoolScore" => (string)$schoolScore,
              "internProjectScore" => (string)$internProjectScore,
              "majorScore" => (string)$majorScore,
              "gpaScore" => (string)$gpaScore,
              "WebDeveloperScore" => (string)$WebDeveloperScore
              );
            $param = urlencode(json_encode($comb));
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                header("location: eval_score_display.php?new=$param");
            } 
            else {
                echo "Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    else {
        // Prepare an insert statement
        $sqlInsert = "INSERT INTO Score (userName, jobType, skillScore, courseScore, internProjectScore, majorScore, gpaScore, schoolScore, totalScore) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        if($stmt = mysqli_prepare($mysqli, $sqlInsert)) {
        // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssddddddd", $param_userName, $param_jobType, $param_skillScore, $param_courseScore, $param_internProjectScore, $param_majorScore, $param_gpaScore, $param_schoolScore, $param_totalScore);
            
            // Set parameters
            $param_userName = $userName;
            $param_jobType = $jobType;
            $param_skillScore = $skillScore;
            $param_courseScore = $courseScore;
            $param_schoolScore = $schoolScore;
            $param_internProjectScore = $internProjectScore;
            $param_majorScore = $majorScore;
            $param_gpaScore = $gpaScore; 
            $param_totalScore = $WebDeveloperScore;
    
            $comb = array("jobType" => (string)$jobType,  
              "skillScore" => (string)$skillScore,
              "courseScore" => (string)$courseScore,
              "schoolScore" => (string)$schoolScore,
              "internProjectScore" => (string)$internProjectScore,
              "majorScore" => (string)$majorScore,
              "gpaScore" => (string)$gpaScore,
              "WebDeveloperScore" => (string)$WebDeveloperScore
              );
            $param = urlencode(json_encode($comb));
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                header("location: eval_score_display.php?new=$param");
            }  
            else {
                echo "Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }    

    $mysqli->close();
}

?>

</body>
</html>