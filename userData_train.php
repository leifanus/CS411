<?php

$db_host = "Localhost";
$db_username = "teammmproject_a";
$db_password = "teammmproject_a";
$db_name = "teammmproject_jobs";
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

// Get userName, jobType
$sqlUser = "SELECT studentID, job FROM Students";
$resultUser = $mysqli->query($sqlUser);
$rowUser = $resultUser->fetch_assoc();
// Arrays of studentID and corresponding jobType
// Need to loop through the arrays
$studentID = $rowUser['studentID'];
$jobType = $rowUser['job'];


// Get major, school rank, GPA
$sqlEducation = "SELECT major, schoolName, GPA FROM Education WHERE studentID = '$studentID'";
$resultEducation = $mysqli->query($sqlEducation);
$rowEducation = $resultEducation->fetch_assoc();

$major = $row['major'];
$gpa = $row['GPA'];
$school = $row['schoolName'];

$sqlRank = "SELECT rank FROM Schools WHERE schoolName = '$school'";
$resultRank = $mysqli->query($sqlRank);
$rowRank = $resultRank->fetch_assoc();
$rank = $rowRank['rank'];


// Get skills
$sqlSkill = "SELECT COUNT(skillID) FROM Schools WHERE studentID = '$studentID'";
$sqlSkill = "SELECT COUNT(skillID) FROM Schools WHERE studentID = '$studentID'";
$sqlSkill = "SELECT COUNT(skillID) FROM Schools WHERE studentID = '$studentID'";

$resultRank = $mysqli->query($sqlRank);
$rowRank = $resultRank->fetch_assoc();
$rank = $rowRank['rank'];

$skillCJ = $_POST['SkillCJ'];
$skillLX = $_POST['SkillLX'];
$skillJS = $_POST['SkillJS'];
$internProject = $_POST['InternProject'];
$internProjectOth = $_POST['InternProjectOth'];
$courseALDS = $_POST['CourseALDS'];
$courseMB = $_POST['CourseMB'];

$jobType = "SDE";
$skillScore = sizeof($skillCJ) * 90.00 + sizeof($skillLX) * 5.00 + sizeof($skillJS) * 5.00;
$courseScore = sizeof($courseALDS) * 40.00 + sizeof($courseMB) * 20.00;
$schoolScore = $rank * 20.00;
if (sizeof($internProject) >= 3) {
    $internProjectScore = 80.00 + sizeof($internProjectOth) * 20.00;
}
else {
    $internProjectScore = sizeof($internProject) / 3.00 * 80.00 + sizeof($internProjectOth) * 20.00;
}


if ($major == 'CS') {
    $majorScore = 100.00; 
}
elseif ($major == 'CE') {
    $majorScore = 20.00;
}
else {
    $majorlScore = 0.00;
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


$SDEScore = $skillScore * 0.3 + $internProjectScore * 0.35 + $majorScore * 0.15 + $gpaScore * 0.1 + $schoolScore * 0.05 + $courseScore * 0.05;


$sql3 = "SELECT userName, jobType FROM Score WHERE userName = '$userName' AND jobType = '$jobType'";
$result3 = $mysqli->query($sql3);
// $row3 = $result3->fetch_assoc();

if (mysqli_num_rows($result3)) {
    $sqlUpdate = "UPDATE Score SET skillScore = '$skillScore', courseScore = '$courseScore', internProjectScore = '$internProjectScore', majorScore = '$majorScore', gpaScore = '$gpaScore', schoolScore = '$schoolScore', totalScore = '$SDEScore' WHERE userName = '$userName' AND jobType = '$jobType'";
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
        $param_total = $SDEScore;

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // header("location: eval_score_display.php");
            echo"success";
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
        $param_totalScore = $SDEScore;

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // header("location: eval_score_display.php");
            echo"success";
        } 
        else {
            echo "Something went wrong. Please try again later.";
        }
    }
    mysqli_stmt_close($stmt);
}    



$mysqli->close();


?>