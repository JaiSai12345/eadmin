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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="card-title mb-0"><b>Manage Invoice</b></span>
                                <a href="dashboard.php">
                                    <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                                </a>
                        </div>
                       <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    <!-- <label class="form-label">From Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fromDate" placeholder="dd/mm/yyyy" required> -->
                                    <label class="form-label">From Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="text" class="form-control" id="datepicker-basic" readonly="readonly" placeholder="dd/mm/yyyy" required>
                                </div>

                                <!-- To Date -->
                                <div class="col-md-3 ">
                                    <label class="form-label">To Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="text" class="form-control" id="datepicker-basic" readonly="readonly"  placeholder="dd/mm/yyyy" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Customer Name <span class="text-danger">*</span></label>
                                    <select class="form-select">
                                        <option>SSB High School</option>
                                        <option>SPSMRS Boys Hostel</option>
                                        <option>Ravish Foods</option>
                                    </select>
                                </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <a href="manage-invoice.php?mode=view-invoice.php">
                                        <button class="btn btn-primary w-100">View</button>
                                    </a>
                                </div>
                            
                        </div>
                    </div>

                        <!-- Output -->
                        <div id="output" class="mt-4"></div>

                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER-FLUID START -->
    </div>
     <!-- PAGE CONTENT END -->
    <?php include('footer.php');?>
</div>
<!-- MAIN CONTENT END -->



<?php } else if($_GET['mode'] == 'view-invoice.php'){ ?>

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
                            <span class="card-title mb-0"><b>Manage Invoice-Details</b></span>
                                <a href="manage-invoice.php">
                                    <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                                </a>
                        </div>
                  <!-- CARD HEADER END -->

                   <!-- CARD BODY START -->
                  <div class="card-body">
                     <div id="table-search-count"></div>
                     <!--selector and searchbar is located in custom.js-->
                       <div class="table-responsive">
                        <table class="table table-bordered align-middle text-center">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Bill Date</th>
                                    <th>Bill No</th>
                                    <th>Cust Id</th>
                                    <th>Customer Name</th>
                                    <th>Qnty</th>
                                    <th>Taxable</th>
                                    <th>GST Amt</th>
                                    <th>Inv Amt</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>24/07/2023</td>
                                    <td>INV005</td>
                                    <td>C001</td>
                                    <td>SPSMRS Boys Hostel</td>
                                    <td>1</td>
                                    <td>340</td>
                                    <td>17</td>
                                    <td>357</td>
                                    <td class="action-icons">
                                        <a href="manage-invoice.php?mode=view-details"><i class="fa fa-eye text-primary"></i></a>
                                        <!-- <i class="fa fa-edit text-primary"></i> -->
                                        <!-- <i class="fa fa-printer text-primary"></i> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>20/11/2023</td>
                                    <td>INV203</td>
                                    <td>C001</td>
                                    <td>Ravish Foods</td>
                                    <td>1</td>
                                    <td>390</td>
                                    <td>20</td>
                                    <td>410</td>
                                    <td class="action-icons">
                                        <a href="manage-invoice.php?mode=view-details"><i class="fa fa-eye text-primary"></i></a>
                                        <!-- <i class="fa fa-edit text-primary"></i> -->
                                        <!-- <i class="fa fa-printer text-primary"></i> -->
                                    </td>
                                </tr><tr>
                                    <td>3</td>
                                    <td>23/12/2023</td>
                                    <td>INV204</td>
                                    <td>C001</td>
                                    <td>SPSMRS Boys Hostel</td>
                                    <td>1</td>
                                    <td>420</td>
                                    <td>17</td>
                                    <td>437</td>
                                    <td class="action-icons">
                                        <a href="manage-invoice.php?mode=view-details"><i class="fa fa-eye text-primary"></i></a>
                                        <!-- <i class="fa fa-edit text-primary"></i> -->
                                        <!-- <i class="fa fa-printer text-primary"></i> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>14/02/2024</td>
                                    <td>INV024</td>
                                    <td>C001</td>
                                    <td>SSB High School</td>
                                    <td>1</td>
                                    <td>440</td>
                                    <td>17</td>
                                    <td>457</td>
                                    <td class="action-icons">
                                        <a href="manage-invoice.php?mode=view-details"><i class="fa fa-eye text-primary"></i></a>
                                        <!-- <i class="fa fa-edit text-primary"></i> -->
                                        <!-- <i class="fa fa-printer text-primary"></i> -->
                                    </td>
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

<?php } else if($_GET['mode'] == 'view-details'){ ?>
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
                     <span class="card-title mb-0"><b>Manage Invoice </b>- View  Invoice details</span>
                     <!-- <a href="state.php?mode=add_state">
                     <button class="btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-plus me-1"></i> Create</button>
                     </a> -->
                  </div>
                  <!-- CARD HEADER END -->
                    <div class="card-body">

                        <table class="table  table-bordered  text-start mb-5">
                            <thead>
                                <tr>
                                    <th colspan="8" class="text-center fs-5">Invoice Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Customer Id</th>
                                    <td>C001</td>
                                    <th>Customer Name</th>
                                    <td>SPSMRS Boys Hostel</td>
                                    <th>Bill Date</th>
                                    <td>24/07/2023</td>
                                    <th>Bill No</th>
                                    <td>INV005</td>
                                </tr>
                                <tr>
                                    <th>Total Qnty</th>
                                    <td>1</td>
                                    <th>Total Taxable</th>
                                    <td>340</td>
                                    <th>Total GST</th>
                                    <td>17</td>
                                    <th>Invoice Amt</th>
                                    <td>357</td>
                                </tr>
                                <tr>
                                    <th>Delivery State</th>
                                    <td>Karnataka</td>
                                    <th>Delivery Address</th>
                                    <td colspan="5">
                                        Vivekananda Layout, 23rdCross, Davanagere - 597841
                                    </td>
                                </tr>
                                <tr>
                                    <th>Remarks</th>
                                    <td colspan="7">
                                        1. Once items sold, they can not be taken back.<br>
                                        2. No warrenty or guarentee of anysold items
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered text-start">
                            <thead>
                                
                                <tr>
                                    <th colspan="12" class="text-center fs-5">Item Details</th>
                                </tr>
                        
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <th>S.N</th>
                                    <th>Category</th>
                                    <th>Item Name</th>
                                    <th>HSN No.</th>
                                    <th>Rate</th>
                                    <th>Unit</th>
                                    <th>GST %</th>
                                    <th>Qnty</th>
                                    <th>Taxable</th>
                                    <th>GST Amt</th>
                                    <th>Total Amt</th>
                                    <th>Icode</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Rice</td>
                                    <td>Sona Masuri 25Kg Bag</td>
                                    <td>23521</td>
                                    <td>340</td>
                                    <td>Kgs</td>
                                    <td>5</td>
                                    <td>1</td>
                                    <td>340</td>
                                    <td>17</td>
                                    <td>357</td>
                                    <td>I001</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                  <!-- CARD BODY END -->
               </div>
               <!-- CARD END -->
            </div>
            
         </div>
         <!-- ROW END -->
         
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
<?php include('links.php'); ?> 
<script>
    

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