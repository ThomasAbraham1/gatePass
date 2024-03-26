<!doctype html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Hope UI | Responsive Bootstrap 5 Admin Dashboard Template</title>

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
            <div class="col-md-6">
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                        <div class="card-body">
                           <a href="dashboard/index.html" class="navbar-brand d-flex align-items-center mb-3">
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




                              <h4 class="logo-title ms-3">CMS</h4>
                           </a>
                           <h2 class="mb-2 text-center">Gate Pass Log In</h2>
                           <p class="text-center">Login to stay connected.</p>
                           <form id="loginForm" class="mb-2">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="username" class="form-label">Email</label>
                                       <input type="text" class="form-control" name="username" id="username" aria-describedby="username" data-parsley-trigger="change" placeholder="" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" data-parsley-trigger="change" data-parsley-minlength="8" data-parsley-pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$" data-parsley-pattern-message="The password must include at least 1 upper case letter, 8 characters and a symbol" class="form-control" id="password" placeholder=" " required>
                                                </div>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign In</button>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <ul class="list-group list-group-horizontal list-group-flush">
                                    <!-- <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="/gatePass/assets/images/brands/im.svg" alt="im"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="/gatePass/assets/images/brands/li.svg" alt="li"></a>
                                    </li> -->
                                 </ul>
                              </div>
                           </form>
                           <div id="Result"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="sign-bg">
                  <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                     <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF"/>
                     <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF"/>
                     <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 61.9355 138.545)" fill="#3B8AFF"/>
                     <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857" transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF"/>
                     </g>
                  </svg>
               </div> -->
            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="/gatePass/assets/images/auth/01.png" class="img-fluid gradient-main animated-scaleX" alt="images">
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

   <script>
      $(document).ready(function() {
        //  $(function() {
        //     $('#loginForm').parsley().on('field:validated', function() {
        //           var ok = $('.parsley-error').length === 0;
        //           $('.bs-callout-info').toggleClass('hidden', !ok);
        //           $('.bs-callout-warning').toggleClass('hidden', ok);
        //        })
        //        .on('form:submit', function() {
        //           return false; // Don't submit form for this demo
        //        });
        //  });

         $('#loginForm').submit(function(e) {
            // if ($('#loginForm').parsley().isValid()) {
               e.preventDefault();

               var username = $("#username").val();
               var password = $("#password").val();
               // var Pickup_Time = $("#Pickup_Time").val();
               // var Stop_Name = $("#Stop_Name").val();
               // var Drop_Time = $("#Drop_Time").val();
               // console.log(Route_No + 'HI');


               // var formData = new FormData(this); 

               // // add selected value to formData
               // formData.append('event_name', event_name);

               // console.log(formData);
               // AJAX CALL FOR INSERTING 
               $.ajax({
                  url: 'functions.php',
                  type: 'POST',
                  // data: formData,
                  // processData: false,
                  // contentType: false,
                  data: {
                     username: username,
                     password: password,
                     // Route_No: Route_No,
                     // Route_Name: Route_Name,
                     // Pickup_Time: Pickup_Time,
                     // Stop_Name: Stop_Name,
                     // Drop_Time: Drop_Time,
                     Function: "Login"
                  },
                  success: function(response) {
                     response = response.split('|');
                     responseMsg = response[0];
                     response = response[1];
                     console.log(responseMsg);
                     if (responseMsg == "OK") {
                        $("#Result").html(`<div class="alert alert-success fade show" role="alert"> Successfully logged in! </div>`);
                        if(response == 'hod') window.location.href = "/gatePass/" + response+ "/pages/homePage.php";
                        if(response == 'principal') window.location.href = "/gatePass/" + response+ "/pages/homePage.php";
                        if(response == 'student') window.location.href = "/gatePass/" + response+ "/pages/homePage.php";
                        if(response == 'advisor') window.location.href = "/gatePass/" + response+ "/pages/homePage.php";
                     } else {
                        $("#Result").html(`<div class="alert alert-danger fade show" role="alert"> ${responseMsg}</div>`);
                     }
                    //  setTimeout(function() {
                    //     $("#Result").html('');
                    //  }, 5000);

                  }
               });
            // }
         });
      });
   </script>



</body>

</html>