<?php include('configure.php');

session_start();
if (!isset($_SESSION['state'])) {
    $_SESSION['state'] = [
        ['name' => 'Kerala','default'=>'No', 'status' => 'Active'],
        ['name' => 'Karnataka','default'=>'Yes', 'status' => 'Active'],
        ['name' => 'Maharashtra', 'default'=>'No','status' => 'Active'],
        ['name' => 'Tamilnadu','default'=>'No', 'status' => 'In-Active'],
         ['name' => 'Delhi','default'=>'No', 'status' => 'In-Active'], 
         ['name' => 'Andhra Pradesh','default'=>'No', 'status' => 'Active'],
         ['name' => 'Himachal Pradesh','default'=>'No', 'status' => 'In-Active'],
         ['name' => 'Uttar Pradesh','default'=>'No', 'status' => 'In-Active'],
         ['name' => 'Chattisghad','default'=>'No', 'status' => 'Active'],
         ['name' => 'Madhya Pradesh','default'=>'No', 'status' => 'Active'],
         ['name' => 'Rajasthan','default'=>'No', 'status' => 'Active'],  
         ['name' => 'Bihar','default'=>'No', 'status' => 'Active'],
          ['name' => 'Arunachal Pradesh','default'=>'No', 'status' => 'Active'],
           ['name' => 'Telangana','default'=>'No', 'status' => 'Active'],
    ];
}

if (isset($_POST['create_state'])) {
    $_SESSION['state'][] = [
        'name' => trim($_POST['state_name']),
        'default' => 'No',
        'status' => 'Active'
    ];
    header("Location: state.php");
    exit;
}


/* ---------- UPDATE STATE ---------- */
if (isset($_POST['update_state'])) {
    $id = $_POST['id'];
    $_SESSION['state'][$id]['name']   = trim($_POST['state_name']);
      $_SESSION['state'][$id]['default'] = $_POST['default'];
    $_SESSION['state'][$id]['status'] = $_POST['status'];
 
    header("Location: state.php");
    exit;
}




 include('header.php');
 ?>

<!-- If page is null this content has to be displayed -->
 <?php if(!isset($_GET['mode']) || $_GET['mode']==''){ ?> 

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
                     <span class="card-title mb-0"><b>State </b>- View Details</span>
                     <a href="state.php?mode=add_state">
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
                                    <th  >State Name</th>
                                    <th >Default</th>
                                    <th >Status</th>
                                    <th  >Action</th>
                                 </tr>
                              </thead>
                              <tbody  id="tableBody">
                              <?php foreach ($_SESSION['state'] as $i => $state) { ?>
                                 <tr>
                                    <td><?= $i + 1 ?></td>
                                              
                                    <td><?= htmlspecialchars($state['name']) ?></td>
                                    <td>
                                    <?= isset($state['default']) ? $state['default'] : 'No' ?>
                                     </td>
                                    <!-- <td><span class="badge bg-danger">In-Active</span></td> -->
                                    <!-- <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td> -->
                                     <td>
                                    <?php if ($state['status'] == 'Active') { ?>
                                       <span class="badge bg-success">Active</span>
                                    <?php } else { ?>
                                       <span class="badge bg-danger">In-Active</span>
                                    <?php } ?>
                                 </td>
                                 <td class="text-center">
                                    <a href="state.php?mode=update_state&id=<?= $i ?>" class="me-2">
                                       <i class="fa fa-edit text-primary"></i>
                                    </a>
                                 </td>
                                 </tr>
                                 <?php } ?>
                                 <!-- <tr>
                                    <td>2</td>
                                    <td>Karnataka</td>
                                    <td class="text-primary">Yes</td>
                                    <td ><span class="badge bg-success ">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary "></i></a></td>
                                 </tr> -->
                                 <!-- <tr>
                                    <td>3</td>
                                    <td>Maharashtra</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr> -->
                                 <!-- <tr>
                                    <td>4</td>
                                    <td>Tamilnadu</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr> -->
                                 <!-- <tr>
                                    <td>5</td>
                                    <td>Delhi</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr> -->
                                 <!-- <tr>
                                    <td>6</td>
                                    <td>Andhra Pradesh</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr> -->
                                 <!-- <tr>
                                    <td>7</td>
                                    <td>Himachal Pradesh</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr> -->
                                 <!-- <tr>
                                    <td>8</td>
                                    <td>Uttar Pradesh</td>
                                    <td>No</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr> -->
                                 <!-- <tr>
                                    <td>9</td>
                                    <td>Chattisghad</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>10</td>
                                    <td>Madhya Pradesh</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr> -->
                                 <!-- <tr>
                                    <td>11</td>
                                    <td>Rajasthan</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>12</td>
                                    <td>Bihar</td>
                                    <td>No</td>
                                    <td><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>13</td>
                                    <td>Arunachal Pradesh</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr> -->
                                 <!-- <tr>
                                    <td>14</td>
                                    <td>Telangana</td>
                                    <td>No</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr> -->
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
<?php } elseif(isset($_GET['mode']) && $_GET['mode'] == 'add_state'){ ?>

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
                  <div class="card-header d-flex justify-content-between align-items-center ">
                        <span class="card-title mb-0"><b>State </b>- Add New</span>
                   
                     <a href="state.php">
                     <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                  
                  <div class="card-body">
                      <form method="post">
                     <div class="row d-flex justify-content-center">
                        <div class="col-md-4  text-center">
                              <label class="form-label ">
                                 State Name <span class="text-danger">*</span>
                              </label>
                              <input type="text"
                                     name="state_name"
                                     class="form-control text-center"
                                      autocomplete="off">
                           </div>
                        <div class="d-flex justify-content-end mt-3">
                           <button class="btn btn-primary waves-effect waves-light" type="submit" name="create_state" >Save</button> 
                        </div>
                       </form>
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
<?php } else if(isset($_GET['mode']) && $_GET['mode'] == 'update_state'){ 
      $id = $_GET['id'] ?? null;

if (!isset($_SESSION['state'][$id])) {
    header("Location: state.php");
    exit;
}
?>
<!-- MAIN CONTENT START -->
<div class="main-content">
   <!-- PAGE CONTENT START -->
   <div class="page-content">
      <!-- CONTAINER-FLUID START -->
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center ">
                     <span class="card-title mb-0"><b>State </b>- Update Details</span>
                     <a href="state.php">
                     <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                  <!-- end card header -->
                  <div class="card-body">
                        <form method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                     <div class="row">
                         <div class="col-md-4 text-center">
                              <label class="form-label">
                                 State Name <span class="mandatory-color text-danger">*</span>
                              </label>
                              <input type="text"
                                     name="state_name"
                                       value="<?= $_SESSION['state'][$id]['name'] ?>"
                                     class="form-control text-center"
                                      autocomplete="off">
                           </div>
                        <div class="col-md-4 text-center">
                            <label class="form-label d-block">Default<span class="mandatory-color text-danger">*</span></label>
                              <div class="form-check form-check-inline">
                                 <!-- <input class="form-check-input" type="radio" name="formRadios1" id="formRadios1" > -->
                                  <input class="form-check-input"
                                             type="radio"
                                           name="default"
                                             value="Yes"
                                        <?= $_SESSION['state'][$id]['default'] == 'Yes' ? 'checked' : '' ?>>
                                    <span class="form-check-label" for="formRadios1">Yes</span>
                              </div>
                              <div class="form-check form-check-inline">
                                  <!-- <input class="form-check-input" type="radio" name="formRadios1" id="formRadios2" > -->
                                   <input class="form-check-input"
                                           type="radio"
                                            name="default"
                                            value="No"
                                        <?= $_SESSION['state'][$id]['default'] == 'No' ? 'checked' : '' ?>>
                                    <span class="form-check-label" for="formRadios2">No</span>
                              </div>
                        </div>

                        
                        <div class="col-md-4 text-center">
                            <label class="form-label d-block">Status<span class="mandatory-color text-danger">*</span></label>
                              <div class="form-check form-check-inline">
                                 <!-- <input class="form-check-input" type="radio" name="formRadios" id="formRadios3"   > -->
                                  <input class="form-check-input"
                                        type="radio"
                                             name="status"
                                              value="Active"
                                           <?= $_SESSION['state'][$id]['status'] == 'Active' ? 'checked' : '' ?>>
                                    <span class="form-check-label" for="formRadios3">Active</span>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input"
                                         type="radio"
                                          name="status"
                                          value="In-Active"
                                 <?= $_SESSION['state'][$id]['status'] == 'In-Active' ? 'checked' : '' ?>>
                                    <span class="form-check-label" for="formRadios4">Inactive</span>
                              </div>
                        </div>
                     </div>
                     <br>
                     <div class="d-flex justify-content-end">
                        <!-- <button class="btn btn-primary waves-effect waves-light">Update</button> -->
                         <button type="submit" name="update_state"
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
