<?php
include('configure.php');
session_start();
 
/* ---------- DEFAULT SUPPLIERS ---------- */
if (!isset($_SESSION['suppliers'])) {
    $_SESSION['suppliers'] = [
        [
            'id' => 'S001',
            'name' => 'SMR Enterprises',
            'city' => 'Bangalore',
            'gst' => '29AAACH7409R1ZZ',
            'mobile' => '8876578456',
            'status' => 'Inactive',
            'address' => 'Govt PU College, 26th Cross, Magadi Main Road',
            'state' => 'Karnataka',
            'pincode' => '560078',
            'contact_person' => 'Rajesh M B',
            'email' => 'rajesh@gmail.com',
            'pan' => 'AAACH7409R1',
            'opening_balance' => 0
        ],
        [
            'id' => 'S002',
            'name' => 'Renuka Fresh Form',
            'city' => 'Davanagere',
            'gst' => '29AABCT5589K2ZN',
            'mobile' => '7859546216',
            'status' => 'Active',
            'address' => '',
            'state' => 'Karnataka',
            'pincode' => '',
            'contact_person' => '',
            'email' => '',
            'pan' => '',
            'opening_balance' => 0
        ]
    ];
}
 
$error = "";
 
/* ---------- CREATE SUPPLIER ---------- */
if (isset($_POST['create_supplier'])) {
 
    $name   = trim($_POST['name']);
    $gst    = trim($_POST['gst']);
    $city   = trim($_POST['city']);
    $mobile = trim($_POST['mobile']);
 
    if ($name && $gst && $city && $mobile) {
 
        if (!preg_match('/^[0-9]{10}$/', $mobile)) {
            $error = "Mobile number must be 10 digits!";
        } else {
 
            $new_id = 'S00' . (count($_SESSION['suppliers']) + 1);
 
            $_SESSION['suppliers'][] = [
                'id' => $new_id,
                'name' => $name,
                'city' => $city,
                'gst' => $gst,
                'mobile' => $mobile,
                'status' => 'Active',
                'address' => $_POST['address'],
                'state' => $_POST['state'],
                'pincode' => $_POST['pincode'],
                'contact_person' => $_POST['contact_person'],
                'email' => $_POST['email'],
                'pan' => $_POST['pan'],
                'opening_balance' => $_POST['opening_balance']
            ];
 
            header("Location: supplier.php");
            exit;
        }
 
    } else {
        $error = "Please fill all required fields!";
    }
}
 
/* ---------- UPDATE SUPPLIER ---------- */
if (isset($_POST['update_supplier'])) {
 
    $id = $_POST['id'];
 
    $_SESSION['suppliers'][$id]['name'] = $_POST['name'];
    $_SESSION['suppliers'][$id]['gst'] = $_POST['gst'];
    $_SESSION['suppliers'][$id]['city'] = $_POST['city'];
    $_SESSION['suppliers'][$id]['mobile'] = $_POST['mobile'];
    $_SESSION['suppliers'][$id]['address'] = $_POST['address'];
    $_SESSION['suppliers'][$id]['state'] = $_POST['state'];
    $_SESSION['suppliers'][$id]['pincode'] = $_POST['pincode'];
    $_SESSION['suppliers'][$id]['contact_person'] = $_POST['contact_person'];
    $_SESSION['suppliers'][$id]['email'] = $_POST['email'];
    $_SESSION['suppliers'][$id]['pan'] = $_POST['pan'];
    $_SESSION['suppliers'][$id]['opening_balance'] = $_POST['opening_balance'];
    $_SESSION['suppliers'][$id]['status'] = $_POST['status'];
 
    header("Location: supplier.php");
    exit;
}
 
include('header.php');
?>
 
<?php if(!isset($_GET['mode']) || $_GET['mode']==''){ ?>
 
<!-- ================= VIEW PAGE ================= -->
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Suppliers</b>- View details</span>
                     <a href="supplier.php?mode=add_details">
                        <button class="btn btn-primary btn-sm waves-effect waves-light">
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
                           <?php foreach($_SESSION['suppliers'] as $i=>$sup){ ?>
                              <tr>
                                 <td><?= $i+1 ?></td>
                                 <td><?= $sup['id'] ?></td>
                                 <td><?= $sup['name'] ?></td>
                                 <td><?= $sup['city'] ?></td>
                                 <td><?= $sup['gst'] ?></td>
                                 <td><?= $sup['mobile'] ?></td>
                                 <td>
                                    <?php if($sup['status']=="Active"){ ?>
                                       <span class="badge bg-success">Active</span>
                                    <?php } else { ?>
                                       <span class="badge bg-danger">In-Active</span>
                                    <?php } ?>
                                 </td>
                                 <td class="text-center">
                                    <a href="supplier.php?mode=update_details&id=<?= $i ?>">
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
                              <input type="text" name="unit_name" class="form-control text-center" autocomplete="off">
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">GST No<span class="text-danger">*</span></label>
                              <input type="text" name="unit_name" class="form-control text-center" autocomplete="off">
                        </div>
                        <div class="col-md-6  text-center">
                              <label class="form-label ">Address<span class="text-danger">*</span></label>
                              <textarea class="form-control" type="text" name="address" id="address" autocomplete="off" style="height: 25px;"></textarea>
                        </div>
                     </div>

                     <div class="row d-flex justify-content-center mb-4">
                        <div class="col-md-3  text-center">
                              <label class="form-label ">City<span class="text-danger">*</span></label>
                              <input type="text" name="unit_name" value="Bangalore" class="form-control text-center" autocomplete="off">
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
                             <input type="text" name="" value="" class="form-control text-center" autocomplete="off">
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Contact Person</label>
                             <input type="text" name="" value="" class="form-control text-center" autocomplete="off">
                        </div>
                     </div>

                     <div class="row d-flex justify-content-center mb-4">
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Mobile No<span class="text-danger">*</span></label>
                              <input type="tel" name="" value="" class="form-control text-center" autocomplete="off">
                        </div>
                        <div class="col-md-3  text-center">
                              
                              <label class="form-label text-center ">Email</label>
                               <input type="email" name="" value="" class="form-control text-center"autocomplete="off">            
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">PAN Card</label>
                             <input type="text" maxlength="10" name="" value="" class="form-control text-center"autocomplete="off">
                        </div>
                        <div class="col-md-3  text-center">
                              <label class="form-label ">Opening Balance<span class="text-danger">*</span></label>
                             <input type="number" name="" value="" class="form-control text-center" autocomplete="off">
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

<?php } else if($_GET['mode'] == 'update_details'){
      $id = $_GET['id'];
      $sup = $_SESSION['suppliers'][$id];
?>
 
<!-- ================= UPDATE PAGE ================= -->
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                     <span class="card-title mb-0"><b>Supplier</b>- Update Details</span>
                     <a href="supplier.php">
                        <button class="btn btn-outline-primary btn-sm waves-effect waves-light">
                           <i class="bx bxs-left-arrow-circle me-1"></i> Back
                        </button>
                     </a>
                  </div>
 
                  <div class="card-body">
                  <form method="post">
                  <input type="hidden" name="id" value="<?= $id ?>">
 
                  <!-- SAME AS CREATE PAGE -->
                  <div class="row d-flex justify-content-center mb-4">
                     <div class="col-md-3 text-center">
                        <label class="form-label">Supplier Name</label>
                        <input type="text" name="name" value="<?= $sup['name'] ?>" class="form-control text-center">
                     </div>
                     <div class="col-md-3 text-center">
                        <label class="form-label">GST No</label>
                        <input type="text" name="gst" value="<?= $sup['gst'] ?>" class="form-control text-center">
                     </div>
                     <div class="col-md-6 text-center">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control"><?= $sup['address'] ?></textarea>
                     </div>
                  </div>
 
                  <div class="row d-flex justify-content-center mb-4">
                     <div class="col-md-3 text-center">
                        <label class="form-label">City</label>
                        <input type="text" name="city" value="<?= $sup['city'] ?>" class="form-control text-center">
                     </div>
                     <div class="col-md-3 text-center">
                        <label class="form-label">State</label>
                        <select name="state" class="form-control text-center">
                           <option <?= $sup['state']=="Karnataka"?"selected":"" ?>>Karnataka</option>
                           <option <?= $sup['state']=="Maharashtra"?"selected":"" ?>>Maharashtra</option>
                           <option <?= $sup['state']=="Tamilnadu"?"selected":"" ?>>Tamilnadu</option>
                           <option <?= $sup['state']=="Delhi"?"selected":"" ?>>Delhi</option>
                        </select>
                     </div>
                     <div class="col-md-3 text-center">
                        <label class="form-label">Pincode</label>
                        <input type="text" name="pincode" value="<?= $sup['pincode'] ?>" class="form-control text-center">
                     </div>
                     <div class="col-md-3 text-center">
                        <label class="form-label">Contact Person</label>
                        <input type="text" name="contact_person" value="<?= $sup['contact_person'] ?>" class="form-control text-center">
                     </div>
                  </div>
 
                  <div class="row d-flex justify-content-center mb-4">
                     <div class="col-md-3 text-center">
                        <label class="form-label">Mobile No</label>
                        <input type="text" name="mobile" value="<?= $sup['mobile'] ?>" class="form-control text-center">
                     </div>
                     <div class="col-md-3 text-center">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="<?= $sup['email'] ?>" class="form-control text-center">
                     </div>
                     <div class="col-md-3 text-center">
                        <label class="form-label">PAN</label>
                        <input type="text" name="pan" value="<?= $sup['pan'] ?>" class="form-control text-center">
                     </div>
                     <div class="col-md-3 text-center">
                        <label class="form-label">Opening Balance</label>
                        <input type="number" name="opening_balance" value="<?= $sup['opening_balance'] ?>" class="form-control text-center">
                     </div>
                  </div>
 
                  <!-- STATUS -->
                  <div class="row d-flex mb-4">
                     <div class="col-md-3 text-center">
                        <label class="form-label d-block">Status</label>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="status" value="Active" <?= $sup['status']=="Active"?"checked":"" ?>>
                           <span class="form-check-label">Active</span>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="status" value="Inactive" <?= $sup['status']=="Inactive"?"checked":"" ?>>
                           <span class="form-check-label">Inactive</span>
                        </div>
                     </div>
                  </div>
 
                  <div class="d-flex justify-content-end mt-3">
                     <button type="submit" name="update_supplier" class="btn btn-primary">
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
 
<?php include('footer.php');?>
<?php include('links.php');?>
<script src="assets/js/custom.js"></script>
</body>
</html>
 
 