<?php
include($_SERVER['DOCUMENT_ROOT'] . '/gatePass/Includes/Header.php');
include('../Menu.php');


// Select all pending reqeusts for Class Advisor
$sql = "SELECT * FROM `permission_details` WHERE rollnumber='$userName'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $pendingRequests = array();
    while ($row = $result->fetch_assoc()) {
        $pendingRequests[] = $row;
    }
}

// // Getting student details to show their names in the request row
$sql = "SELECT * FROM student_details WHERE rollnumber ='$userName'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $students = array();
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}


// // Duplicated for 2nd table ( History - rejected )
// // Select all pending reqeusts for Class Advisor
// $sql = "SELECT * FROM `permission_details` WHERE status=0";
// $result = mysqli_query($conn, $sql);
// if ($result) {
//     $pendingRequests2 = array();
//     while ($row = $result->fetch_assoc()) {
//         $pendingRequests2[] = $row;
//     }
// }

// // Getting student details to show their names in the request row
// $sql = "SELECT * FROM student_details WHERE classadvisor ='$userName'";
// $result = mysqli_query($conn, $sql);
// if ($result) {
//     $students2 = array();
//     while ($row = $result->fetch_assoc()) {
//         $students2[] = $row;
//     }
// }

?>

<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                    <div>
                        <h1>History</h1>
                        <p>All the outpass forms accepted and denied by you can be found here, like a history page.</p>
                    </div>
                    <!-- here comments -->
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
                                    <th>Rejected By</th>
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
                                            $rejectedBy=$request['rejectedby'] ;
                                            $acceptedBy = $request['acceptedby'];
                                    ?>
                                            <tr>
                                                <td><?php echo $studentName ?></td>
                                                <td><?php echo $studentRollNumber ?></td>
                                                <td><?php echo $place ?></td>
                                                <td><?php echo $reason ?></td>
                                                <td><?php echo $contact ?></td>
                                                <td><?php echo $leavingDateAndTime ?></td>
                                                <td><?php echo $rejectedBy ?></td>
                                                <td><?php echo $acceptedBy ?></td>

                                                <!-- <td><?php echo substr(strrchr($rejectedBy,'-'),1) ?></td> -->
                                                <!-- <td><?php echo substr(strrchr($acceptedBy,'-'),1) ?></td> -->

                                            </tr>
                                <?php           }
                                    }
                                }
                                ?>
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