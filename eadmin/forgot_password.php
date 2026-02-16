
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/webadmin/layouts/auth-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jan 2026 07:44:05 GMT -->
<head>

        <meta charset="utf-8" />
         <title>E-comm Admin Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon2.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    
    <body>

    <!-- <body data-layout="horizontal"> -->

    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">

                         <div class="mb-4 pb-2">
                            <!-- <a href="index.php" class="d-block auth-logo">
                                <img src="assets/images/logo-dark2.png" alt="" height="30" class="auth-logo-dark me-start">
                                <img src="assets/images/logo-light2.png" alt="" height="30" class="auth-logo-light me-start">
                            </a> -->
                             <a href="index.php" class="d-flex align-items-center  gap-0 auth-logo">
                               <!-- <img src="assets/images/logo-dark-sm2.png" alt="" height="30" class="auth-logo-dark me-1">-->
                                 <img src="assets/images/logo-light2.png" alt="" height="30" class="auth-logo-light me-start">
                                  <img src="assets/images/logo-dark2.png" alt="" height="30" class="auth-logo-dark me-start">
                            </a>
                        </div> 

                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5>Reset Password</h5>
                                    <p class="text-muted">Reset Password with webadmin.</p>
                                </div>
                                <div class="p-2 mt-4">

                                    <div class="alert alert-success text-center small mb-4" role="alert">
                                        Enter your Email and instructions will be sent to you!
                                    </div>

                                    <form action="index.php" onsubmit="return validate()" method="POST" >
        
                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Registered Email Id <span class="mandatory-color text-danger">*</label>
                                            <div class="position-relative input-custom-icon">
                                                <input type="email" class="form-control" id="useremail" placeholder="Enter Registered Email Id" autocomplete="off">  
                                                <span class="bx bx-mail-send"></span>
                                            </div>
                                            <div class="text-danger small mt-1" id="emailError"></div>
                                        </div>
                                        
                                        <div class="mt-4">
                                            <button  class="btn btn-primary w-100 waves-effect waves-light" type="submit">Reset</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Remember It ? <a href="index.php" class="fw-medium text-primary"> Sign in </a></p>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center p-4">
                            <p> ©<script> document.write(new Date().getFullYear())</script> All Rights Reserved.  Powered by <a href="https://avighnaespl.com/" target="_blank" >Avighna Energy Solution Pvt Ltd</a></p>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/eva-icons/eva.min.js"></script>



<script>
function validate() {
    var email = document.getElementById("useremail");
    var emailError = document.getElementById("emailError");

    emailError.innerHTML = "";
    email.classList.remove("is-invalid");

    // Empty check
    if (email.value === "") {
        emailError.innerHTML = "Email is required";
        email.classList.add("is-invalid");
        return false;
    }

    // Email format check
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email.value)) {
        emailError.innerHTML = "Enter a valid email address";
        email.classList.add("is-invalid");
        return false;
    }

    alert("Password is sent to your Registerd Email Id ");

     window.location.href = "index.php";

  
    return false;

    
}
</script>


</body>


<!-- Mirrored from themesdesign.in/webadmin/layouts/auth-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jan 2026 07:44:05 GMT -->
</html>