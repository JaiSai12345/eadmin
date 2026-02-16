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
                  <div class="card-header d-flex justify-content-between align-items-center mb-3">
                     <span class="card-title mb-0"><b>State </b>- View details</span>
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
                                 <tr>
                                    <td>1</td>
                                    <td>Kerala</td>
                                    <td>No</td>
                                    <td><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Karnataka</td>
                                    <td class="text-primary">Yes</td>
                                    <td ><span class="badge bg-success ">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary "></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Maharashtra</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>Tamilnadu</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>Delhi</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td>Andhra Pradesh</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>7</td>
                                    <td>Himachal Pradesh</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>8</td>
                                    <td>Uttar Pradesh</td>
                                    <td>No</td>
                                    <td class="text-center"><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
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
                                 </tr>
                                 <tr>
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
                                 </tr>
                                 <tr>
                                    <td>14</td>
                                    <td>Telangana</td>
                                    <td>No</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="state.php?mode=update_state"><i class="fa fa-edit text-primary"></i></a></td>
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
<?php } else if($_GET['mode'] == 'add_state'){ ?>

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
                  <div class="card-header d-flex justify-content-between align-items-center mb-3">
                        <span class="card-title mb-0"><b>State </b>- Add New State</span>
                   
                     <a href="state.php">
                     <button class="btn btn-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                  
                  <div class="card-body">
                     <div class="row">
                        <div class="col text-center">
                           <label><b>State Name</b><span class="mandatory-color text-danger">*</span></label><br>
                           <input type="text"   style="padding:9px;width:300px;border:1px solid #c9cfd8;">
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                           <button class="btn btn-primary btn-sm waves-effect waves-light ">Add</button>
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
<?php } else if($_GET['mode'] == 'update_state'){ ?>
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
                     <span class="card-title mb-0"><b>State </b>- Update State</span>
                     <a href="state.php">
                     <button class="btn btn-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                  <!-- end card header -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col text-center">
                           <label >State Name<span class="mandatory-color text-danger">*</span></label><br>
                           <input type="text">
                        </div>
                        <div class="col text-center">
                           <label >Default<span class="mandatory-color text-danger">*</span></label><br>
                           <input type="radio" name="yes" value="yes"> Yes&emsp;
                           <input type="radio"name="yes" value="no"> No
                        </div>
                        <div class="col text-center">
                           <label >Status<span class="mandatory-color text-danger">*</span></label><br>
                           <input type="radio" name="status" value="active"> Active&emsp;
                           <input type="radio"name="status" value="inactive"> Inactive
                        </div>
                     </div>
                     <br>
                     <div class="d-flex justify-content-end">
                        <button class="btn btn-primary btn-sm waves-effect waves-light">Update</button>
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