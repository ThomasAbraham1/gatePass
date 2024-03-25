<?php
include($_SERVER['DOCUMENT_ROOT'] . '/gatePass/Includes/Header.php');
include('../Menu.php');


// Get distinct classIds from subject
// $sql = "select * from erp_subject where staffId = $user_id";
// $result = mysqli_query($conn, $sql);
// if ($result) {
//     $uniqueSubjects = array();
//     while ($row = $result->fetch_assoc()) {
//         $uniqueSubjects[] = $row;
//     }
// }

// // Get class names for staff's classes
// $sql = "SELECT * FROM erp_class";
// $result = mysqli_query($conn, $sql);
// if ($result) {
//     $classes = array();
//     while ($row = $result->fetch_assoc()) {
//         $classes[] = $row;
//     }
// }

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
                        <h1>Student Registration</h1>
                        <p>New students can be added to your class here.</p>
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



<div class="card m-3 w-50 text ">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Student Registration Form</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="new-user-info">
                <form id="studentRegistrationForm" class="mb-2"> <!-- Change action attribute to your form submission endpoint -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="studentname">Student Name:</label>
                            <input type="text" class="form-control" id="studentname" name="studentname" placeholder="Student Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="rollnumber">Roll Number:</label>
                            <input type="text" class="form-control" id="rollnumber" name="rollnumber" placeholder="Roll Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="dateofbirth">Date of Birth:</label>
                            <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Course:</label>
                            <select name="stream" id="course" class="selectpicker form-control" data-style="py-0">
                                <option value="B.Tech">B.Tech</option>
                                <option value="B.E">B.E</option>
                                <option value="M.E">M.E</option>
                                <option value="MBA">MBA</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Department:</label>
                            <select name="stream" id="department" class="selectpicker form-control" data-style="py-0">
                                <option value="CSE">CSE</option>
                                <option value="ECE">ECE</option>
                                <option value="EEE">EEE</option>
                                <option value="AI DS">AI DS</option>
                                <option value="MECH">MECH</option>
                                <option value="Civil">Civil</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="password">Password:</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="fatherguardianname">Father/Guardian Name:</label>
                            <input type="text" class="form-control" id="fatherguardianname" name="fatherguardianname" placeholder="Father/Guardian Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="fatherguardiannumber">Father/Guardian Number:</label>
                            <input type="text" class="form-control" id="fatherguardiannumber" name="fatherguardiannumber" placeholder="Father/Guardian Number">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="datm">Date and Time of Admission:</label>
                            <input type="datetime-local" class="form-control" id="datm" name="datm">
                        </div>
                    </div>
                    <input id="studentRegistrationSubmitBtn" type="button" class="btn btn-primary" value="Add New Student"></input>
                </form>
                <div id="Result"></div>
            </div>
        </div>
    </div>




    <!-- Modal for filtering -->
    <div class="modal fade" id="filterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Mark Grade For:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="selectedClassForGrading">Class: </label>
                        <select id="selectedClassForGrading" name="type" class="selectpicker form-control" data-style="py-0">
                            <option hidden disabled selected value>Choose class</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="selectedExamName">Exam: </label>
                        <select id="selectedExamName" name="type" class="selectpicker form-control" data-style="py-0">
                            <option hidden disabled selected value>Choose Exam</option>
                        </select>
                    </div>
                    <div class="text-start mt-2">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-primary" id="chooseClassBtn">Select</button>
                        <button type="button" data-bs-dismiss="modal" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for confirming saving the grades -->
    <div class="modal fade" id="confirmGradesModal" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal2Label">Caution!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to save the grades?
                </div>
                <div class="modal-footer">
                    <button type="button" id="saveGradesConfirmBtn" class="btn btn-primary" data-bs-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
                <div id="saveGradesResult"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#studentRegistrationSubmitBtn").click(function(e) {
                e.preventDefault();
                var studentName = $("#studentname").val();
                var rollNumber = $("#rollnumber").val();
                var dateOfBirth = $("#dateofbirth").val();
                var course = $("#course").val();
                var department = $("#department").val();
                var fatherGuardianName = $("#fatherguardianname").val();
                var fatherGuardianNumber = $("#fatherguardiannumber").val();
                var address = $("#address").val();
                var datm = $("#datm").val();
                var classAdvisorName = "<?php echo $userName ?>";
                var password = $("#password").val();
                $.ajax({
                    url: '../functions.php',
                    type: 'POST',
                    data: {
                        studentName: studentName,
                        rollNumber: rollNumber,
                        dateOfBirth: dateOfBirth,
                        course: course,
                        department: department,
                        fatherGuardianName: fatherGuardianName,
                        fatherGuardianNumber: fatherGuardianNumber,
                        address: address,
                        datm: datm,
                        password: password,
                        classAdvisorName:classAdvisorName,
                        Function: "registerStudent"
                    },
                    success: function(response) {
                        console.log(response);
                        if (response == "OK") {
                            $("#Result").html(`<div class="alert alert-success fade show" role="alert"> Successfully registered! </div>`);
                        } else {
                            $("#Result").html(`<div class="alert alert-danger fade show" role="alert"> ${response}</div>`);
                        }
                        setTimeout(function() {
                            $("#Result").html('');
                            // window.location.reload();
                        }, 3000);
                    }
                });
            });

            // $('#saveGradesConfirmBtn').click(function(e) {
            //     var classIdAndClassName = $('#selectedClassForGrading').val();
            //     classIdAndClassName = classIdAndClassName.split(',');
            //     var semester = classIdAndClassName[3];
            //     // console.log(semester);
            //     var isAnyFieldEmpty = 0;
            //     $('#tableBody input').each(function(i, e) {
            //         if (!$(e).val()) {
            //             $("#Result").html(`<div class="alert alert-danger fade show" role="alert">Some students are missing mark entry.</div>`);
            //             setTimeout(function() {
            //                 $("#Result").html('');
            //             }, 5000);
            //             isAnyFieldEmpty = 1;
            //             return false;
            //         }
            //     })
            //     if (isAnyFieldEmpty) return false;



            //     var classIdAndClassName = $('#selectedClassForGrading').val();
            //     classIdAndClassName = classIdAndClassName.split(',');
            //     var subjectCodeAndSubjectName = classIdAndClassName[2];
            //     subjectCodeAndSubjectName = subjectCodeAndSubjectName.split(' ');
            //     subjectCode = subjectCodeAndSubjectName[0];
            //     subjectName = subjectCodeAndSubjectName.slice(1, subjectCodeAndSubjectName.length);
            //     subjectName = subjectName.join(' ');
            //     var examName = $('#selectedExamName').val();
            //     var studentRow = {};
            //     var studentMarkData = [];
            //     $('#tableBody tr').each(function(i, e) {
            //         studentRow['studentId'] = $(e).children().eq(0).html();
            //         studentRow['studentName'] = $(e).children().eq(1).html();
            //         studentRow['studentMark'] = $(e).children().eq(2).children().val();
            //         studentMarkData.push(studentRow);
            //         studentRow = {};
            //     });

            //     $.ajax({
            //         url: '../functions.php',
            //         type: 'POST',
            //         data: {
            //             studentMarkData: studentMarkData,
            //             examName: examName,
            //             subjectCode: subjectCode,
            //             subjectName: subjectName,
            //             semester: semester,
            //             Function: "saveGradingSheet",
            //         },
            //         success: function(responseMsg) {
            //             // responseMsg = responseMsg.split('|');
            //             // response = responseMsg[1];
            //             // var rows = responseMsg[0];
            //             console.log(responseMsg);

            //             if (responseMsg == "OK") {
            //                 $("#Result").html(`<div class="alert alert-success fade show" role="alert">Successfully Saved!</div>`);
            //                 // window.location.href = "home.php";
            //             } else {
            //                 $("#Result").html(`<div class="alert alert-danger fade show" role="alert"> ${responseMsg}</div>`);
            //             }
            //             setTimeout(function() {
            //                 $("#Result").html('');
            //                 // window.location.reload();
            //             }, 5000);
            //         }
            //     });

            // });
        });
    </script>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/gatePass/Includes/Footer.php');

    ?>