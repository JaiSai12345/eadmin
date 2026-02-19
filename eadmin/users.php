<<<<<<< HEAD
<?php
include('configure.php');
session_start();
 
/* ---------- DEFAULT USERS (TEMP SESSION DATA) ---------- */
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [
        [
            'user_id' => 'U100',
            'name' => 'Super Admin',
            'contact' => '7676083163',
            'email' => 'info@ssbsoftech.com',
            'user_type' => 'Admin',
            'username' => 'Sadmin',
            'password' => '12345',
            'status' => 'Active'
        ],
        [
            'user_id' => 'U101',
            'name' => 'Umesh',
            'contact' => '7899698412',
            'email' => 'ec412umesh.b@gmail.com',
            'user_type' => 'User',
            'username' => 'umesh',
            'password' => '12345',
            'status' => 'Active'
        ]
    ];
}
 
$error = "";
 
/* ---------- CREATE USER ---------- */
if (isset($_POST['create_user'])) {
 
    $name       = trim($_POST['name']);
    $contact    = trim($_POST['contact']);
    $email      = trim($_POST['email']);
    $user_type  = trim($_POST['user_type']);
    $username   = trim($_POST['username']);
    $password   = trim($_POST['password']);
    $confirm    = trim($_POST['confirm_password']);
 
    if ($name && $contact && $email && $user_type && $username && $password && $confirm) {
 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid Email Format!";
        }
        elseif (!preg_match('/^[0-9]{10}$/', $contact)) {
            $error = "Contact number must be 10 digits!";
        }
        elseif ($password != $confirm) {
            $error = "Passwords do not match!";
        }
        else {
 
            $new_id = 'U' . (100 + count($_SESSION['users']));
 
            $_SESSION['users'][] = [
                'user_id' => $new_id,
                'name' => $name,
                'contact' => $contact,
                'email' => $email,
                'user_type' => $user_type,
                'username' => $username,
                'password' => $password,
                'status' => 'Active'
            ];
 
            header("Location: users.php");
            exit;
        }
 
    } else {
        $error = "All fields are required!";
    }
}
 
 
/* ---------- UPDATE USER ---------- */
if (isset($_POST['update_user'])) {
 
    $id = $_POST['id'];
 
    $_SESSION['users'][$id]['name']      = trim($_POST['name']);
    $_SESSION['users'][$id]['contact']   = trim($_POST['contact']);
    $_SESSION['users'][$id]['email']     = trim($_POST['email']);
    $_SESSION['users'][$id]['username']  = trim($_POST['username']);
    $_SESSION['users'][$id]['user_type'] = trim($_POST['user_type']);
    $_SESSION['users'][$id]['status']    = $_POST['status'];
 
    if (!empty($_POST['password'])) {
        $_SESSION['users'][$id]['password'] = $_POST['password'];
    }
 
    header("Location: users.php");
    exit;
}
?>
 
<?php include('header.php');?>
 
<?php if(!isset($_GET['mode']) || $_GET['mode']==''){ ?>
 
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center ">
                     <span class="card-title mb-0"><b>Users </b>- View Details</span>
                     <a href="users.php?mode=add_users">
                        <button class="btn btn-primary btn-sm waves-effect waves-light">
                           <i class="fa fa-plus me-1"></i> Create
                        </button>
                     </a>
                  </div>
 
                  <div class="card-body">
                     <div id="table-search-count"></div>
                     <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                           <thead>
                              <tr>
                                 <th>S.No.</th>
                                 <th>User Id</th>
                                 <th>User</th>
                                 <th>Contact No.</th>
                                 <th>Email Id</th>
                                 <th>User Type</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($_SESSION['users'] as $i => $user) { ?>
                              <tr>
                                 <td><?= $i+1 ?></td>
                                 <td><?= $user['user_id'] ?></td>
                                 <td><?= htmlspecialchars($user['name']) ?></td>
                                 <td><?= $user['contact'] ?></td>
                                 <td><?= $user['email'] ?></td>
                                 <td><?= $user['user_type'] ?></td>
                                 <td>
                                    <?php if($user['status']=="Active"){ ?>
                                       <span class="badge bg-success">Active</span>
                                    <?php } else { ?>
                                       <span class="badge bg-danger">Inactive</span>
                                    <?php } ?>
                                 </td>
                                 <td class="text-center">
                                    <a href="users.php?mode=update_users&id=<?= $i ?>">
                                       <i class="fa fa-edit text-primary"></i>
                                    </a>
                                 </td>
                              </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
 
<?php } else if($_GET['mode'] == 'add_users'){ ?>
 
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center mb-3 ">
                     <span class="card-title mb-0"><b>Users </b>- Add New</span>
                     <a href="users.php">
                        <button class="btn btn-outline-primary btn-sm waves-effect waves-light">
                           <i class="bx bxs-left-arrow-circle me-1"></i> Back
                        </button>
                     </a>
                  </div>
 
                  <div class="card-body">
 
                  <?php if($error){ ?>
                     <div class="alert alert-danger"><?= $error ?></div>
                  <?php } ?>
 
                  <form method="post">
                  <div class="row">
                     <div class="col-md-3 text-center">
                        <label><b>Users</b><span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" autocomplete="off">
                     </div>
                     <div class="col-md-3 text-center">
                        <label><b>Contact No</b><span class="text-danger">*</span></label>
                        <input type="text" name="contact" class="form-control"  autocomplete="off">
                     </div>
                     <div class="col-md-3 text-center">
                        <label><b>Email</b><span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control"  autocomplete="off">
                     </div>
                     <div class="col-md-3 text-center">
                        <label><b>User Type</b><span class="text-danger">*</span></label>
                        <select class="form-select" name="user_type">
                           <option value="">Select</option>
                           <option>User</option>
                           <option>Admin</option>
                        </select>
                     </div>
                  </div>
                  <br>
 
                  <div class="row mb-4">
                     <div class="col-md-3 text-center">
                        <label><b>Username</b><span class="text-danger">*</span></label>
                        <input type="text" name="username" class="form-control"  autocomplete="off">
                     </div>
                     <div class="col-md-3 text-center">
                        <label><b>Password</b><span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control"  autocomplete="off">
                     </div>
                     <div class="col-md-3 text-center">
                        <label><b>Confirm Password</b><span class="text-danger">*</span></label>
                        <input type="password" name="confirm_password" class="form-control"  autocomplete="off">
                     </div>
 
                     <div class="d-flex justify-content-end mt-3">
                        <button type="submit" name="create_user" class="btn btn-primary waves-effect waves-light">Save</button>
                     </div>
                  </div>
                  </form>
 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
 
<?php } else if($_GET['mode'] == 'update_users'){
      $id = $_GET['id'];
      $user = $_SESSION['users'][$id];
?>
 
<div class="main-content">
   <div class="page-content">
=======
<?php include('configure.php');?>
<?php include('header.php');?>

<!-- If page is null this content has to be displayed -->
<?php if($_GET['mode']==''){ ?>

<!-- MAIN CONTENT START -->
<div class="main-content">
   <!-- PAGE CONTENT START -->
   <div class="page-content">
      <!-- CONTAINER-FLUID START -->
      <div class="container-fluid">
         <!-- ROW START -->
         <div class="row" >
            <div class="col-lg-12">
               <!-- CARD START -->
               <div class="card">
                  <!-- CARD HEADER START -->
                  <div class="card-header d-flex justify-content-between align-items-center ">
                     <span class="card-title mb-0"><b>Users </b>- View Details</span>
                     <a href="users.php?mode=add_users">
                     <button class="btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-plus me-1"></i> Create</button>
                     </a>
                  </div>
                  <!-- CARD HEADER END -->

                   <!-- CARD BODY START -->
                  <div class="card-body">
                     <div id="table-search-count"></div>
                     <!--selector and searchbar is located in custom.js-->
                        <div class="table-responsive" style="height: auto;">
                           <table class="table table-bordered align-middle" style="height: auto; ">
                              <thead>
                                 <tr >
                                    <th>
                                       S.No.
                                       <!-- <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button> -->
                                    </th>
                                     <th>User Id</th>
                <th>User</th>
                <th>Contact No.</th>
                <th>Email Id</th>
                <th>User Type</th>
                <th>Status</th>
                <th>Action</th>
                                    
                                 </tr>
                              </thead>
                              <tbody  id="tableBody">
                                 <tr>
                                    <td>1</td>
                                    <td>U100</td>
                <td>Super Admin</td>
                <td>7676083163</td>
                <td>info@ssbsoftech.com</td>
                <td>Admin</td>
        
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="users.php?mode=update_users"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                   <td>U101</td>
                <td>Umesh</td>
                <td>7899698412</td>
                <td>ec412umesh.b@gmail.com</td>
                <td>User</td>
                                    <td ><span class="badge bg-success ">Active</span></td>
                                    <td class="text-center"><a href="users.php?mode=update_users"><i class="fa fa-edit text-primary "></i></a></td>
                                 </tr>
                                 
                                   
                                    
        
                              </tbody>
                           </table>
                        </div>
                     <!-- PAGE FOOTER-->
                     <div class="d-flex justify-content-between align-items-center mt-2">
                        <small id="tableInfo"></small>
                        <nav>
                           <ul class="pagination pagination-sm mb-0" id="pagination"></ul>
                        </nav>
                     </div>
                     <!-- PAGE FOOTER-->
                  </div>
                  <!-- CARD BODY END -->
               </div>
               <!-- CARD END -->
            </div>
            
         </div>
         <!-- ROW END -->
      </div>
      <!-- CONTAINER-FLUID END -->
   </div>
   <!-- PAGE CONTENT END -->
</div>
<!-- MAIN CONTENT END -->



<!--if mode = add_state start-->
<?php } else if($_GET['mode'] == 'add_users'){ ?>

<!-- MAIN CONTENT START -->
<div class="main-content ">
   <!-- PAGE CONTENT START -->
   <div class="page-content">
      <!-- CONTAINER-FLUID START -->
      <div class="container-fluid">
          <!-- ROW START -->
         <div class="row">
             <!-- COLUMN START -->
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center mb-3 ">
                        <span class="card-title mb-0"><b>Users </b>- Add New</span>
                   
                     <a href="users.php">
                     <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                  
             <div class="card-body">         
         <div class="row">
             <div class="col-md-3 text-center">
            <label><b>Users</b><span class="mandatory-color text-danger">*</span></label>
            <input type="text" class="form-control" value="Super Admin">
          </div> 
          <div class="col-md-3 text-center">
            <label><b>Contact No</b><span class="mandatory-color text-danger">*</span></label>  
            <input type="text" class="form-control">
          </div>
          <div class="col-md-3 text-center">
            <label><b>Email</b><span class="mandatory-color text-danger">*</span></label>
            <input type="email" class="form-control">
          </div>
          <div class="col-md-3 text-center">
            <label><b>User Type</b><span class="mandatory-color text-danger">*</span></label>
            <select class="form-select">
              <option>User</option>
              <option>Admin</option>
            </select>
          </div>
</div>
<br>
        
        <div class="row mb-4">
          <div class="col-md-3 text-center">
            <label><b>Username</b><span class="mandatory-color text-danger">*</span></label>
             <input type="text" class="form-control">
          </div>
          <div class="col-md-3 text-center">
            <label><b>Password</b><span class="mandatory-color text-danger">*</span></label>
            <input type="password" class="form-control">
          </div>
          <div class="col-md-3 text-center">
            <label><b>Confirm Password</b><span class="mandatory-color text-danger">*</span></label>
            <input type="password" class="form-control">
          </div>

        
       
                        <div class="d-flex justify-content-end mt-3"> 
                           <button class="btn btn-primary waves-effect waves-light ">Save</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
</div>
            <!-- COLUMN END -->
         </div>
          <!-- ROW END -->
      </div>
      <!-- CONTAINER-FLUID END -->
   </div>
   <!-- PAGE CONTENT END -->
</div>
<!-- MAIN CONTENT END -->




<!-- else if mode - update_state -->
<?php } else if($_GET['mode'] == 'update_users'){ ?>
<!-- MAIN CONTENT START -->
<div class="main-content">
   <!-- PAGE CONTENT START -->
   <div class="page-content">
      <!-- CONTAINER-FLUID START -->
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center mb-3">
                     <span class="card-title mb-0"><b>Users </b>- Update Details</span>
                     <a href="users.php">
<<<<<<< HEAD
                        <button class="btn btn-outline-primary btn-sm waves-effect waves-light">
                           <i class="bx bxs-left-arrow-circle me-1"></i> Back
                        </button>
                     </a>
                  </div>
 
                  <div class="card-body">
                  <form method="post">
                  <input type="hidden" name="id" value="<?= $id ?>">
 
                  <div class="row">
                     <div class="col-md-3 text-center">
                        <label><b>User Id</b></label>
                        <input type="text" class="form-control" value="<?= $user['user_id'] ?>" readonly style="background-color:#e9ecef"  autocomplete="off">
                     </div>
                     <div class="col-md-3 text-center">
                        <label><b>User</b></label>
                        <input type="text" name="name" value="<?= $user['name'] ?>" class="form-control"  autocomplete="off">
                     </div>
                     <div class="col-md-3 text-center">
                        <label><b>Contact No</b></label>
                        <input type="text" name="contact" value="<?= $user['contact'] ?>" class="form-control"  autocomplete="off">
                     </div>
                     <div class="col-md-3 text-center">
                        <label><b>Email</b></label>
                        <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control"  autocomplete="off">
                     </div>
                  </div>
 
                  <br><br>
 
                  <div class="row mb-3">
                     <div class="col-md-3 text-center">
                        <label><b>Username</b></label>
                        <input type="text" name="username" value="<?= $user['username'] ?>" class="form-control">
                     </div>
                     <div class="col-md-3 text-center">
                        <label><b>Password</b></label>
                        <input type="password" name="password" class="form-control">
                     </div>
                     <div class="col-md-3 text-center">
                        <label><b>User Type</b></label>
                        <input type="text" name="user_type" value="<?= $user['user_type'] ?>" class="form-control">
                     </div>
                  </div>
 
                  <div class="row mb-4">
                     <div class="col-md-3 text-center">
                        <label class="form-label d-block">Status</label>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="status" value="Active" <?= $user['status']=="Active"?'checked':'' ?>>
                           <span class="form-check-label">Active</span>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="status" value="Inactive" <?= $user['status']=="Inactive"?'checked':'' ?>>
                           <span class="form-check-label">Inactive</span>
                        </div>
                     </div>
                  </div>
 
                  <div class="d-flex justify-content-end">
                     <button type="submit" name="update_user" class="btn btn-primary waves-effect waves-light">Update</button>
                  </div>
 
                  </form>
                  </div>
 
=======
                     <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                  <!-- end card header -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3 text-center">
            <label><b>User Id</b><span class="mandatory-color text-danger">*</span></label>
            <input type="text" class="form-control" value="U100" readonly="" style="background-color: #e9ecef">
          </div>
          <div class="col-md-3 text-center">
            <label><b>User</b><span class="mandatory-color text-danger">*</span></label>
            <input type="text" class="form-control" value="Super Admin">
          </div>
          <div class="col-md-3 text-center">
            <label><b>Contact No</b><span class="mandatory-color text-danger">*</span></label>
            <input type="tel" class="form-control" value="7676087732">
          </div>
          <div class="col-md-3 text-center">
            <label><b>Email</b><span class="mandatory-color text-danger">*</span></label>
           <input type="email" class="form-control" value="sai123@gmail.com">
            
          </div>
        </div><br><br>
        <div class="row mb-3">
          <div class="col-md-3 text-center">
            <label><b>Username</b><span class="mandatory-color text-danger">*</span></label>
            <input type="text" class="form-control" value="Sadmin">
          </div>
        <div class="col-md-3 text-center">
            <label><b>Password</b><span class="mandatory-color text-danger">*</span></label>
            <input type="password" class="form-control">
          </div>
         <div class="col-md-3 text-center">
            <label><b>Confirm Password</b><span class="mandatory-color text-danger">*</span></label>
            <input type="password" class="form-control">
          </div>
           <div class="col-md-3 text-center">
            <label><b>User Type</b><span class="mandatory-color text-danger">*</span></label>
            <input type="text" class="form-control" value="admin">
          </div>
        </div>
        <div class="row mb-4">
           <div class="col-md-3 text-center">
           <label class="form-label d-block">Status<span class="mandatory-color text-danger">*</span></label>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="formRadios" id="formRadios1">
                                    <span class="form-check-label" for="formRadios1">Active</span>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="formRadios" id="formRadios2">
                                    <span class="form-check-label" for="formRadios2">Inactive</span>
                              </div>
            </div>
        </div>
                     <br>
                     <div class="d-flex justify-content-end">
                        <button class="btn btn-primary waves-effect waves-light">Update</button> &nbsp;&nbsp;
                       
                         <!-- <button class="btn btn-primary waves-effect waves-light">Reset</button> -->
                     </div>
                  </div>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
               </div>
            </div>
         </div>
      </div>
<<<<<<< HEAD
 
<?php } ?>
 
<?php include('footer.php');?>
<?php include('links.php');?>
<script src="assets/js/custom.js"></script>
</body>
</html>
 
=======
      <!-- CONTAINER-FLUID END -->
      <?php } ?>
   </div>
     <!-- PAGE CONTENT END -->
   <?php include('footer.php');?>
</div>
<!-- MAIN CONTENT END -->
</div>
<!-- LAYOUT WRAPPER END -->
<?php include('links.php');?>
<script src="assets/js/custom.js"></script> 
</body>
</html>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
