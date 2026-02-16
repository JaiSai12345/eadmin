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
                     <span class="card-title mb-0"><b> GST </b>- View Details</span>
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
                                    <th>GST %</th>
                                    <th>SGST %</th>
                                    <th>CGST %</th>
                                    <th>IGST %</th>
                                    <th >Default</th>
                                    <th >Status</th>
                                    <th  >Action</th>
                                 </tr>
                              </thead>
                              <tbody  id="tableBody">
                                 <tr>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0.0</td>
                                    <td>0.0</td>
                                    <td>0</td>
                                    <td>No</td>
                                    <td><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>5</td>
                                    <td>2.5</td>
                                    <td>2.5</td>
                                    <td>5</td>
                                    <td class="text-primary">Yes</td>
                                    <td ><span class="badge bg-success ">Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary "></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>12</td>
                                    <td>6.0</td>
                                    <td>6.0</td>
                                    <td>12</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>18</td>
                                    <td>9.0</td>
                                    <td>9.0</td>
                                    <td>18</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>28</td>
                                    <td>14.0</td>
                                    <td>14.0</td>
                                    <td>0</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td>36</td>
                                    <td>18.0</td>
                                    <td>18.0</td>
                                    <td>36</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>7</td>
                                    <td>42</td>
                                    <td>21.0</td>
                                    <td>21.0</td>
                                    <td>42</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>8</td>
                                    <td>52</td>
                                    <td>31.0</td>
                                    <td>31.0</td>
                                    <td>52</td>
                                    <td>No</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>9</td>
                                    <td>56</td>
                                    <td>36.0</td>
                                    <td>36.0</td>
                                    <td>36</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>10</td>
                                    <td>62</td>
                                    <td>31.0</td>
                                    <td>31.0</td>
                                    <td>62</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                  <tr>
                                    <td>11</td>
                                    <td>42</td>
                                    <td>21.0</td>
                                    <td>21.0</td>
                                    <td>42</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>12</td>
                                    <td>52</td>
                                    <td>31.0</td>
                                    <td>31.0</td>
                                    <td>52</td>
                                    <td>No</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>13</td>
                                    <td>56</td>
                                    <td>36.0</td>
                                    <td>36.0</td>
                                    <td>36</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>14</td>
                                    <td>62</td>
                                    <td>31.0</td>
                                    <td>31.0</td>
                                    <td>62</td>
                                    <td>No</td>
                                    <td ><span class="badge bg-success">Active</span></td>
                                    <td class="text-center"><a href="gst.php?mode=update_gst"><i class="fa fa-edit text-primary"></i></a></td>
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

<!-- else if mode - update_GST -->
<?php } else if($_GET['mode'] == 'update_gst'){ ?>
<!-- MAIN CONTENT START -->
<div class="main-content">
   <!-- PAGE CONTENT START -->
   <div class="page-content">
      <!-- CONTAINER-FLUID START -->
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>GST </b>- Update Details</span>
                     <a href="gst.php">
                     <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                  <!-- end card header -->
                   <div class="card-body">

            <div class="row mb-4 text-center">
                <div class="col-md-3">
                    <label class="form-label">GST<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="0">
                </div>

                <div class="col-md-3">
                    <label class="form-label">SGST<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="0.0">
                </div>

                <div class="col-md-3">
                    <label class="form-label">CGST<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="0.0">
                </div>

                <div class="col-md-3">
                    <label class="form-label">IGST<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="0">
                </div>
            </div>

            <div class="row mb-4 text-center">
                <div class="col-md-3 text-center">
                            <label class="form-label d-block">Default<span class="mandatory-color text-danger">*</span></label>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="formRadios1" id="formRadios1">
                                    <label class="form-check-label" for="formRadios1">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="formRadios1" id="formRadios2">
                                    <span class="form-check-label" for="formRadios2">No</span>
                              </div>
                        </div>

                        
                        <div class="col-md-3 text-center">
                            <label class="form-label d-block">Status<span class="mandatory-color text-danger">*</span></label>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="formRadios" id="formRadios3">
                                    <span class="form-check-label" for="formRadios3">Active</span>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="formRadios" id="formRadios4">
                                    <span class="form-check-label" for="formRadios4">Inactive</span>
                              </div>
                        </div>
            </div>
            <br>
            <div class="d-flex justify-content-end">
                        <button class="btn btn-primary waves-effect waves-light">Update</button>
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