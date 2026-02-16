
<!doctype html>
<html lang="en">
 
   
<!-- Mirrored from themesdesign.in/webadmin/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jan 2026 07:44:05 GMT -->
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
                            <a href="index.php" class="d-flex align-items-center  gap-0 auth-logo">
                               
                                <!-- <img src="assets/images/logo-light2.png" alt="" height="30" class="auth-logo-light me-start"> -->
                                  <img src="assets/images/logo-dark2.png" alt="" height="30" class="auth-logo-dark me-start">
                            </a>
                             

                        </div>

                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5>Welcome to the Login page!</h5>
                                     <p class="text-muted">Sign in to continue to webadmin.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="dashboard.php" onsubmit="return validate()" method="POST">
    
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Username <span class="mandatory-color text-danger">*</span></label>
                                            <div class="position-relative input-custom-icon">
                                                
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" autocomplete="off">
                                                <span class="bx bx-user"></span>
                                            </div>
                                            <div class="text-danger small mt-1" id="usernameError"></div>
                                        </div>
            
                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="forgot_password.php" class="text-muted text-decoration-underline">Forgot password?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Password <span class="mandatory-color text-danger">*</label>
                                            <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                <span class="bx bx-lock-alt"></span>
                                                <input type="password" class="form-control" id="password-input" name="password" placeholder="Enter password" autocomplete="off">
                                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                    <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                </button>
                                            </div>
                                            <div class="text-danger small mt-1" id="passwordError"></div>
                                        </div>
            
                                       
                                        <div class="text-danger small mt-1" id="rememberError"></div>
                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                        </div>

                                        <!-- <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="font-size-14 mb-3 mt-2 title"> Sign in with </h5>
                                            </div>
        
                                            <ul class="list-inline mt-2">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="bx bxl-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="bx bxl-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="bx bxl-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> -->

                                        <!--<div class="mt-4 text-center">
                                            <p class="mb-0">Don't have an account ? <a href="register.php" class="fw-medium text-primary"> Signup now </a> </p>
                                        </div>-->
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center p-4">
                           <p> ©<script> document.write(new Date().getFullYear())</script> All Rights Reserved. Powered by <a href="https://avighnaespl.com/" target="_blank" >Avighna Energy Solution Pvt Ltd</a></p>
                        </div>
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
        <script src="assets/js/pages/pass-addon.init.js"></script>
        <script>
            function validate(){
                var  username = document.getElementById("username").value;
                var  password = document.getElementById("password-input").value;
                
                var isValid =true;

                document.getElementById("usernameError").innerHTML = "";
                document.getElementById("passwordError").innerHTML = "";
                
                if (username === "") {
                document.getElementById("usernameError").innerHTML = "Username is required";
                isValid = false;
                }
                if (password === "") {
                document.getElementById("passwordError").innerHTML = "Password is required";
                isValid = false;
                }
                else if (password.length < 6) {
                document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters";
                isValid = false;
                }
                return isValid;
            }
</script>
</body>
<!-- Mirrored from themesdesign.in/webadmin/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jan 2026 07:44:05 GMT -->
</html>