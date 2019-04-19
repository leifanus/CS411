<?php

$startEval = $_POST['jobType'];
$A = $startEval;

if ($startEval == "SDE") {
    header('Location: ../eval_SDE.php');
    exit();
}
elseif ($startEval == "DataAnalystorDataScientist") {
    header('Location: ../eval_DataScientist.php');
    exit();
}
elseif ($startEval == "DatabaseAdministrator") {
    header('Location: ../eval_DatabaseAdministrator.php');
    exit();
}
elseif ($startEval == "HardwareEngineer") {
    header('Location: ../eval_HardwareEngineer.php');
    exit();
}
elseif ($startEval == "WebDeveloper") {
    header('Location: ../eval_WebDeveloper.php');
    exit();
}
elseif ($startEval == "ComputerArchitecture") {
    header('Location: ../eval_ComputerArchitecture.php');
    exit();
}
elseif ($startEval == "CyberSecurity") {
    header('Location: ../eval_CyberSecurity.php');
    exit();
}


?>