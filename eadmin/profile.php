<?php include('header.php'); ?>
 
<!-- MAIN CONTENT START -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
 
            <div class="row">
                <div class="col-lg-12">
 
                    <!-- ================= PROFILE CARD ================= -->
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title mb-0">Profile</span>
                        </div>
 
                        <div class="card-body">
                            <form id="userprofile_form">
                                <div class="row">
 
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label text-muted">Full Name</label>
                                            <p>Martin Gurley</p>
                                        </div>
                                    </div>
 
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label text-muted">User Id</label>
                                            <p>U0123</p>
                                        </div>
                                    </div>
 
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label text-muted">Username</label>
                                            <p>WebAdmin</p>
                                        </div>
                                    </div>
 
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label text-muted">Mobile No</label>
                                            <p>+91 901 2345 678</p>
                                        </div>
                                    </div>
 
                                </div>
 
                                <div class="row">
 
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label text-muted">Email Id</label>
                                            <p>Martin123@gmail.com</p>
                                        </div>
                                    </div>
 
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label text-muted">User Type</label>
                                            <p>Admin</p>
                                        </div>
                                    </div>
 
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label text-muted">Address</label>
                                            <p>123 main street, Bengaluru Karnataka</p>
                                        </div>
                                    </div>
 
                                </div>
                            </form>
                        </div>
                    </div>
 
                    <!-- ================= CHANGE PASSWORD CARD ================= -->
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title mb-0">Change Password</span>
                        </div>
 
                        <div class="card-body">
 
                            <form method="POST" onsubmit="return validate();">
 
                                <div class="row">
 
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="username"
                                                   placeholder="WebAdmin"
                                                   autocomplete="off">
                                        </div>
                                        <div class="text-danger small mt-1" id="usernameError"></div>
                                    </div>
 
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password"
                                                   class="form-control"
                                                   id="password-input"
                                                   placeholder="Enter password">
                                        </div>
                                        <div class="text-danger small mt-1" id="passwordError"></div>
                                    </div>
 
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password"
                                                   class="form-control"
                                                   id="confirmpassword"
                                                   placeholder="Change Password">
                                        </div>
                                        <div class="text-danger small mt-1" id="confirmPasswordError"></div>
                                    </div>
 
                                </div>
 
                                <div class="d-flex justify-content-end">
                                    <button type="submit"
                                            class="btn btn-primary waves-effect waves-light">
                                        Save
                                    </button>
                                </div>
 
                            </form>
 
                        </div>
                    </div>
 
                </div>
            </div>
 
        </div>
    </div>
 
    <?php include('footer.php'); ?>
</div>
 
<?php include('links.php'); ?>
 
<script>
function validate() {
 
    var username = document.getElementById("username");
    var password = document.getElementById("password-input");
    var confirmPassword = document.getElementById("confirmpassword");
 
    var isValid = true;
 
    // Clear previous errors
    document.getElementById("usernameError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("confirmPasswordError").innerHTML = "";
 
    username.classList.remove("is-invalid");
    password.classList.remove("is-invalid");
    confirmPassword.classList.remove("is-invalid");
 
    // Username validation
    if (username.value.trim() === "") {
        document.getElementById("usernameError").innerHTML = "Username is required";
        username.classList.add("is-invalid");
        isValid = false;
    }
 
    // Password validation
    if (password.value.trim() === "") {
        document.getElementById("passwordError").innerHTML = "Password is required";
        password.classList.add("is-invalid");
        isValid = false;
    } else if (password.value.length < 6) {
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters";
        password.classList.add("is-invalid");
        isValid = false;
    }
 
    // Confirm password validation
    if (confirmPassword.value.trim() === "") {
        document.getElementById("confirmPasswordError").innerHTML = "Confirm Password is required";
        confirmPassword.classList.add("is-invalid");
        isValid = false;
    } else if (password.value !== confirmPassword.value) {
        document.getElementById("confirmPasswordError").innerHTML = "Passwords do not match";
        confirmPassword.classList.add("is-invalid");
        isValid = false;
    }
 
    return isValid;
}
</script>
 
</body>
</html>