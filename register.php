 <?php
    if (!isset($_POST['authStatus'])) {
        header("Location: adminAuth.php");
    }
    ?>

 <!doctype html>
 <html lang="en" dir="ltr">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Hope UI | Responsive Bootstrap 5 Admin Dashboard Template </title>

     <!-- Favicon -->
     <link rel="shortcut icon" href="/gatePass/assets/images/favicon.ico" />


     <!-- Library / Plugin Css Build -->
     <link rel="stylesheet" href="/gatePass/assets/css/core/libs.min.css" />


     <!-- Hope Ui Design System Css -->
     <link rel="stylesheet" href="/gatePass/assets/css/hope-ui.min.css?v=2.0.0" />

     <!-- Custom Css -->
     <link rel="stylesheet" href="/gatePass/assets/css/custom.min.css?v=2.0.0" />

     <!-- Jquery-3 -->
     <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

     <!-- Dark Css -->
     <link rel="stylesheet" href="/gatePass/assets/css/dark.min.css" />

     <!-- Customizer Css -->
     <link rel="stylesheet" href="/gatePass/assets/css/customizer.min.css" />

     <!-- RTL Css -->
     <link rel="stylesheet" href="/gatePass/assets/css/rtl.min.css" />

     <!-- Parsley css for form validation -->
     <link href="/gatePass/assets/css/parsley.css" rel="stylesheet" />

 </head>

 <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
     <!-- loader Start -->
     <div id="loading">
         <div class="loader simple-loader">
             <div class="loader-body"></div>
         </div>
     </div>
     <!-- loader END -->

     <div class="wrapper">
         <section class="login-content">
             <div class="row m-0 align-items-center bg-white vh-100">
                 <!-- <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="/gatePass/assets/images/auth/05.png" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div> -->
                 <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                     <img src="/gatePass/assets/images/auth/01.png" class="img-fluid gradient-main animated-scaleX" alt="images">
                 </div>
                 <div class="col-md-6">
                     <div class="row justify-content-center">
                         <div class="col-md-10">
                             <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                                 <div class="card-body">
                                     <a href="/gatePass/dashboard/index.html" class="navbar-brand d-flex align-items-center mb-3">
                                         <!--Logo start-->
                                         <!--logo End-->

                                         <!--Logo start-->
                                         <div class="logo-main">
                                             <div class="logo-normal">
                                                 <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                                     <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                                     <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                                     <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                                                 </svg>
                                             </div>
                                             <div class="logo-mini">
                                                 <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                                     <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                                     <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                                     <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                                                 </svg>
                                             </div>
                                         </div>
                                         <!--logo End-->




                                         <h4 class="logo-title ms-3">Hope UI</h4>
                                     </a>
                                     <h2 class="mb-2 text-center">Sign Up</h2>
                                     <p class="text-center">Create your Hope UI account.</p>
                                     <form id='signUpForm'>
                                         <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="form-group">
                                                     <label for="user-name" class="form-label">User Name:</label>
                                                     <input type="text" data-parsley-trigger="change" class="form-control" id="userName" placeholder=" " required>
                                                 </div>
                                             </div>
                                             <div class="col-lg-6">
                                                 <div class="form-group">
                                                     <label for="password" class="form-label">Password</label>
                                                     <input type="password" data-parsley-trigger="change" class="form-control" id="password" placeholder=" " required>
                                                 </div>
                                             </div>
                                             <div class="form-group" id="roleField">
                                                 <label class="form-label" for="courses">Role:</label>
                                                 <select id="role" name="type" class="selectpicker form-control" data-style="py-0" required data-parsley-trigger="change">
                                                     <option hidden disabled selected value>Choose a role</option>
                                                     <option value="Advisor">Class Advisor</option>
                                                     <option value="HOD">HOD</option>
                                                     <option value="Principal">Principal</option>
                                                     <option value="Security">Security</option>
                                                 </select>
                                             </div>
                                             <div id="departmentField" class="form-group" hidden>
                                                 <label class="form-label" for="courses">Department:</label>
                                                 <select id="department" name="type" class="selectpicker form-control" data-style="py-0" required data-parsley-trigger="change">
                                                     <option hidden disabled selected value>Choose a department</option>
                                                     <option value="CSE">CSE</option>
                                                     <option value="ECE">ECE</option>
                                                     <option value="EEE">EEE</option>
                                                     <option value="MECH">MECH</option>
                                                     <option value="AI DS">AI DS</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="d-flex justify-content-center">
                                             <button type="submit" class="btn btn-primary">Sign Up</button>
                                         </div>
                                 </div>
                                 <p class="mt-3 text-center">
                                     Want to login? <a href="login.php" class="text-underline">Log In</a>
                                 </p>
                                 </form>
                                 <div id="Result" class="mt-4 mb-4"></div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="sign-bg sign-bg-right">
                     <svg width="280" height="230" viewBox="0 0 421 359" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <g opacity="0.05">
                             <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8" />
                             <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 149.47 319.328)" fill="#3A57E8" />
                             <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 203.936 99.543)" fill="#3A57E8" />
                             <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857" transform="rotate(45 204.316 -229.172)" fill="#3A57E8" />
                         </g>
                     </svg>
                 </div>
             </div>
     </div>
     </section>
     </div>

     <!-- Library Bundle Script -->
     <script src="/gatePass/assets/js/core/libs.min.js"></script>

     <!-- External Library Bundle Script -->
     <script src="/gatePass/assets/js/core/external.min.js"></script>

     <!-- Widgetchart Script -->
     <script src="/gatePass/assets/js/charts/widgetcharts.js"></script>

     <!-- mapchart Script -->
     <script src="/gatePass/assets/js/charts/vectore-chart.js"></script>
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

     <!-- App Script -->
     <script src="/gatePass/assets/js/hope-ui.js" defer></script>

     <!-- Parsley.js for form validation -->
     <script src="/gatePass/assets/js/parsley.js"></script>
 </body>
 <script>
     $(document).ready(function() {
         $(function() {
             $('#signUpForm').parsley().on('field:validated', function() {
                     var ok = $('.parsley-error').length === 0;
                     $('.bs-callout-info').toggleClass('hidden', !ok);
                     $('.bs-callout-warning').toggleClass('hidden', ok);
                 })
                 .on('form:submit', function() {
                     return false; // Don't submit form for this demo
                 });
         });

         $("#role").change(function(e) {
             var roleValue = $(this).val();
             var isHod = roleValue == 'HOD' || roleValue == 'Advisor' ? 1 : 0;
             // console.log(isHod)
             if (isHod) {
                 $("#departmentField").attr('hidden', false);
                 $("#department").attr('required', true)
             }
             if (!isHod) {
                 $("#departmentField").attr('hidden', true);
                 $("#department").attr('required', false)
             }
         })

          $('#signUpForm').submit(function(e) {
              if ($('#signUpForm').parsley().isValid()) {
                  e.preventDefault();

                  var userName = $("#userName").val();
                  var password = $("#password").val();
                  var role = $("#role").val().toLowerCase();
                  var department = $("#department").val();

                  console.log(role);
                  // AJAX CALL FOR INSERTING 
                  $.ajax({
                      url: 'functions.php',
                      type: 'POST',
                      data: {
                          userName: userName,
                          password: password,
                          role: role,
                          department: department,
                          Function: "register",
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
                          }, 2000);

                      }
                  });
              }
          });
     });
 </script>

 </html>