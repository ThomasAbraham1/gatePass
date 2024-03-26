<?php
session_start();
if (isset($_SESSION['user_id'])) {
  include('conn.php');
  $user_id = $_SESSION['user_id'];

  // Query for user name and role
  $query = "SELECT * FROM login WHERE sno = $user_id";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $userId = $row['sno'];
    $userName = $row['username'];
    $roleName = $row['logintype'];
  }
  if($roleName == 'student'){
    $query = "SELECT * FROM student_details WHERE sno = $user_id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
      while($row = $result->fetch_assoc()){
        $rollNumber = $row['rollnumber'];
      }
    }
  }


  // // Check for admission form existence for a student
  // $sql = "SELECT * FROM erp_admission WHERE userId = $user_id";
  // $admissionForm = mysqli_query($conn, $sql);

  // // Courses
  // $sql = "SELECT * FROM erp_course";
  // $result = mysqli_query($conn, $sql);
  // if ($result) {
  //   $courses = array();
  //   while ($row = $result->fetch_assoc()) {
  //     $courses[] = $row;
  //   }
  // }

  // // Get users
  // $sql = "SELECT * FROM erp_login";
  // $result=mysqli_query($conn,$sql);
  // $users = array();
  // while($row = $result->fetch_assoc()){
  //   $users[] = $row;
  // }
  
?>
  <!doctype html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Grace College Leave App</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/gatePass/assets/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="/gatePass/assets/css/core/libs.min.css" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="/gatePass/assets/vendor/aos/dist/aos.css" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="/gatePass/assets/css/hope-ui.min.css?v=2.0.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="/gatePass/assets/css/custom.min.css?v=2.0.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="/gatePass/assets/css/dark.min.css" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="/gatePass/assets/css/customizer.min.css" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="/gatePass/assets/css/rtl.min.css" />
    <!-- Jquery-3 -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="jquery.redirect.js"></script>

   <!-- Parsley css for form validation -->
   <link href="/gatePass/assets/css/parsley.css" rel="stylesheet" />

   

<!-- scripts -->


    <!-- Library Bundle Script -->
    <script src="/gatePass/assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="/gatePass/assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="/gatePass/assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="/gatePass/assets/js/charts/vectore-chart.js"></script>
    <script src="/gatePass/assets/js/charts/apexchart.js"></script>
    <script src="/gatePass/assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="/gatePass/assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="/gatePass/assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="/gatePass/assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="/gatePass/assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->
    <script src="/gatePass/assets/vendor/aos/dist/aos.js"></script>

    <!-- App Script -->
    <script src="/gatePass/assets/js/hope-ui.js" defer></script>

    <!-- Parsley.js for form validation -->
    <script src="/gatePass/assets/js/parsley.js"></script>


  </head>

  <body class="  ">
    <!-- loader Start -->
    <!-- <div id="loading">
      <div class="loader simple-loader">
        <div class="loader-body"></div>
      </div>
    </div> -->
    <!-- loader END -->

  <?php 
  } else {
  header("Location: /gatePass/login.php");
}
  ?>