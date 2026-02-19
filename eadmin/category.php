<<<<<<< HEAD
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
                     <span class="card-title mb-0"><b>Category</b>- View Details</span>
                     <a href="category.php?mode=add_category">
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
                                    <th> Category</th>
                                    <th >Status</th>
                                    <th  >Action</th>
                                 </tr>
                              </thead>
                              <tbody  id="tableBody">
                                 <tr>
                                    <td>1</td>
                                    <td>Rice</td>
                                    <td><span class=" badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="category.php?mode=update_category"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Vegetables</td>
                                    <td ><span class="  badge bg-success ">Active</span></td>
                                    <td class="text-center"><a href="category.php?mode=update_category"><i class="fa fa-edit text-primary "></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Flour</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="category.php?mode=update_category"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 
                                 
                              </tbody>
                           </table>
                        </div>
                     <!-- PAGE FOOTER-->
                     <!-- <div class="d-flex justify-content-between align-items-center mt-2">
                        <small id="tableInfo"></small>
                        <nav>
                           <ul class="pagination pagination-sm mb-0" id="pagination"></ul>
                        </nav>
                     </div> -->
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
<?php } else if($_GET['mode'] == 'add_category'){ ?>

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
                  <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="card-title mb-0"><b>Category </b>- Add New </span>
                   
                     <a href="category.php">
                     <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                  
                  <div class="card-body">
                     <div class="row justify-content-center">
                       
                        <div class="col-md-4 text-center">
                              <label class="form-label fw-bold">Category
                                  <span class="text-danger">*</span>
                              </label>
                              <input type="text"
                                    
                                     class="form-control text-center"
                                     required>
                           </div>
                        <div class="d-flex justify-content-end mt-3">
                           <button class="btn btn-primary waves-effect waves-light ">Save</button>
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


<!-- else if mode - update_paymode -->
<?php } else if($_GET['mode'] == 'update_category'){ ?>
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
                     <span class="card-title mb-0"><b>Category</b>- Update Details</span>
                     <a href="category.php">
                     <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                 <!-- end card header -->
                 

         <div class="card-body">
    <div class="row justify-content-center text-center">
        <div class="col-md-4">
            <div class="form-group">
                <label >
                    Category <span class="text-danger">*</span>
                </label>
                <input class="form-control text-center"
                       type="text"
                       value="Rice" require="">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
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
    </div>

    <div class="d-flex justify-content-end mt-3">
        <button class="btn btn-primary waves-effect waves-light" type="submit">
            Update
        </button>
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
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
