<?php
session_start();
include('../includes/conn.php');

if (isset($_POST["Function"])) {

    if ($_POST["Function"] == "submitOutpassForm") {
        function submitOutpassForm()
        {
            global $conn;
            $permissionType = $_POST['permissionType'];
            $leavingDateAndTime = $_POST['leavingDateAndTime'];
            $place = $_POST['place'];
            $reason = $_POST['reason'];
            $contact = $_POST['contact'];
            $rollNumber = $_POST['rollNumber'];
            $userId = $_POST['userId'];
            $userId = mysqli_real_escape_string($conn, $userId);
            $rollNumber = mysqli_real_escape_string($conn, $rollNumber);
            $permissionType = mysqli_real_escape_string($conn, $permissionType);
            $leavingDateAndTime = mysqli_real_escape_string($conn, $leavingDateAndTime);
            $place = mysqli_real_escape_string($conn, $place);
            $reason = mysqli_real_escape_string($conn, $reason);
            $contact = mysqli_real_escape_string($conn, $contact);
            $sql = "INSERT INTO `permission_details` (`permissiondetailsid`, `sno`, `rollnumber`, `permissiontype`, `leavingdatetime`, `place`, `reason`, `contactnumber`, `status`, `outtime`, `datm`) VALUES (NULL, '$userId', '$rollNumber', '$permissionType', '$leavingDateAndTime', '$place', '$reason', '$contact', 1, '', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if (!$result) return "Error: " . $sql . "<br>" . $conn->error;
            // close database connection
            mysqli_close($conn);
            return "OK";
        }
        echo submitOutpassForm();
    }
}
