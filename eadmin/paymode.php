<?php
include('configure.php');
session_start();
 
/* ---------- DEFAULT DATA ---------- */
if (!isset($_SESSION['paymodes'])) {
    $_SESSION['paymodes'] = [
        ['name' => 'Cash',   'status' => 'Active'],
        ['name' => 'UPI',    'status' => 'Active'],
        ['name' => 'Cheque', 'status' => 'Active'],
        ['name' => 'IMPS',   'status' => 'Active'],
        ['name' => 'RTGS',   'status' => 'Active']
    ];
}
 
/* ---------- CREATE ---------- */
if (isset($_POST['create_paymode'])) {
 
    $_SESSION['paymodes'][] = [
        'name'   => trim($_POST['paymode_name']),
        'status' => 'Active'
    ];
 
    header("Location: paymode.php");
    exit;
}
 
/* ---------- UPDATE ---------- */
if (isset($_POST['update_paymode'])) {
 
    $id = $_POST['id'];
 
    $_SESSION['paymodes'][$id]['name']   = trim($_POST['paymode_name']);
    $_SESSION['paymodes'][$id]['status'] = $_POST['status'];
 
    header("Location: paymode.php");
    exit;
}
 
include('header.php');
?>
 
<?php if (!isset($_GET['mode']) || $_GET['mode']=='') { ?>
 
<!-- ================= VIEW PAGE ================= -->
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
 
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0">
                        <b>Payment Mode</b> - View Details
                     </span>
                     <a href="paymode.php?mode=add_paymode">
                        <button class="btn btn-primary btn-sm">
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
                                 <th>Payment Mode</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
 
                           <?php foreach($_SESSION['paymodes'] as $i=>$mode){ ?>
                              <tr>
                                 <td><?= $i+1 ?></td>
                                 <td><?= $mode['name'] ?></td>
                                 <td>
                                    <?php if($mode['status']=="Active"){ ?>
                                       <span class="badge bg-success">Active</span>
                                    <?php } else { ?>
                                       <span class="badge bg-danger">In-Active</span>
                                    <?php } ?>
                                 </td>
                                 <td class="text-center">
                                    <a href="paymode.php?mode=update_paymode&id=<?= $i ?>">
                                       <i class="fa fa-edit text-primary"></i>
                                    </a>
                                 </td>
                              </tr>
                           <?php } ?>
 
                           </tbody>
                        </table>
                     </div>
 
                     <div class="d-flex justify-content-between align-items-center mt-2">
                        <small>
                           Showing 1 to <?= count($_SESSION['paymodes']) ?>
                           of <?= count($_SESSION['paymodes']) ?> entries
                        </small>
                     </div>
 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
 
<?php } else if ($_GET['mode']=='add_paymode') { ?>
 
<!-- ================= ADD PAGE ================= -->
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
 
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0">
                        <b>Payment Mode</b> - Add New
                     </span>
                     <a href="paymode.php">
                        <button class="btn btn-outline-primary btn-sm">
                           <i class="bx bxs-left-arrow-circle me-1"></i> Back
                        </button>
                     </a>
                  </div>
 
                  <div class="card-body">
                     <form method="post">
                        <div class="row justify-content-center">
 
                           <div class="col-md-4 text-center">
                              <label class="form-label fw-bold">
                                 Payment Mode <span class="text-danger">*</span>
                              </label>
                              <input type="text"
                                     name="paymode_name"
                                     class="form-control text-center"
                                    autocomplte="off">
                           </div>
 
                        </div>
 
                        <div class="d-flex justify-content-end mt-3">
                           <button type="submit"
                                   name="create_paymode"
                                   class="btn btn-primary">
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
</div>
 
<?php } else if ($_GET['mode']=='update_paymode') {
 
   $id = $_GET['id'];
   $mode = $_SESSION['paymodes'][$id];
?>
 
<!-- ================= UPDATE PAGE ================= -->
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
 
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0">
                        <b>Payment Mode</b> - Update Details
                     </span>
                     <a href="paymode.php">
                        <button class="btn btn-outline-primary btn-sm">
                           <i class="bx bxs-left-arrow-circle me-1"></i> Back
                        </button>
                     </a>
                  </div>
 
                  <div class="card-body">
                     <form method="post">
 
                        <input type="hidden" name="id" value="<?= $id ?>">
 
                        <div class="row justify-content-center text-center">
 
                           <div class="col-md-4">
                              <label>
                                 Payment Mode <span class="text-danger">*</span>
                              </label>
                              <input type="text"
                                     name="paymode_name"
                                     value="<?= $mode['name'] ?>"
                                     class="form-control text-center"
                                      autocomplte="off">
                           </div>
 
                           <div class="col-md-3">
                              <label class="form-label d-block">
                                 Status <span class="text-danger">*</span>
                              </label>
 
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input"
                                        type="radio"
                                        name="status"
                                        value="Active"
                                        <?= $mode['status']=="Active" ? "checked" : "" ?>>
                                 <label class="form-check-label">Active</label>
                              </div>
 
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input"
                                        type="radio"
                                        name="status"
                                        value="Inactive"
                                        <?= $mode['status']=="Inactive" ? "checked" : "" ?>>
                                 <label class="form-check-label">Inactive</label>
                              </div>
                           </div>
 
                        </div>
 
                        <div class="d-flex justify-content-end mt-3">
                           <button type="submit"
                                   name="update_paymode"
                                   class="btn btn-primary">
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
 
<?php include('footer.php'); ?>
<?php include('links.php'); ?>
<script src="assets/js/custom.js"></script>
</body>
</html>
 
 