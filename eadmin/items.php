<?php
include('configure.php');
session_start();
 
/* ---------- DEFAULT ITEMS ---------- */
if (!isset($_SESSION['items'])) {
    $_SESSION['items'] = [
        [
            'code'        => 'I001',
            'category'    => 'Rice',
            'name'        => 'Sona Masuri 25Kg Bag',
            'hsn'         => '23521',
            'description' => '25Kg Bag',
            'gst'         => '5',
            'unit'        => 'Kgs',
            'base_rate'   => '250',
            'sell_rate'   => '340',
            'stock'       => '70',
            'status'      => 'Active'
        ],
        [
            'code'        => 'I002',
            'category'    => 'Vegetables',
            'name'        => 'Capsicum',
            'hsn'         => '11111',
            'description' => 'Fresh',
            'gst'         => '0',
            'unit'        => 'Kgs',
            'base_rate'   => '30',
            'sell_rate'   => '45',
            'stock'       => '17',
            'status'      => 'Inactive'
        ]
    ];
}
 
/* ---------- CREATE ITEM ---------- */
if (isset($_POST['create_item'])) {
 
    $new_code = 'I00' . (count($_SESSION['items']) + 1);
 
    $_SESSION['items'][] = [
        'code'        => $new_code,
        'category'    => $_POST['category'],
        'name'        => $_POST['name'],
        'hsn'         => $_POST['hsn'],
        'description' => $_POST['description'],
        'gst'         => $_POST['gst'],
        'unit'        => $_POST['unit'],
        'base_rate'   => $_POST['base_rate'],
        'sell_rate'   => $_POST['sell_rate'],
        'stock'       => $_POST['stock'],
        'status'      => $_POST['status']
    ];
 
    header("Location: items.php");
    exit;
}
 
/* ---------- UPDATE ITEM ---------- */
if (isset($_POST['update_item'])) {
 
    $index = $_POST['index'];
 
    $_SESSION['items'][$index]['category']    = $_POST['category'];
    $_SESSION['items'][$index]['name']        = $_POST['name'];
    $_SESSION['items'][$index]['hsn']         = $_POST['hsn'];
    $_SESSION['items'][$index]['description'] = $_POST['description'];
    $_SESSION['items'][$index]['gst']         = $_POST['gst'];
    $_SESSION['items'][$index]['unit']        = $_POST['unit'];
    $_SESSION['items'][$index]['base_rate']   = $_POST['base_rate'];
    $_SESSION['items'][$index]['sell_rate']   = $_POST['sell_rate'];
    $_SESSION['items'][$index]['stock']       = $_POST['stock'];
    $_SESSION['items'][$index]['status']      = $_POST['status'];
 
    header("Location: items.php");
    exit;
}
 
include('header.php');
?>
 
<?php if (!isset($_GET['mode']) || $_GET['mode'] == '') { ?>
 
<!-- ================= VIEW PAGE ================= -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
 
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="card-title mb-0">
                                <b>Items</b> - View details
                            </span>
                            <a href="items.php?mode=add">
                                <button class="btn btn-primary btn-sm">
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
                                            <th>I.Code</th>
                                            <th>Category</th>
                                            <th>Item Name</th>
                                            <th>GST %</th>
                                            <th>Base Rate</th>
                                            <th>Sell Rate</th>
                                            <th>On Stock</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody  id="tableBody">
 
                                    <?php foreach ($_SESSION['items'] as $i => $item) { ?>
                                        <tr>
                                            <td><?= $i + 1 ?></td>
                                            <td><?= $item['code'] ?></td>
                                            <td><?= $item['category'] ?></td>
                                            <td><?= $item['name'] ?></td>
                                            <td><?= $item['gst'] ?></td>
                                            <td><?= $item['base_rate'] ?></td>
                                            <td><?= $item['sell_rate'] ?></td>
                                            <td><?= $item['stock'] ?></td>
                                            <td>
                                                <?php if ($item['status'] == "Active") { ?>
                                                    <span class="badge bg-success">Active</span>
                                                <?php } else { ?>
                                                    <span class="badge bg-danger">In-Active</span>
                                                <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <a href="items.php?mode=edit&id=<?= $i ?>">
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
 
<?php } else if ($_GET['mode'] == 'add') { ?>
 
<!-- ================= ADD PAGE ================= -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
 
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="card-title mb-0">
                                <b>Items</b> - Add New
                            </span>
                            <a href="items.php">
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="bx bxs-left-arrow-circle me-1"></i> Back
                                </button>
                            </a>
                        </div>
 
                        <div class="card-body">
                            <form method="post">
 
                                <div class="row mb-4">
                                    <div class="col-md-3 text-center">
                                        <label>Category</label>
                                        <input type="text" name="category" class="form-control text-center" required>
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>Item Name</label>
                                        <input type="text" name="name" class="form-control text-center" required>
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>HSN No</label>
                                        <input type="text" name="hsn" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control text-center">
                                    </div>
                                </div>
 
                                <div class="row mb-4">
                                    <div class="col-md-3 text-center">
                                        <label>GST %</label>
                                        <input type="number" name="gst" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>Unit</label>
                                        <input type="text" name="unit" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>Base Rate</label>
                                        <input type="number" name="base_rate" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>Selling Rate</label>
                                        <input type="number" name="sell_rate" class="form-control text-center">
                                    </div>
                                </div>
 
                                <div class="row mb-4">
                                    <div class="col-md-3 text-center">
                                        <label>On Stock</label>
                                        <input type="number" name="stock" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
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
 
                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="create_item" class="btn btn-primary">
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
 
<?php } else if ($_GET['mode'] == 'edit') {
 
    $id = $_GET['id'];
    $item = $_SESSION['items'][$id];
?>
 
<!-- ================= EDIT PAGE ================= -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
 
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="card-title mb-0">
                                <b>Items</b> - Update Details
                            </span>
                            <a href="items.php">
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="bx bxs-left-arrow-circle me-1"></i> Back
                                </button>
                            </a>
                        </div>
 
                        <div class="card-body">
                            <form method="post">
 
                                <input type="hidden" name="index" value="<?= $id ?>">
 
                                <div class="row mb-4">
                                    <div class="col-md-3 text-center">
                                        <label>Category<span class="mandatory-color text-danger">*</span></label>
                                        <input type="text" name="category" value="<?= $item['category'] ?>" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>Item Name<span class="mandatory-color text-danger">*</span></label>
                                        <input type="text" name="name" value="<?= $item['name'] ?>" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>HSN No<span class="mandatory-color text-danger">*</span></label>
                                        <input type="text" name="hsn" value="<?= $item['hsn'] ?>" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>Description</label>
                                        <input type="text" name="description" value="<?= $item['description'] ?>" class="form-control text-center">
                                    </div>
                                </div>
 
                                <div class="row mb-4">
                                    <div class="col-md-3 text-center">
                                        <label>GST %<span class="mandatory-color text-danger">*</span></label>
                                        <input type="number" name="gst" value="<?= $item['gst'] ?>" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>Unit<span class="mandatory-color text-danger">*</span></label>
                                        <input type="text" name="unit" value="<?= $item['unit'] ?>" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>Base Rate<span class="mandatory-color text-danger">*</span></label>
                                        <input type="number" name="base_rate" value="<?= $item['base_rate'] ?>" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
                                        <label>Selling Rate<span class="mandatory-color text-danger">*</span></label>
                                        <input type="number" name="sell_rate" value="<?= $item['sell_rate'] ?>" class="form-control text-center">
                                    </div>
                                </div>
 
                                <div class="row mb-4">
                                    <div class="col-md-3 text-center">
                                        <label>On Stock<span class="mandatory-color text-danger">*</span></label>
                                        <input type="number" name="stock" value="<?= $item['stock'] ?>" class="form-control text-center">
                                    </div>
 
                                    <div class="col-md-3 text-center">
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
 
                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="update_item" class="btn btn-primary">
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