<?php
include('configure.php');
session_start();
 
/* ---------- DEFAULT BRANCHES ---------- */
if (!isset($_SESSION['branches'])) {
    $_SESSION['branches'] = [
        [
            'id' => 'B001',
            'name' => 'SSB Softech BNG',
            'city' => 'Bangalore',
            'state' => 'Karnataka',
            'address' => 'BSK 3rd Stage',
            'gst' => '0',
            'contact' => '7676083163',
            'status' => 'Active'
        ],
        [
            'id' => 'B002',
            'name' => 'SSB Softech PNQ',
            'city' => 'Pune',
            'state' => 'Maharashtra',
            'address' => 'Pimpri Main Road',
            'gst' => '0',
            'contact' => '7899698412',
            'status' => 'Inactive'
        ]
    ];
}
 
/* ---------- UPDATE BRANCH ---------- */
if (isset($_POST['update_branch'])) {
 
    $id = $_POST['index'];
 
    $_SESSION['branches'][$id]['name'] = $_POST['name'];
    $_SESSION['branches'][$id]['address'] = $_POST['address'];
    $_SESSION['branches'][$id]['gst'] = $_POST['gst'];
    $_SESSION['branches'][$id]['contact'] = $_POST['contact'];
    $_SESSION['branches'][$id]['city'] = $_POST['city'];
    $_SESSION['branches'][$id]['state'] = $_POST['state'];
    $_SESSION['branches'][$id]['status'] = $_POST['status'];
 
    header("Location: branch.php");
    exit;
}
 
include('header.php');
?>
 
<?php if(!isset($_GET['mode']) || $_GET['mode']==''){ ?>
 
<!-- ================= VIEW PAGE ================= -->
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
 
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Branch </b>- View Details</span>
                  </div>
 
                  <div class="card-body">
                     <div id="table-search-count"></div>
                     <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                           <thead>
                              <tr>
                                 <th>S.No.</th>
                                 <th>Branch Id</th>
                                 <th>Branch Name</th>
                                 <th>City</th>
                                 <th>State</th>
                                 <th>Address</th>
                                 <th>GST No</th>
                                 <th>Contact No</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                           <?php foreach($_SESSION['branches'] as $i=>$branch){ ?>
                              <tr>
                                 <td><?= $i+1 ?></td>
                                 <td><?= $branch['id'] ?></td>
                                 <td><?= $branch['name'] ?></td>
                                 <td><?= $branch['city'] ?></td>
                                 <td><?= $branch['state'] ?></td>
                                 <td><?= $branch['address'] ?></td>
                                 <td><?= $branch['gst'] ?></td>
                                 <td><?= $branch['contact'] ?></td>
                                 <td>
                                    <?php if($branch['status']=="Active"){ ?>
                                       <span class="badge bg-success">Active</span>
                                    <?php } else { ?>
                                       <span class="badge bg-danger">In-Active</span>
                                    <?php } ?>
                                 </td>
                                 <td class="text-center">
                                    <a href="branch.php?mode=edit&id=<?= $i ?>">
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
 
<?php } else if($_GET['mode'] == 'edit'){
 
   $index = $_GET['id'];
   $branch = $_SESSION['branches'][$index];
?>
 
<!-- ================= UPDATE PAGE ================= -->
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
 
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Branch </b>- Update Details</span>
                     <a href="branch.php">
                        <button class="btn btn-outline-primary btn-sm">
                           <i class="bx bxs-left-arrow-circle me-1"></i> Back
                        </button>
                     </a>
                  </div>
 
                  <div class="card-body">
                  <form method="post">
                  <input type="hidden" name="index" value="<?= $index ?>">
 
                  <div class="row mb-3">
                     <div class="col-sm-3 text-center">
                        <label>Branch Id</label>
                        <input type="text" class="form-control text-center" value="<?= $branch['id'] ?>" readonly>
                     </div>
                     <div class="col-sm-3 text-center">
                        <label>Branch Name</label>
                        <input type="text" name="name" class="form-control text-center" value="<?= $branch['name'] ?>">
                     </div>
                     <div class="col-sm-6 text-center">
                        <label>Address</label>
                        <textarea name="address" class="form-control"><?= $branch['address'] ?></textarea>
                     </div>
                  </div>
 
                  <div class="row mb-3">
                     <div class="col-sm-3 text-center">
                        <label>GST No</label>
                        <input type="text" name="gst" class="form-control text-center" value="<?= $branch['gst'] ?>">
                     </div>
                     <div class="col-sm-3 text-center">
                        <label>Contact No</label>
                        <input type="text" name="contact" class="form-control text-center" value="<?= $branch['contact'] ?>">
                     </div>
                     <div class="col-sm-3 text-center">
                        <label>City</label>
                        <input type="text" name="city" class="form-control text-center" value="<?= $branch['city'] ?>">
                     </div>
                     <div class="col-sm-3 text-center">
                        <label>State</label>
                        <select name="state" class="form-select text-center">
                           <option <?= $branch['state']=="Karnataka"?"selected":"" ?>>Karnataka</option>
                           <option <?= $branch['state']=="Maharashtra"?"selected":"" ?>>Maharashtra</option>
                           <option <?= $branch['state']=="Tamilnadu"?"selected":"" ?>>Tamilnadu</option>
                           <option <?= $branch['state']=="Delhi"?"selected":"" ?>>Delhi</option>
                        </select>
                     </div>
                  </div>
 
                  <div class="row">
                     <div class="col-sm-3 text-center">
                        <label class="d-block">Status</label>
 
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="status" value="Active" <?= $branch['status']=="Active"?"checked":"" ?>>
                           <span class="form-check-label">Active</span>
                        </div>
 
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="status" value="Inactive" <?= $branch['status']=="Inactive"?"checked":"" ?>>
                           <span class="form-check-label">Inactive</span>
                        </div>
                     </div>
                  </div>
 
                  <br>
 
                  <div class="d-flex justify-content-end">
                     <button type="submit" name="update_branch" class="btn btn-primary">
                        Update
                     </button>
                  </div>
 
                  </form>
                  </div>
 
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
 
<?php } ?>
 
<?php include('footer.php');?>
<?php include('links.php');?>
<script src="assets/js/custom.js"></script>
</body>
</html>