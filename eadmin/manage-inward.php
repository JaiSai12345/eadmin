<?php include('configure.php');?>
<?php include('header.php');?>

<!-- If page is null this content has to be displayed -->
<?php if($_GET['mode']==''){ ?>
<!-- MAIN CONTENT START -->
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">

         <!-- SEARCH CARD -->
         <div class="row">
            <div class="col-lg-12">
               <div class="card">

                  <div class="card-header">
                     <div class="card-header d-flex justify-content-between align-items-center ">
                     <span class="card-title mb-0"><b>Manage Inward</b>- Search Details By</span>
                     
                  </div>
                    

                  <div class="card-body">
                     <!-- FORM CONNECTED TO VIEW PAGE -->
                     

                        <div class="row justify-content-center align-items-end">

                                <!-- From Date -->
                                <div class="col-md-3 text-center">
                                    <!-- <label class="form-label">From Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fromDate" placeholder="dd/mm/yyyy" required> -->
                                    <label class="form-label text-center">From Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="text" class="form-control text-center" id="datepicker-basic" readonly="readonly" placeholder="dd/mm/yyyy" required>
                                </div>

                                <!-- To Date -->
                                <div class="col-md-3 text-center ">
                                    <label class="form-label text-center">To Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="text" class="form-control text-center" id="datepicker-basic" readonly="readonly"  placeholder="dd/mm/yyyy" required>
                                </div>


                           <!-- SUPPLIER -->
                           <div class="col-md-3 ">
                              
                                        <label for="choices-single-default" class="form-label text-center ">Supplier Name<span class="mandatory-color text-danger">*</span></label>
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" placeholder="This">
                                                <option value="Choice 1">All</option>
                                                <option value="Choice 2">SMR Enterprises</option>
                                                <option value="Choice 3">Renuka Fresh Form</option>
                                            </select>
                                    
                           </div>
                        </div><br>
                           <!-- VIEW BUTTON -->
                           <div class="d-flex justify-content-end">
                              <a href="manage-inward.php?mode=view_list">
                                 <button  name="view_inward" class="btn btn-primary waves-effect waves-light">View</button>
                              </a>
                           </div>

                       

                  
                  </div>

               </div>
            </div>
         </div>

      </div>
   </div>
</div>
<!-- MAIN CONTENT END -->






<!--if mode = view_list then this code will be displayed-->
<?php } else if($_GET['mode'] == 'view_list'){ ?>


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
                     <span class="card-title mb-0"><b>Manage Inward </b>- Invoices List</span>
                     <a href="manage-inward.php">
                     <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
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
                                    <th>Inv Date</th>
                                    <th>Inv No</th>
                                    <th>Sup Id</th>
                                    <th>Supplier Name</th>
                                    <th>Qnty</th>
                                    <th>Taxable</th>
                                    <th>GST Amt</th>
                                    <th>Inv Amt</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody  id="tableBody">
                                 <tr>
                                    <td>1</td>
                                    <td>24/07/2023</td>
                                    <td>111</td>
                                    <td>S001</td>
                                    <td>SMR Enterprises</td>
                                    <td>1</td>
                                    <td>40</td>
                                    <td>0</td>
                                    <td>40</td>
                                    <td class="text-center"><a href="manage-inward.php?mode=view_details"><i class="fa fa-eye text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>22/02/2023</td>
                                    <td>INV445566</td>
                                    <td>S001</td>
                                    <td>SMR Enterprises</td>
                                    <td>20</td>
                                    <td>4200</td>
                                    <td>210</td>
                                    <td>410</td>
                                    <td class="text-center"><a href="manage-inward.php?mode=view_details"><i class="fa fa-eye text-primary "></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>09/02/2023</td>
                                    <td>INV445566</td>
                                    <td>S002</td>
                                    <td>Renuka Fresh Form</td>
                                    <td>60</td>
                                    <td>10,700</td>
                                    <td>500</td>
                                    <td>11,200</td>
                                    <td class="text-center"><a href="manage-inward.php?mode=view_details"><i class="fa fa-eye text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>07/02/2023</td>
                                    <td>INV444</td>
                                    <td>S002</td>
                                    <td>Renuka Fresh Form</td>
                                    <td>2</td>
                                    <td>280</td>
                                    <td>12.50</td>
                                    <td>293</td>
                                    <td class="text-center"><a href="manage-inward.php?mode=view_details"><i class="fa fa-eye text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>05/02/2023</td>
                                    <td>9364/2023</td>
                                    <td>S001</td>
                                    <td>SMR Enterprises</td>
                                    <td>80</td>
                                    <td>14,150</td>
                                    <td>707.50</td>
                                    <td>14,858</td>
                                    <td class="text-center"><a href="manage-inward.php?mode=view_details"><i class="fa fa-eye text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td>04/02/2023</td>
                                    <td>INV347</td>
                                    <td>S002</td>
                                    <td>Renuka Fresh Form</td>
                                    <td>28</td>
                                    <td>990</td>
                                    <td>0</td>
                                    <td>3,938</td>
                                    <td class="text-center"><a href="manage-inward.php?mode=view_details"><i class="fa fa-eye text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>7</td>
                                    <td>04/02/2023	</td>
                                    <td>647/2023</td>
                                    <td>S001</td>
                                    <td>SMR Enterprises</td>
                                    <td>15</td>
                                    <td>3,750</td>
                                    <td>187.50</td>
                                    <td>3,938</td>
                                    <td class="text-center"><a href="manage-inward.php?mode=view_details"><i class="fa fa-eye text-primary"></i></a></td>
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


<!-- else if mode= view_details then this will be displayed -->
<?php } else if($_GET['mode'] == 'view_details'){ ?>
<!-- MAIN CONTENT START -->
<div class="main-content">
   
    <div class="page-content">
        <div class="container-fluid">
 
            <!-- Inward Details Card -->
            <div class="card mb-3">
               <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Manage Inward </b>- View Inward Details</span>
                     <a href="manage-inward.php">
                     <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                <div class="card-body">
 
                    <!-- <h6 class="text-muted mb-3">View Inward Details</h6> -->
 
                    <table class="table table-bordered table-sm">
                        <tbody>
                            <tr>
                                <th>Supplier Id</th>
                                <td>S001</td>
                                <th>Supplier Name</th>
                                <td>SMR Enterprises</td>
                                <th>Invoice Date</th>
                                <td>24/07/2023</td>
                                <th>Invoice No</th>
                                <td>111</td>
                            </tr>
 
                            <tr>
                                <th>Total Qnty</th>
                                <td>1</td>
                                <th>Total Taxable</th>
                                <td>40</td>
                                <th>Total GST</th>
                                <td>0</td>
                                <th>Invoice Amt</th>
                                <td>40</td>
                            </tr>
 
                            <tr>
                                <th>PO Date</th>
                                <td colspan="3">-</td>
                                <th>PO No</th>
                                <td colspan="3">11111</td>
                            </tr>
 
                            <tr>
                                <th>Remarks</th>
                                <td colspan="7">
                                    1. Once items sold, they can not be taken back.<br>
                                    2. No warranty or guarantee of any sold items.
                                </td>
                            </tr>
                        </tbody>
                    </table>
 
                </div>
            </div>
 
            <!-- Item Details Card -->
            <div class="card">
               <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Item Details </b></span>
                     
               </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm text-center">
                            <!-- <thead class="table-light"> -->
                               <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Category</th>
                                    <th>Item Name</th>
                                    <th>HSN No.</th>
                                    <th>Rate</th>
                                    <th>SRate</th>
                                    <th>Unit</th>
                                    <th>GST %</th>
                                    <th>Qnty</th>
                                    <th>Taxable</th>
                                    <th>GST Amt</th>
                                    <th>Total Amt</th>
                                    <th>Icode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Vegetables</td>
                                    <td>Brinjal</td>
                                    <td>0</td>
                                    <td>40</td>
                                    <td>65</td>
                                    <td>Kgs</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>40</td>
                                    <td>0</td>
                                    <td>40</td>
                                    <td>I004</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
 
                </div>
            </div>
 
        </div>
           <?php } ?>
    </div>

     <!-- PAGE CONTENT END -->
   <?php include('footer.php');?>
</div>
<!-- MAIN CONTENT END -->
</div>
<!-- LAYOUT WRAPPER END -->
<?php include('links.php'); ?> 
<script>
    //  $('#supplier').select2({
    //     placeholder: "Select Supplier",
       
    // });

                flatpickr("#datepicker-basic", {
                    dateFormat: "d/m/Y"
                });

                flatpickr("#datepicker-basic", {
                    dateFormat: "d/m/Y"
                });
</script>

<script src="assets/js/custom.js"></script> 
</body>
</html>