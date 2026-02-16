<?php include('header.php'); ?>
<!-- MAIN CONTENT START -->
    <div class="main-content">
        <!-- PAGE CONTENT START -->
        <div class="page-content">
              <!-- CONTAINER-FLUID START -->
            <div class="container-fluid">
                 <!-- ROW START -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- CARD START -->
                        <div class="card">
                            <div class="card-header">
                                <span class="card-title mb-0">Profile</span>
                            </div>
                            <div class="card-body">
                                <form  id="userprofile_form">
                                   <div class="row">
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label text-muted">Full Name</label>
                                                <p>Martin Gurley</p>
                                            </div>
                                        </div>
                                                        
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="basicpill-lastname-input" class="form-label text-muted">User Id</label>
                                                <p>U0123</p>
                                            </div>
                                        </div>
                                                        
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="basicpill-phoneno-input" class="form-label text-muted">Username</label>
                                                <p>WebAdmin</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="basicpill-phoneno-input" class="form-label text-muted">Mobile No</label>
                                                <p>+91 901 2345 678</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="basicpill-email-input"class="form-label text-muted">Email Id</label>
                                                <p>Martin123@gmail.com</p>
                                            </div>
                                        </div>
                                                        
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="basicpill-address-input"class="form-label text-muted" >User Type</label>
                                                    <p>Admin</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-phoneno-input" class="form-label text-muted">Address</label>
                                                <p>123 main street,Bengaluru karnataka</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- CARD END -->
                        <!-- CARD START -->
                        <div class="card">
                            <div class="card-header ">
                                <span class="card-title mb-0">Change Password</span>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="basicpill-phoneno-input" class="form-label">Username</label>
                                                    <input type="text" class="form-control" placeholder="WebAdmin" >
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="basicpill-phoneno-input" class="form-label">Password</label>
                                                    <input type="text" class="form-control" placeholder="Enter password" id="basicpill-phoneno-input">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="basicpill-email-input" class="form-label">Confirm Password</label>
                                                    <input type="email" class="form-control" placeholder="Change Password" id="basicpill-email-input">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="d-flex justify-content-end align-items-end">
                                    <button class="btn btn-primary btn-sm waves-effect waves-light" onclick= " alert('User profile saved successfully!')">Save</button>
                                </div>
                            </div>
                        </div>
                        <!-- CARD END -->
                    </div>
                </div>
                 <!-- ROW END -->
            </div>
              <!-- CONTAINER-FLUID END -->
        </div>
        <!-- PAGE CONTENT END -->
        <?php include('footer.php'); ?>
    </div>
    <!-- MAIN CONTENT END -->
    </div>
<!-- LAYOUT WRAPPER END -->
<?php include('links.php');?>

 

</body>
</html>
