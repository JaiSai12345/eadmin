<?php
include('configure.php');
session_start();  
 
/* ---------- TEMP DATA (REPLACE WITH DB LATER) ---------- */
if (!isset($_SESSION['units'])) {
    $_SESSION['units'] = [
        ['name' => 'Kgs', 'status' => 'Active'],
        ['name' => 'Pcs', 'status' => 'Active'],
        ['name' => 'Boxes', 'status' => 'Active'],
        ['name' => 'Ton', 'status' => 'In-Active'],
    ];
}
 
/* ---------- CREATE UNIT ---------- */
if (isset($_POST['create_unit'])) {
    $_SESSION['units'][] = [
        'name' => trim($_POST['unit_name']),
        'status' => 'Active'
    ];
    header("Location: units.php");
    exit;
}
 
/* ---------- UPDATE UNIT ---------- */
if (isset($_POST['update_unit'])) {
    $id = $_POST['id'];
    $_SESSION['units'][$id]['name']   = trim($_POST['unit_name']);
    $_SESSION['units'][$id]['status'] = $_POST['status'];
 
    header("Location: units.php");
    exit;
}
 
/* ---------- DELETE UNIT ---------- */
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    if (isset($_SESSION['units'][$id])) {
        unset($_SESSION['units'][$id]);
        $_SESSION['units'] = array_values($_SESSION['units']);
    }
    header("Location: units.php");
    exit;
}
 
include('header.php');
?>
 
<!-- ================= VIEW UNITS ================= -->
<?php if (!isset($_GET['mode'])) { ?>
 
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Unit</b> - View Details</span>
                     <a href="units.php?mode=add_unit" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus me-1"></i> Create
                     </a>
                  </div>
 
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                           <thead >
                              <tr>
                                 <th>S.No.</th>
                                 <th>Unit Name</th>
                                 <th>Status</th>
                                 <th class="text-center">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($_SESSION['units'] as $i => $unit) { ?>
                              <tr>
                                 <td><?= $i + 1 ?></td>
                                 <td><?= htmlspecialchars($unit['name']) ?></td>
                                 <td>
                                    <?php if ($unit['status'] == 'Active') { ?>
                                       <span class="badge bg-success">Active</span>
                                    <?php } else { ?>
                                       <span class="badge bg-danger">In-Active</span>
                                    <?php } ?>
                                 </td>
                                 <td class="text-center">
                                    <a href="units.php?mode=update_unit&id=<?= $i ?>" class="me-2">
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
 
<!-- ================= ADD UNIT ================= -->
<?php } else if ($_GET['mode'] == 'add_unit') { ?>
 
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Unit</b> - Add New Details</span>
                     <a href="units.php">
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
                                 Unit Name <span class="text-danger">*</span>
                              </label>
                              <input type="text"
                                     name="unit_name"
                                     class="form-control text-center"
                                     required autocomplete="off">
                           </div>
                        </div>
 
                        <div class="d-flex justify-content-end mt-3">
                           <button type="submit"
                                   name="create_unit"
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
 
<!-- ================= UPDATE UNIT ================= -->
<?php } else if ($_GET['mode'] == 'update_unit') {
      $id = $_GET['id']; ?>
 
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Unit</b> - Update Details</span>
                     <a href="units.php" class="btn btn-outline-primary btn-sm">
                        <i class="bx bxs-left-arrow-circle me-1"></i> Back
                     </a>
                  </div>
 
                  <div class="card-body">
                     <form method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
 
                        <div class="row text-center justify-content-center">
                           <div class="col-md-4">
                              <label class="form-label">
                                 Unit Name <span class="text-danger">*</span>
                              </label>
                              <input type="text"
                                     name="unit_name"
                                     value="<?= $_SESSION['units'][$id]['name'] ?>"
                                     class="form-control text-center"
                                     required>
                           </div>
 
     
                           <div class="col-md-4">
                              <label class="form-label d-block">
                                 Status <span class="text-danger">*</span>
                              </label>
 
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input"
                                        type="radio"
                                        name="status"
                                        value="Active"
                                        <?= $_SESSION['units'][$id]['status'] == 'Active' ? 'checked' : '' ?>>
                                 <span class="form-check-label">Active</span>
                              </div>
 
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input"
                                        type="radio"
                                        name="status"
                                        value="In-Active"
                                        <?= $_SESSION['units'][$id]['status'] == 'In-Active' ? 'checked' : '' ?>>
                                 <span class="form-check-label">Inactive</span>
                              </div>
                           </div>
                        </div>
 
                        <div class="d-flex justify-content-end mt-3">
                           <button type="submit"
                                   name="update_unit"
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
 
 