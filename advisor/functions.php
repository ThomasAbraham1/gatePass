<?php
session_start();
include('../includes/conn.php');

if (isset($_POST["Function"])) {

    if ($_POST["Function"] == "registerStudent") {
        function registerStudent()
        {
            $datm = $_POST['datm'];
            $rollNumber = $_POST['rollNumber'];
            $address = $_POST['address'];
            $fatherGuardianNumber = $_POST['fatherGuardianNumber'];
            $fatherGuardianName = $_POST['fatherGuardianName'];
            $department = $_POST['department'];
            $course = $_POST['course'];
            $dateOfBirth = $_POST['dateOfBirth'];
            $studentName = $_POST['studentName'];
            $password = $_POST['password'];
            $classAdvisorName = $_POST['classAdvisorName'];

            global $conn;
            $sql1 = "INSERT INTO `login` (`sno`, `username`, `password`, `logintype`) VALUES (NULL, '$rollNumber', '$password', 'student')";
            $result = mysqli_query($conn, $sql1);
            $sql2 = "SELECT sno FROM login WHERE username = '$rollNumber'";
            $result = mysqli_query($conn,$sql2);
            if(mysqli_num_rows($result) > 0){
                while($row = $result->fetch_assoc()){
                    $studentid = $row['sno'];
                }
            }

            $sql = "INSERT INTO `student_details` (`studentdetailsid`,`sno`, `studentname`, `rollnumber`, `dateofbirth`, `stream`, `branch`, `father/guardianname`, `father/guardiannumber`, `address`, `datm`, `classadvisor`) VALUES (NULL,$studentid, '$studentName', '$rollNumber', '$dateOfBirth', '$course', '$department', '$fatherGuardianName', '$fatherGuardianNumber', '$address', current_timestamp(), '$classAdvisorName')";
            $result = mysqli_query($conn, $sql);
            if (!$result) return "Error: " . $sql . "<br>" . $conn->error;
            // close database connection
            mysqli_close($conn);
            return "OK";
        }
        echo registerStudent();
    }



    if ($_POST["Function"] == "setStaffApproval") {
        function setStaffApproval()
        {
            $requestStatus = $_POST['requestStatus'];
            $requestId = $_POST['requestId'];

            global $conn;
            $sql = "UPDATE `permission_details` SET `status` = '$requestStatus' WHERE `permission_details`.`permissiondetailsid` = $requestId";
            $result = mysqli_query($conn, $sql);
            if (!$result) return "Error: " . $sql . "<br>" . $conn->error;
            // close database connection
            mysqli_close($conn);
            if(!$requestStatus) return "Approval Rejected";
            return "OK";
        }
        echo setStaffApproval();
    }
}
