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
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center mb-3">
                     <span class="card-title mb-0"><b>Users </b>- Update Details</span>
                     <a href="users.php">
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
               </div>
            </div>
         </div>
      </div>
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