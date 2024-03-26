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
            $result = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
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
            $userName = $_POST['userName'];
            $roleName = $_POST['roleName'];
            $acceptedOrRejectedBy = $requestStatus >= 1 ? 1 : 0;
            $acceptedOrRejectedBy = $acceptedOrRejectedBy ? 'acceptedby' : 'rejectedby';
            global $conn;
            $sql = "UPDATE `permission_details` SET `status` = '$requestStatus', `$acceptedOrRejectedBy` = '$userName - $roleName'  WHERE `permission_details`.`permissiondetailsid` = $requestId";
            $result = mysqli_query($conn, $sql);
            if (!$result) return "Error: " . $sql . "<br>" . $conn->error;
            // close database connection
            mysqli_close($conn);
            if (!$requestStatus) return "Approval Rejected";
            return "OK";
        }
        echo setStaffApproval();
    }


    // To create a filtered table based on department for the outpass page in Principal module
    if ($_POST["Function"] == "filterOutpassPageForPrincipal") {
        function filterOutpassPageForPrincipal()
        {
            $department = $_POST['department'];
            global $conn;
            $sql = "SELECT * FROM `permission_details` INNER JOIN student_details On permission_details.sno = student_details.sno WHERE status=3 AND branch = '$department'";
            $result = mysqli_query($conn, $sql);
            if (!$result) return "Error: " . $sql . "<br>" . $conn->error;
            if ($result) {
                $outpassRequests = array();
                while ($row = $result->fetch_assoc()) {
                    $outpassRequests[] = $row;
                }
            }

?>
                    <?php foreach ($outpassRequests as $request) { ?>

                        <?php
                        $studentName = $request['studentname'];
                        $studentRollNumber = $request['rollnumber'];
                        $permissionType = $request['permissiontype'];
                        $place = $request['place'];
                        $reason = $request['reason'];
                        $contact = $request['contactnumber'];
                        $leavingDateAndTime = $request['leavingdatetime'];
                        $outpassRequestId = $request['permissiondetailsid'];
                        ?>
                        <tr>
                            <td><?php echo $studentName ?></td>
                            <td><?php echo $studentRollNumber ?></td>
                            <td><?php echo $place ?></td>
                            <td><?php echo $reason ?></td>
                            <td><?php echo $contact ?></td>
                            <td><?php echo $leavingDateAndTime ?></td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input approvalCheckBox" name="bsradio" data-bs-toggle="modal" data-bs-target="#approvalModal" requestId=<?php echo $outpassRequestId ?> isApproved=1>
                                    <label for="radio1" class="form-check-label pl-2">Accept</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input approvalCheckBox" name="bsradio" data-bs-toggle="modal" data-bs-target="#approvalModal" requestId=<?php echo $outpassRequestId ?> isApproved=0>
                                    <label for="radio1" class="form-check-label pl-2">Reject</label>
                                </div>
                            </td>
                        </tr>
                    <?php
                    } ?>

<?php
            // close database connection
            mysqli_close($conn);
            return "|OK";
        }
        echo filterOutpassPageForPrincipal();
    }
}
