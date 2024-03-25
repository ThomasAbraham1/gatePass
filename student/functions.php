<?php
session_start();
include('../includes/conn.php');

if (isset($_POST["Function"])) {

    if ($_POST["Function"] == "submitOutpassForm") {
        function submitOutpassForm()
        {
            $permissionType = $_POST['permissionType'];
            $leavingDateAndTime = $_POST['leavingDateAndTime'];
            $place = $_POST['place'];
            $reason = $_POST['reason'];
            $contact = $_POST['contact'];
            $rollNumber = $_POST['rollNumber'];
            global $conn;
            $sql = "INSERT INTO `perpermissions_details` (`sno`, `rollnumber`, `permissiontype`, `leavingdatetime`, `place`, `reason`, `contacnumber`, `status`, `outtime`, `datm`) VALUES (NULL, '$rollNumber',  '$permissionType', '$leavingDateAndTime', '$place', '$reason', '$contact', 1,'', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if (!$result) return "Error: " . $sql . "<br>" . $conn->error;
            // close database connection
            mysqli_close($conn);
            return "OK";
        }
        echo submitOutpassForm();
    }
}
