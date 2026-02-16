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
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b> Add </b>- Update Access</span>
                  </div>
                  <!-- CARD HEADER END -->
 
        <div class="card-body">
 
            <!-- Form Row -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <label class="form-label fw-bold">
                        User Id <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" style="background:#e9ecef;" value="20003" readonly>
                </div>
 
                <div class="col-md-3">
                    <label class="form-label fw-bold">
                        User Name <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" style="background:#e9ecef;" value="AESPL" readonly>
                </div>
 
                <div class="col-md-3">
                    <label class="form-label fw-bold">
                        User Type <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" style="background:#e9ecef;" value="User" readonly>
                </div>
 
                <div class="col-md-3">
                    <label class="form-label fw-bold">
                        Mobile No <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" style="background:#e9ecef;"  value="987654321" readonly>
                </div>
            </div>
 
            <!-- Check / Uncheck -->
            <div class="text-center check-text" style=" font-weight:500;margin:15px 0;">
                Check All &nbsp; / &nbsp; Uncheck All
            </div>
 
            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead style=" background:#e9ecef;">
                        <tr>
                            <th class="text-start">Module Name</th>
                            <th class="text-start">Menu Name</th>
                            <th>Access</th>
                        </tr>
                    </thead>
                    <tbody class="text-start">
 
                        <tr>
                            <td>Users</td>
                            <td>User Info</td>
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                        </tr>
 
                        <tr>
                            <td>Users</td>
                            <td>Access Control</td>
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                        </tr>
 
                        <tr>
                            <td>Masters</td>
                            <td>State</td>
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                        </tr>
 
                        <tr>
                            <td>Masters</td>
                            <td>Category</td>
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                        </tr>
 
                        <tr>
                            <td>Masters</td>
                            <td>Designation</td>
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                        </tr>
 
                        <tr>
                            <td>Masters</td>
                            <td>Document Type</td>
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                        </tr>
 
                        <tr>
                            <td>Employees</td>
                            <td>New Employee</td>
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                        </tr>
 
                        <tr>
                            <td>Employees</td>
                            <td>Manage Employee</td>
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                        </tr>
 
                        <tr>
                            <td>Attendance</td>
                            <td>New Attendance</td>
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                        </tr>
 
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
            <!-- COLUMN END -->
         </div>
          <!-- ROW END -->
           <!-- CONTAINER-FLUID END -->
      <?php } ?>
      </div>
      <!-- CONTAINER-FLUID END -->
   </div>
   <!-- PAGE CONTENT END -->
     <?php include('footer.php');?>
</div>
<!-- MAIN CONTENT END -->
<!-- LAYOUT WRAPPER END -->
<?php include('links.php');?>
<script src="assets/js/custom.js"></script>
</body>
</html>
 
 
 
 