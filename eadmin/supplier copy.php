<?php

include('configure.php');
session_start();

/* ================= RESET SESSION (ONLY FOR DEMO) ================= */
/* Remove this block later when using database */

if (!isset($_SESSION['supplier'])) {

    $_SESSION['supplier'] = [

        [
            'name'    => 'Ravish Foods',
            'contact' => '9845708123',
            'address' => 'Near water tank, 26th cross',
            'state'   => 'Karnataka',
            'gst'     => 'GST9988',
            'status'  => 'Active'
        ],

        [
            'name'    => 'SSB High School',
            'contact' => '9945707006',
            'address' => 'Jaya Nagar, 5th Block',
            'state'   => 'Karnataka',
            'gst'     => 'GST416',
            'status'  => 'Active'
        ]

    ];
}


/* ================= CREATE ================= */

if (isset($_POST['create_customer'])) {

    $name    = trim($_POST['name']);
    $contact = trim($_POST['contact']);
    $address = trim($_POST['address']);
    $state   = trim($_POST['state']);
    $gst     = trim($_POST['gst']);

    if ($name != "" && $contact != "" && $state != "") {

        $_SESSION['customers'][] = [

            'name'    => $name,
            'contact' => $contact,
            'address' => $address,
            'state'   => $state,
            'gst'     => strtoupper($gst),
            'status'  => 'Active'
        ];
    }

    header("Location: customers.php");
    exit;
}


/* ================= UPDATE ================= */

if (isset($_POST['update_customer'])) {

    $id = $_POST['id'];

    if (isset($_SESSION['customers'][$id])) {

        $_SESSION['customers'][$id] = [

            'name'    => trim($_POST['name']),
            'contact' => trim($_POST['contact']),
            'address' => trim($_POST['address']),
            'state'   => trim($_POST['state']),
            'gst'     => strtoupper(trim($_POST['gst'])),
            'status'  => $_POST['status']
        ];
    }

    header("Location: customers.php");
    exit;
}

include('header.php');

?>



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
                     <span class="card-title mb-0"><b>Suppliers</b>- View details</span>
                     <a href="supplier.php?mode=add_details">
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
                                    <th>Supplier Id</th>
                                    <th>Supplier Name</th>
                                    <th>City</th>
                                    <th>GST Number</th>
                                    <th>Mobile No</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody  id="tableBody">
                                 <tr>
                                    <td>1</td>
                                    <td>S001</td>
                                    <td>SMR Enterprises</td>
                                    <td>Bangalore</td>
                                    <td>29AAACH7409R1ZZ</td>
                                    <td>8876578456</td>
                                    <td><span class="badge bg-danger">In-Active</span></td>
                                    <td class="text-center"><a href="supplier.php?mode=update_details"><i class="fa fa-edit text-primary"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>S002</td>
                                    <td>Renuka Fresh Form</td>
                                    <td>Davanagere</td>
                                    <td>29AABCT5589K2ZN</td>
                                    <td>7859546216</td>
                                    
                                    <td ><span class="badge bg-success ">Active</span></td>
                                    <td class="text-center"><a href="supplier.php?mode=update_details"><i class="fa fa-edit text-primary "></i></a></td>
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
<?php } else if($_GET['mode'] == 'add_details'){ ?>

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
                        <span class="card-title mb-0"><b>Suppliers</b>- Add New</span>
                   
                     <a href="supplier.php">
                     <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                  
                  <div class="card-body">
                     <div class="row d-flex justify-content-center mb-4">
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Supplier Name<span class="text-danger">*</span></label>
                              <input type="text" name="unit_name" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">GST No<span class="text-danger">*</span></label>
                              <input type="text" name="unit_name" class="form-control text-center"required>
                        </div>
                        <div class="col-md-6  text-center">
                              <label class="form-label ">Address<span class="text-danger">*</span></label>
                              <textarea class="form-control" type="text" name="address" id="address" autocomplete="off" style="height: 25px;"></textarea>
                        </div>
                     </div>

                     <div class="row d-flex justify-content-center mb-4">
                        <div class="col-md-3  text-center">
                              <label class="form-label ">City<span class="text-danger">*</span></label>
                              <input type="text" name="unit_name" value="Bangalore" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3  text-center">
                              
                              <label class="form-label text-center ">State<span class="mandatory-color text-danger">*</span></label>
                                            <select class="form-control text-center">
                                                <option value="Choice 1">Karnataka</option>
                                                <option value="Choice 2">Maharashtra</option>
                                                <option value="Choice 3">Tamilnadu</option>
                                                <option value="Choice 4">Delhi</option>
                                             </select>
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Pincode<span class="text-danger">*</span></label>
                             <input type="text" name="" value="" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Contact Person</label>
                             <input type="text" name="" value="" class="form-control text-center"required>
                        </div>
                     </div>

                     <div class="row d-flex justify-content-center mb-4">
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Mobile No<span class="text-danger">*</span></label>
                              <input type="tel" name="" value="" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3  text-center">
                              
                              <label class="form-label text-center ">Email</label>
                               <input type="email" name="" value="" class="form-control text-center"required>            
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">PAN Card</label>
                             <input type="text" maxlength="10" name="" value="" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Opening Balance<span class="text-danger">*</span></label>
                             <input type="number" name="" value="" class="form-control text-center"required>
                        </div>
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




<!-- else if mode - update_state -->
<?php } else if($_GET['mode'] == 'update_details'){ ?>
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
                     <span class="card-title mb-0"><b>Supplier </b>- Update Details</span>
                     <a href="supplier.php">
                     <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                     </a>
                  </div>
                  <!-- end card header -->
                   <div class="card-body">
                     <div class="row d-flex justify-content-center mb-4">
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Supplier Id<span class="text-danger">*</span></label>
                              <input type="text" name="" value="S001" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Supplier Name<span class="text-danger">*</span></label>
                              <input type="text" name="" value="SMR Enterprises" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">GST No<span class="text-danger">*</span></label>
                              <input type="text" name="" value="29AAACH7409R1ZZ" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Mobile No<span class="text-danger">*</span></label>
                              <input type="tel" name="" value="8876578456" class="form-control text-center"required>
                        </div>
                       
                     </div>

                     <div class="row d-flex justify-content-center mb-4">
                         <div class="col-md-6  text-center">
                              <label class="form-label ">Address<span class="text-danger">*</span></label>
                              <textarea class="form-control" type="text"  name="address" id="address" autocomplete="off" style="height: 25px;">Govt PU College, 26th Cross, Magadi Main Road</textarea>
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">City<span class="text-danger">*</span></label>
                              <input type="text" name="unit_name" value="Bangalore" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3  text-center">
                              
                              <label class="form-label text-center ">State<span class="mandatory-color text-danger">*</span></label>
                                            <select class="form-control text-center">
                                                <option value="Choice 1">Karnataka</option>
                                                <option value="Choice 2">Maharashtra</option>
                                                <option value="Choice 3">Tamilnadu</option>
                                                <option value="Choice 4">Delhi</option>
                                             </select>
                        </div>
                     </div>
                     <div class="row d-flex justify-content-center mb-4">
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Pincode<span class="text-danger">*</span></label>
                             <input type="text" name="" value="560078" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Contact Person</label>
                             <input type="text" name="" value="Rajesh M B" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3  text-center">
                           <label class="form-label text-center ">Email</label>
                           <input type="email" name="" value="rajesh@gmail.com" class="form-control text-center"required>            
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">PAN Card</label>
                             <input type="text" maxlength="10" name="" value="AAACH7409R1" class="form-control text-center"required>
                        </div>
                     </div>

                     <div class="row d-flex  mb-4">
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Opening Balance<span class="text-danger">*</span></label>
                             <input type="number" name="" value="0" class="form-control text-center"required>
                        </div>
                        <div class="col-md-3 text-center">
                           <label class="form-label d-block">Status<span class="mandatory-color text-danger">*</span></label>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" 
                                           name="status"checked="">
                                    <span class="form-check-label">Active</span>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="status">
                                    <span class="form-check-label">Inactive</span>
                              </div>
                        </div>
                        
                     </div>
                     
                        <div class="d-flex justify-content-end mt-3">
                          
                           <button class="btn btn-primary waves-effect waves-light ">Update</button>
                        </div>
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