<?php
include($_SERVER['DOCUMENT_ROOT'] . '/gatePass/Includes/Header.php');
include('../Menu.php');


// Select all pending reqeusts for Class Advisor
$sql = "SELECT * FROM `permission_details` WHERE status>=4";
$result = mysqli_query($conn, $sql);
if ($result) {
    $pendingRequests = array();
    while ($row = $result->fetch_assoc()) {
        $pendingRequests[] = $row;
    }
}

// Getting student details to show their names in the request row
$sql = "SELECT * FROM student_details";
$result = mysqli_query($conn, $sql);
if ($result) {
    $students = array();
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}


// Duplicated for 2nd table ( History - rejected )
// Select all pending reqeusts for Class Advisor
$sql = "SELECT * FROM `permission_details` WHERE rejectedby ='$userName - $roleName'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $pendingRequests2 = array();
    while ($row = $result->fetch_assoc()) {
        $pendingRequests2[] = $row;
    }
}

// Getting student details to show their names in the request row
$sql = "SELECT * FROM student_details";
$result = mysqli_query($conn, $sql);
if ($result) {
    $students2 = array();
    while ($row = $result->fetch_assoc()) {
        $students2[] = $row;
    }
}

// // Get exam names for staff's classes
// $sql = "SELECT * FROM erp_exam";
// $result = mysqli_query($conn, $sql);
// if ($result) {
//     $exams = array();
//     while ($row = $result->fetch_assoc()) {
//         $exams[] = $row;
//     }
// }

?>

<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                    <div>
                        <h1>History</h1> <?php echo "$userName - $roleName" ?>
                        <p>All the outpass forms accepted and denied by you can be found here, like a history page.</p>
                    </div>
                    <!-- Button on the header -->
                    <!-- <div>
                        <a href="" class="btn btn-link btn-soft-light">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8251 15.2171H12.1748C14.0987 15.2171 15.731 13.985 16.3054 12.2764C16.3887 12.0276 16.1979 11.7713 15.9334 11.7713H14.8562C14.5133 11.7713 14.2362 11.4977 14.2362 11.16C14.2362 10.8213 14.5133 10.5467 14.8562 10.5467H15.9005C16.2463 10.5467 16.5263 10.2703 16.5263 9.92875C16.5263 9.58722 16.2463 9.31075 15.9005 9.31075H14.8562C14.5133 9.31075 14.2362 9.03619 14.2362 8.69849C14.2362 8.35984 14.5133 8.08528 14.8562 8.08528H15.9005C16.2463 8.08528 16.5263 7.8088 16.5263 7.46728C16.5263 7.12575 16.2463 6.84928 15.9005 6.84928H14.8562C14.5133 6.84928 14.2362 6.57472 14.2362 6.23606C14.2362 5.89837 14.5133 5.62381 14.8562 5.62381H15.9886C16.2483 5.62381 16.4343 5.3789 16.3645 5.13113C15.8501 3.32401 14.1694 2 12.1748 2H11.8251C9.42172 2 7.47363 3.92287 7.47363 6.29729V10.9198C7.47363 13.2933 9.42172 15.2171 11.8251 15.2171Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M19.5313 9.82568C18.9966 9.82568 18.5626 10.2533 18.5626 10.7823C18.5626 14.3554 15.6186 17.2627 12.0005 17.2627C8.38136 17.2627 5.43743 14.3554 5.43743 10.7823C5.43743 10.2533 5.00345 9.82568 4.46872 9.82568C3.93398 9.82568 3.5 10.2533 3.5 10.7823C3.5 15.0873 6.79945 18.6413 11.0318 19.1186V21.0434C11.0318 21.5715 11.4648 22.0001 12.0005 22.0001C12.5352 22.0001 12.9692 21.5715 12.9692 21.0434V19.1186C17.2006 18.6413 20.5 15.0873 20.5 10.7823C20.5 10.2533 20.066 9.82568 19.5313 9.82568Z" fill="currentColor"></path>
                            </svg>
                            Announcements
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="iq-header-img">
        <img src="/gatePass/assets/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
        <img src="/gatePass/assets/images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
        <img src="/gatePass/assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
        <img src="/gatePass/assets/images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
        <img src="/gatePass/assets/images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
        <img src="/gatePass/assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
    </div>
</div>



<div class="card m-3 mb-4 text outerMostCard">
    <div id="Result" class="mt-2" style="width:30%; position:absolute;left:60%; top:0%">
    </div>
    <div class="card-body">

        <div class="bd-example">
            <div class="card-body">
                <div class="form-group col-md-12 justify-content-center">
                    <label class="form-label h4" for="datm">Toggle History:</label>
                    <button type="button" id="toggleAcceptsRejectsBtn" class="btn btn-primary">Accepts / Rejects</button>
                </div>

                <p id="tableHeading" class='h5 mb-4'> Showing accepeted outpass forms </p>
                <div class="table-responsive ">
                    <div id="acceptedTable" class="table-responsive acceptedTable">
                        <table id="datatable" class="table table-striped mb-4" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Roll Number</th>
                                    <th>Place</th>
                                    <th>Reason</th>
                                    <th>Contact</th>
                                    <th>Leaving Date And Time</th>
                                    <th>Accepted By</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pendingRequests as $request) { ?>

                                    <?php
                                    foreach ($students as $student) {
                                        if ($student['sno'] == $request['sno']) {
                                            $studentName = $student['studentname'];
                                            $studentRollNumber = $student['rollnumber'];
                                            $permissionType = $request['permissiontype'];
                                            $place = $request['place'];
                                            $reason = $request['reason'];
                                            $contact = $request['contactnumber'];
                                            $leavingDateAndTime = $request['leavingdatetime'];
                                            $outpassRequestId = $request['permissiondetailsid'];
                                            $accepetedBy = $request['acceptedby'];
                                    ?>
                                            <tr>
                                                <td><?php echo $studentName ?></td>
                                                <td><?php echo $studentRollNumber ?></td>
                                                <td><?php echo $place ?></td>
                                                <td><?php echo $reason ?></td>
                                                <td><?php echo $contact ?></td>
                                                <td><?php echo $leavingDateAndTime ?></td>
                                                <td><?php echo $accepetedBy ?></td>
                                            </tr>
                                <?php           }
                                    }
                                } ?>
                            </tbody>
                        </table>

                    </div>
                    <div id="rejectedTable" class="table-responsive rejectedTable" hidden='true'>
                        <table id="datatable" class="table table-striped mb-4" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Roll Number</th>
                                    <th>Place</th>
                                    <th>Reason</th>
                                    <th>Contact</th>
                                    <th>Leaving Date And Time</th>
                                    <th>Rejected By</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pendingRequests2 as $request) { ?>

                                    <?php
                                    foreach ($students2 as $student) {
                                        if ($student['sno'] == $request['sno']) {
                                            $studentName = $student['studentname'];
                                            $studentRollNumber = $student['rollnumber'];
                                            $permissionType = $request['permissiontype'];
                                            $place = $request['place'];
                                            $reason = $request['reason'];
                                            $contact = $request['contactnumber'];
                                            $leavingDateAndTime = $request['leavingdatetime'];
                                            $outpassRequestId = $request['permissiondetailsid'];
                                            $rejectedBy = $request['rejectedby'];
                                    ?>
                                            <tr>
                                                <td><?php echo $studentName ?></td>
                                                <td><?php echo $studentRollNumber ?></td>
                                                <td><?php echo $place ?></td>
                                                <td><?php echo $reason ?></td>
                                                <td><?php echo $contact ?></td>
                                                <td><?php echo $leavingDateAndTime ?></td>
                                                <td><?php echo $rejectedBy ?></td>
                                            </tr>
                                <?php
                                        }
                                    }
                                } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal for confirming saving the grades -->
    <div class="modal fade" id="approvalModal" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal2Label">Caution!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure?
                </div>
                <div class="modal-footer">
                    <input type="submit" id="approvalConfirmBtn" class="btn btn-primary" data-bs-dismiss="modal" value="Yes"></input>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
                <div id="saveGradesResult"></div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".outerMostCard").css("box-shadow", "5px 5px 30px blue");
            $("#toggleAcceptsRejectsBtn").click(function(e) {
                if ($("#rejectedTable").attr('hidden') == 'hidden') {
                    $("#acceptedTable").attr('hidden', true);
                    $("#rejectedTable").attr('hidden', false);
                    $("#tableHeading").html('Showing Rejected OutPass Forms');
                    $("#toggleAcceptsRejectsBtn").addClass("btn-danger").removeClass("btn-primary");
                    $(".outerMostCard").css("box-shadow", "5px 5px 30px red");
                } else {
                    $("#rejectedTable").attr('hidden', true);
                    $("#acceptedTable").attr('hidden', false);
                    $("#tableHeading").html('Showing Accepted OutPass Forms');
                    $("#toggleAcceptsRejectsBtn").addClass("btn-primary").removeClass("btn-danger");
                    $(".outerMostCard").css("box-shadow", "5px 5px 30px blue");
                }

                // $("#approvalConfirmBtn").unbind().click(function(e) {
                //     var requestId = $(currentCheckBox).attr('requestId');
                //     console.log(requestId);
                //     $.ajax({
                //         url: '../functions.php',
                //         type: 'POST',
                //         data: {
                //             requestStatus: requestStatus,
                //             requestId: requestId,
                //             Function: "setStaffApproval",
                //         },
                //         success: function(response) {
                //             console.log(response);
                //             if (response == "OK") {
                //                 $("#Result").html(`<div class="alert alert-success fade show" role="alert"> Aproval Set! </div>`);
                //                 // window.location.href = "home.php";
                //             } else {
                //                 $("#Result").html(`<div class="alert alert-danger fade show" role="alert"> ${response}</div>`);
                //             }
                //             setTimeout(function() {
                //                 $("#Result").html('');
                //                 window.location.reload();
                //             }, 1000);
                //         }
                //     });
                // })
            });

        });
    </script>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/gatePass/Includes/Footer.php');

    ?>