
<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/webadmin/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jan 2026 07:44:05 GMT -->
<head>

        <meta charset="utf-8" />
        <title>ecommerce-adminportal</title>
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
                                <img src="assets/images/logo-dark-sm2.png" alt="" height="30" class="auth-logo-dark me-1">
                                <!-- <img src="assets/images/logo-light2.png" alt="" height="30" class="auth-logo-light me-start"> -->
                                  <img src="assets/images/logo-dark2.png" alt="" height="30" class="auth-logo-dark" style="margin-left:5px">
                            </a>
                        </div> 

                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5>Register</h5>
                                     <p class="text-muted">Get your free webadmin account now.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form  action="index.php" method="POST" onsubmit="return validate()">
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Username <span class="mandatory-color text-danger">*</label>
                                            <div class="position-relative input-custom-icon">
                                                <input type="text" class="form-control" id="username" placeholder="Enter username" autocomplete="off">
                                                <span class="bx bx-user"></span>
                                            </div>
                                            <div class="text-danger small mt-1" id="usernameError"></div>
                                        </div>
                                         <div class="mb-3">
                                            <label class="form-label" for="mobile">Mobile No <span class="mandatory-color text-danger">*</label>
                                            <div class="position-relative input-custom-icon">
                                                <input type="text" class="form-control" id="mobile" placeholder="Enter mobile number" autocomplete="off">
                                                <span class="bx bxs-phone"></span>
                                            </div>
                                            <div class="text-danger small mt-1" id="mobileError"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Email Id <span class="mandatory-color text-danger">*</label>
                                            <div class="position-relative input-custom-icon">
                                                <input type="email" class="form-control" id="useremail" autocomplete="off" placeholder="Enter email id">  
                                                <span class="bx bx-mail-send"></span>
                                            </div>
                                            <div class="text-danger small mt-1" id="emailError"></div>
                                        </div>
            
                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Password <span class="mandatory-color text-danger">*</label>
                                            <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                <span class="bx bx-lock-alt"></span>
                                                <input type="password" class="form-control" id="password-input" placeholder="Enter password" autocomplete="off">
                                            </div>
                                            <div class="text-danger small mt-1" id="passwordError"></div>
                                        </div>

                                          <div class="mb-3">
                                            <label class="form-label" for="confirmpassword">Confirm Password <span class="mandatory-color text-danger">*</label>
                                            <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                <span class="bx bx-lock-alt"></span>
                                                <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm password" autocomplete="off">
                                            </div>
                                            <div class="text-danger small mt-1" id="confirmPasswordError"></div>
                                        </div>


                                        <div class="form-check py-1">
                                            <input type="checkbox" class="form-check-input" id="auth-terms-condition-check" style="border-color: black;">
                                            <label class="form-check-label" for="auth-terms-condition-check">I accept <a href="javascript: void(0);" class="text-body">Terms and Conditions</a></label>
                                        </div>
                                        <div class="text-danger small mt-1" id="termsError"></div>
                                        <div class="mt-3">
                                            <button a href="index.php"class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
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

                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Already have an account ? <a href="index.php" class="fw-medium text-primary"> Login</a></p>
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
                             <p> ©<script> document.write(new Date().getFullYear())</script> All Rights Reserved.  Powered By <a href="https://avighnaespl.com/" target="_blank" >Avighna Energy Solution Pvt Ltd</a></p>
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
<script>
function validate() {
    var email = document.getElementById("useremail");
    var username = document.getElementById("username");
    var mobile = document.getElementById("mobile");
    var password = document.getElementById("password-input");
    var confirmPassword = document.getElementById("confirmpassword");
    var checkbox = document.getElementById("auth-terms-condition-check");

    var isValid = true;

    // Clear errors
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("usernameError").innerHTML = "";
    document.getElementById("mobileError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("confirmPasswordError").innerHTML = "";
    document.getElementById("termsError").innerHTML = "";

    email.classList.remove("is-invalid");
    username.classList.remove("is-invalid");
    mobile.classList.remove("is-invalid");
    password.classList.remove("is-invalid");
    confirmPassword.classList.remove("is-invalid");

    // Email validation
    if (email.value === "") {
        document.getElementById("emailError").innerHTML = "Email is required";
        email.classList.add("is-invalid");
        isValid = false;
    }

    // Username validation
    if (username.value === "") {
        document.getElementById("usernameError").innerHTML = "Username is required";
        username.classList.add("is-invalid");
        isValid = false;
    }

    // Mobile validation
    var mobilePattern = /^[6-9]\d{9}$/;
    if (mobile.value === "") {
        document.getElementById("mobileError").innerHTML = "Mobile number is required";
        mobile.classList.add("is-invalid");
        isValid = false;
    } else if (!mobilePattern.test(mobile.value)) {
        document.getElementById("mobileError").innerHTML = "Enter valid 10-digit mobile number";
        mobile.classList.add("is-invalid");
        isValid = false;
    }

    // Password validation
    if (password.value === "") {
        document.getElementById("passwordError").innerHTML = "Password is required";
        password.classList.add("is-invalid");
        isValid = false;
    } else if (password.value.length < 6) {
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters";
        password.classList.add("is-invalid");
        isValid = false;
    }

     if (password.value !== confirmPassword.value) {
        document.getElementById("confirmPasswordError").innerHTML = "Passwords do not match";
        confirmPassword.classList.add("is-invalid");
        isValid = false;
    } else if (confirmPassword.value.length < 6) {
        document.getElementById("confirmPasswordError").innerHTML = "Password must be at least 6 characters";
        confirmPassword.classList.add("is-invalid");
        isValid = false;
    }
    // Terms & Conditions
    if (!checkbox.checked) {
        document.getElementById("termsError").innerHTML = "You must accept Terms and Conditions";
        isValid = false;
    }

    return isValid;
}
</script>

</body>
</html>