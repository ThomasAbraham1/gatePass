<?php
//============================================================================
include "../Includes/conn.php";
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location:../Includes/logout.php');
}
$sno = $_GET['q'];
$query = "UPDATE `permission_details` SET `status`='ACCEPTED'  WHERE `sno`= '$sno'";
$sql = mysqli_query($conn, $query);
if ($sql) {
    echo '<script>alert("Request Accepted")</script>';
    echo "<script>window.location='./requests.php';</script>";
} else {
    echo '<script>alert("Failed Try Again")</script>';
    echo "<script>window.location='./requests.php';</script>";
}
//============================================================================
