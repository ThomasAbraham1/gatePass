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
                <h4 class="card-title">Outpass Form</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="new-user-info">
                <form id="studentRegistrationForm" class="mb-2"> <!-- Change action attribute to your form submission endpoint -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Permission type:</label>
                            <select name="stream" id="permissionType" class="selectpicker form-control" data-style="py-0">
                                <option value="Home Permission">Home Permission</option>
                                <option value="1 Hour Permission">1 Hour Permission</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="leavingDateAndTime">Leaving Date And time:</label>
                            <input type="datetime-local" class="form-control" id="leavingDateAndTime" name="leavingDateAndTime" placeholder="Student Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="place">Place:</label>
                            <input type="text" class="form-control" id="place" name="place" placeholder="Place">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="reason">Reason:</label>
                            <input type="text" class="form-control" id="reason" name="Reason" placeholder="Reason">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="contact">Contact:</label>
                            <input type="number" class="form-control" id="contact" name="contact" placeholder="Contact Number">
                        </div>
                    </div>
                    <button id="outpassSubmitBtn" type="click" class="btn btn-primary">Submit</button>
                </form>
                <div id="Result"></div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $("#outpassSubmitBtn").click(function(e) {
                e.preventDefault();
                var contact = $("#contact").val();
                var reason = $("#reason").val();
                var place = $("#place").val();
                var leavingDateAndTime = $("#leavingDateAndTime").val();
                var permissionType = $("#permissionType").val();
                var rollNumber = "<?php echo $rollNumber ?>";
                console.log("Hello");
                $.ajax({
                    url: '../functions.php',
                    type: 'POST',
                    data: {
                        permissionType: permissionType,
                        leavingDateAndTime: leavingDateAndTime,
                        place: place,
                        reason: reason,
                        contact: contact,
                        rollNumber:rollNumber,
                        Function: "submitOutpassForm"
                    },
                    success: function(response) {
                        console.log(response);
                        if (response == "OK") {
                            $("#Result").html(`<div class="alert alert-success fade show" role="alert"> Successfully posted! </div>`);
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

        });
    </script>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/gatePass/Includes/Footer.php');

    ?>