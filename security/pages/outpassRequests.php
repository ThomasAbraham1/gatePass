<?php
include($_SERVER['DOCUMENT_ROOT'] . '/gatePass/Includes/Header.php');
include('../Menu.php');


// Select all pending reqeusts for Class Advisor
$sql = "SELECT * FROM `permission_details` WHERE status=4 ORDER BY datm";
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
    $departments = array();
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
        $departments[] = $row['branch'];
    }
    $departments = array_unique($departments);
}

$differentDepartmentStudents = array();
foreach ($departments as $department) {
    foreach ($students as $student) {
        if ($department == $student['branch']) {
            $differentDepartmentStudents[$department][] =  $student;
        }
    }
}

// $studentsCountFromDepartments = array();
foreach ($differentDepartmentStudents as $department => $departmentStudents) {
    $requestCount = 0;
    foreach ($departmentStudents as $student) {
        foreach ($pendingRequests as $request) {
            if ($student['sno'] == $request['sno']) {
                $requestCount = $requestCount + 1;
            }
        }
    }
    $studentsCountFromDepartments[$department] = $requestCount;
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
                        <h1>Outpass Requests</h1>
                        <p>Faculties can handle the incoming outpass requests from students here.</p>
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



<div class="card m-3 w-100 text ">
    <div id="Result" class="mt-2" style="width:30%; position:absolute;left:60%; top:0%">
    </div>
    <div class="card-body">

        <div class="bd-example">
            <div class="card-body">
                <!-- <a href="#" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3 mb-4" data-bs-toggle="modal" data-bs-target="#filterModal">
                    <i class="btn-inner">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2 icon-20">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.56517 3C3.70108 3 3 3.71286 3 4.5904V5.52644C3 6.17647 3.24719 6.80158 3.68936 7.27177L8.5351 12.4243L8.53723 12.4211C9.47271 13.3788 9.99905 14.6734 9.99905 16.0233V20.5952C9.99905 20.9007 10.3187 21.0957 10.584 20.9516L13.3436 19.4479C13.7602 19.2204 14.0201 18.7784 14.0201 18.2984V16.0114C14.0201 14.6691 14.539 13.3799 15.466 12.4243L20.3117 7.27177C20.7528 6.80158 21 6.17647 21 5.52644V4.5904C21 3.71286 20.3 3 19.4359 3H4.56517Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </i>
                    <span>Choose class</span>
                </a> -->
                <style>
                    .flexContainer {
                        display: flex;
                        justify-content: center;
                        /* align-items: center; */
                        /* min-height: 100px; */
                    }

                    .numberCard {
                        display: flex;
                        margin: 5px 20px;
                        flex-direction: column;
                        justify-content: space-between;
                        align-items: center;
                        min-width: 150px;
                        border-radius: 25px;
                        /* border: 5px solid lightblue; */
                        box-shadow: 5px 5px 50px lightblue;
                    }

                    .numberCardBtn {
                        border-radius: 25px;
                    }
                </style>
                <div class="flexContainer">
                    <?php foreach ($studentsCountFromDepartments as $department => $count) { ?>
                        <div class="numberCard">
                            <h2 class="counter mt-2 countField"><?php echo $count ?></h2>
                            <button class="btn btn-primary numberCardBtn mb-2" department="<?php echo $department ?>"><?php echo ucfirst($department) ?></button>
                        </div>
                    <?php } ?>
                </div>


                <p id="tableHeading" class='h5 mb-4'></p>
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped mb-4" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Roll Number</th>
                                    <th>Place</th>
                                    <th>Reason</th>
                                    <th>Contact</th>
                                    <th>Leaving Date And Time</th>
                                    <th>Approval</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                <?php foreach ($pendingRequests as $request) { ?>

                                    <?php
                                    foreach ($students as $student) {
                                        if ($student['sno'] == $request['sno']) {
                                            $studentName = $student['studentname'];
                                            $studentRollNumber = $student['rollnumber'];
                                            $studentDepartment = $student['branch'];
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
                                                    <!-- <div class="form-check form-check-inline">
                                                        <input id="printOutpassBtn" type="button" class="btn btn-primary approvalCheckBox" value="Print"  requestId=<?php echo $outpassRequestId ?> studentDepartment=<?php echo $studentDepartment ?> isApproved=1></input>
                                                    </div> -->
                                                    <a href="print.php?q=<?php echo $outpassRequestId ?>" class="btn btn-primary approvalCheckBox" id="printOutpassBtn">Print</a>


                                                </td>
                                            </tr>
                                <?php                                         }
                                    }
                                } ?>
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for confirming saving the grades
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
    </div> -->


    <script>
        $(document).ready(function() {



            function accordionClickListener(alreadyClickedNumberCard) {
                $(".approvalCheckBox").click(function(e) {
                    var userName = "<?php echo $userName ?>";
                    var roleName = "<?php echo $roleName ?>";
                    var currentCheckBox = $(this);
                    var isApproved = parseInt(currentCheckBox.attr("isApproved"), 10);
                    var requestStatus = isApproved ? 5 : 0;
                    console.log(requestStatus);
                    var requestId = $(currentCheckBox).attr('requestId');
                    var studentDepartment = $(this).attr('studentDepartment');

                    console.log(studentDepartment);
                    $.ajax({
                        url: '../functions.php',
                        type: 'POST',
                        data: {
                            requestStatus: requestStatus,
                            roleName: roleName,
                            userName: userName,
                            requestId: requestId,
                            Function: "setStaffApproval",
                        },
                        success: function(response) {
                            console.log(response);
                            if (response == "OK") {
                                $("#Result").html(`<div class="alert alert-success fade show" role="alert"> Aproval Set! </div>`);
                                var filterPageOrNotFlag = 0;
                                $(".numberCardBtn").each(function(k, e) {
                                    if ($(e).attr('active') == 1) {
                                        filterPageOrNotFlag = 1;
                                        $(e).click();
                                        $currentCount = $(e).parent().children(":eq(0)").html();
                                        $newCount = parseInt($currentCount, 10) - 1;
                                        $(e).parent().children(":eq(0)").html($newCount);
                                    }
                                    if(!filterPageOrNotFlag) window.location.reload();

                                })

                                // window.location.href = "home.php";
                            } else {
                                $("#Result").html(`<div class="alert alert-danger fade show" role="alert"> ${response}</div>`);
                                var filterPageOrNotFlag = 0;

                                $(".numberCardBtn").each(function(k, e) {
                                    if ($(e).attr('active') == 1) {
                                        filterPageOrNotFlag = 1;
                                        $(e).click();
                                        $currentCount = $(e).parent().children(":eq(0)").html();
                                        $newCount = parseInt($currentCount, 10) - 1;
                                        $(e).parent().children(":eq(0)").html($newCount);
                                    }
                                    if(!filterPageOrNotFlag) window.location.reload();
                                })
                            }
                            setTimeout(function() {
                                $("#Result").html('');
                                // window.location.reload();
                            }, 1000);
                        }
                    });
                });
            }
            accordionClickListener();


            function filterOutpassRequestsTable() {
                $(".numberCardBtn").click(function(e) {
                    var department = $(this).attr('department');
                    $(".numberCardBtn").removeAttr('active');
                    $(this).attr('active', 1);
                    console.log(department);

                    $.ajax({
                        url: '../functions.php',
                        type: 'POST',
                        data: {
                            department: department,
                            Function: "filterOutpassPageForPrincipal",
                        },
                        success: function(response) {
                            response = response.split('|');
                            responseData = response[0];
                            response = response[1];
                            console.log(responseData);
                            if (response == "OK") {
                                // console.log("Inside good block")
                                $("#tableBody").html(responseData);
                                accordionClickListener($(this));
                            } else {
                                $("#Result").html(`<div class="alert alert-danger fade show" role="alert"> ${response}</div>`);
                            }
                            setTimeout(function() {
                                $("#Result").html('');
                                // window.location.reload();
                            }, 1000);
                        }
                    });
                });
            }
            filterOutpassRequestsTable();

            
        });
    </script>
<script>
     document.addEventListener('keydown', function(event) {
    // Check if the pressed key is lowercase 'p'
    if (event.key === 'p') {
        // Simulate a click on the button with id 'printOutpassBtn'
        document.getElementById('printOutpassBtn').click();
    }
});
</script>

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/gatePass/Includes/Footer.php');

    ?>