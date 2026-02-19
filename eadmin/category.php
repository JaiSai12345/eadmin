<?php
include('configure.php');
session_start();  
 
/* ---------- TEMP DATA (REPLACE WITH DB LATER) ---------- */
if (!isset($_SESSION['category'])) {
    $_SESSION['category'] = [
        ['name' => 'Rice', 'status' => 'Active'],
        ['name' => 'Vegetables', 'status' => 'Active'],
        ['name' => 'Flour', 'status' => 'Active'],
        ['name' => 'Fruits', 'status' => 'In-Active'],
    ];
}
 
/* ---------- CREATE CATEGORY ---------- */
if (isset($_POST['create_category'])) {
    $_SESSION['category'][] = [
        'name' => trim($_POST['category_name']),
        'status' => 'Active'
    ];
    header("Location: category.php");
    exit;
}
 
/* ---------- UPDATE CATEGORY ---------- */
if (isset($_POST['update_category'])) {
    $id = $_POST['id'];
    $_SESSION['category'][$id]['name']   = trim($_POST['category_name']);
    $_SESSION['category'][$id]['status'] = $_POST['status'];
 
    header("Location: category.php");
    exit;
}
 
/* ---------- DELETE CATEGORY ---------- */
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    if (isset($_SESSION['category'][$id])) {
        unset($_SESSION['category'][$id]);
        $_SESSION['category'] = array_values($_SESSION['category']);
    }
    header("Location: category.php");
    exit;
}
 
include('header.php');
?>
 
<!-- ================= VIEW CATEGORIES ================= -->
<?php if (!isset($_GET['mode'])) { ?>
 
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Category</b> - View Details</span>
                     <a href="category.php?mode=add_category" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus me-1"></i> Create
                     </a>
                  </div>
 
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                           <thead class="table-light">
                              <tr>
                                 <th>S.No.</th>
                                 <th>Category Name</th>
                                 <th>Status</th>
                                 <th class="text-center">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($_SESSION['category'] as $i => $category) { ?>
                              <tr>
                                 <td><?= $i + 1 ?></td>
                                 <td><?= htmlspecialchars($category['name']) ?></td>
                                 <td>
                                    <?php if ($category['status'] == 'Active') { ?>
                                       <span class="badge bg-success">Active</span>
                                    <?php } else { ?>
                                       <span class="badge bg-danger">In-Active</span>
                                    <?php } ?>
                                 </td>
                                 <td class="text-center">
                                    <a href="category.php?mode=update_category&id=<?= $i ?>" class="me-2">
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
 
<!-- ================= ADD CATEGORY ================= -->
<?php } else if ($_GET['mode'] == 'add_category') { ?>
 
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Category</b> - Add New Details</span>
                     <a href="category.php">
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
                                 Category Name <span class="text-danger">*</span>
                              </label>
                              <input type="text"
                                     name="category_name"
                                     class="form-control text-center"
                                     autocomplete="off">
                           </div>
                        </div>
 
                        <div class="d-flex justify-content-end mt-3">
                           <button type="submit"
                                   name="create_category"
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
 
<!-- ================= UPDATE CATEGORY ================= -->
<?php } else if ($_GET['mode'] == 'update_category') {
      $id = $_GET['id']; ?>
 
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Category</b> - Update Details</span>
                     <a href="category.php" class="btn btn-outline-primary btn-sm">
                        <i class="bx bxs-left-arrow-circle me-1"></i> Back
                     </a>
                  </div>
 
                  <div class="card-body">
                     <form method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
 
                        <div class="row text-center justify-content-center">
                           <div class="col-md-4">
                              <label class="form-label">
                                 Category Name <span class="text-danger">*</span>
                              </label>
                              <input type="text"
                                     name="category_name"
                                     value="<?= $_SESSION['category'][$id]['name'] ?>"
                                     class="form-control text-center"
                                     autocomplete="off">
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
                                        <?= $_SESSION['category'][$id]['status'] == 'Active' ? 'checked' : '' ?>>
                                 <span class="form-check-label">Active</span>
                              </div>
 
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input"
                                        type="radio"
                                        name="status"
                                        value="In-Active"
                                        <?= $_SESSION['category'][$id]['status'] == 'In-Active' ? 'checked' : '' ?>>
                                 <span class="form-check-label">Inactive</span>
                              </div>
                           </div>
                        </div>
 
                        <div class="d-flex justify-content-end mt-3">
                           <button type="submit"
                                   name="update_category"
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
 
 