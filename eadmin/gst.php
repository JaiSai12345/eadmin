<?php
include('configure.php');
session_start();
 
/* ---------- DEFAULT GST DATA (15 Records) ---------- */
if (!isset($_SESSION['gst'])) {
    $_SESSION['gst'] = [
 
        ['gst'=>0,'sgst'=>0,'cgst'=>0,'igst'=>0,'default'=>'No','status'=>'Inactive'],
        ['gst'=>5,'sgst'=>2.5,'cgst'=>2.5,'igst'=>5,'default'=>'Yes','status'=>'Active'],
        ['gst'=>12,'sgst'=>6,'cgst'=>6,'igst'=>12,'default'=>'No','status'=>'Active'],
        ['gst'=>18,'sgst'=>9,'cgst'=>9,'igst'=>18,'default'=>'No','status'=>'Active'],
        ['gst'=>28,'sgst'=>14,'cgst'=>14,'igst'=>28,'default'=>'No','status'=>'Active'],
        ['gst'=>36,'sgst'=>18,'cgst'=>18,'igst'=>36,'default'=>'No','status'=>'Inactive'],
        ['gst'=>42,'sgst'=>21,'cgst'=>21,'igst'=>42,'default'=>'No','status'=>'Inactive'],
        ['gst'=>52,'sgst'=>26,'cgst'=>26,'igst'=>52,'default'=>'No','status'=>'Active'],
        ['gst'=>56,'sgst'=>28,'cgst'=>28,'igst'=>56,'default'=>'No','status'=>'Inactive'],
        ['gst'=>62,'sgst'=>31,'cgst'=>31,'igst'=>62,'default'=>'No','status'=>'Active'],
        ['gst'=>70,'sgst'=>35,'cgst'=>35,'igst'=>70,'default'=>'No','status'=>'Active'],
        ['gst'=>75,'sgst'=>37.5,'cgst'=>37.5,'igst'=>75,'default'=>'No','status'=>'Inactive'],
        ['gst'=>80,'sgst'=>40,'cgst'=>40,'igst'=>80,'default'=>'No','status'=>'Active'],
        ['gst'=>85,'sgst'=>42.5,'cgst'=>42.5,'igst'=>85,'default'=>'No','status'=>'Active'],
        ['gst'=>90,'sgst'=>45,'cgst'=>45,'igst'=>90,'default'=>'No','status'=>'Inactive']
 
    ];
}
 
/* ---------- PAGINATION ---------- */
$limit = 6;
$total = count($_SESSION['gst']);
$total_pages = ceil($total / $limit);
 
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_index = ($page - 1) * $limit;
$gst_data = array_slice($_SESSION['gst'], $start_index, $limit);
 
/* ---------- UPDATE GST ---------- */
if (isset($_POST['update_gst'])) {
 
    $index = $_POST['index'];
 
    $_SESSION['gst'][$index]['gst']     = $_POST['gst'];
    $_SESSION['gst'][$index]['sgst']    = $_POST['sgst'];
    $_SESSION['gst'][$index]['cgst']    = $_POST['cgst'];
    $_SESSION['gst'][$index]['igst']    = $_POST['igst'];
    $_SESSION['gst'][$index]['default'] = $_POST['default'];
    $_SESSION['gst'][$index]['status']  = $_POST['status'];
 
    /* Only one default allowed */
    if ($_POST['default'] == "Yes") {
        foreach ($_SESSION['gst'] as $k => $v) {
            if ($k != $index) {
                $_SESSION['gst'][$k]['default'] = "No";
            }
        }
    }
 
    header("Location: gst.php");
    exit;
}
 
include('header.php');
?>
 
<?php if (!isset($_GET['mode'])) { ?>
 
<!-- ================= VIEW PAGE ================= -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
 
                        <div class="card-header">
                            <span class="card-title mb-0">
                                <b>GST</b> - View Details
                            </span>
                        </div>
 
                        <div class="card-body">
                           <div id="table-search-count"></div>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>GST %</th>
                                            <th>SGST %</th>
                                            <th>CGST %</th>
                                            <th>IGST %</th>
                                            <th>Default</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
 
                                    <?php foreach ($gst_data as $i => $g) {
                                        $real_index = $start_index + $i;
                                    ?>
                                        <tr>
                                            <td><?= $real_index + 1 ?></td>
                                            <td><?= $g['gst'] ?></td>
                                            <td><?= $g['sgst'] ?></td>
                                            <td><?= $g['cgst'] ?></td>
                                            <td><?= $g['igst'] ?></td>
 
                                            <td class="<?= $g['default']=="Yes" ? 'text-primary' : '' ?>">
                                                <?= $g['default'] ?>
                                            </td>
 
                                            <td>
                                                <?php if ($g['status']=="Active") { ?>
                                                    <span class="badge bg-success">Active</span>
                                                <?php } else { ?>
                                                    <span class="badge bg-danger">In-Active</span>
                                                <?php } ?>
                                            </td>
 
                                            <td class="text-center">
                                                <a href="gst.php?mode=edit&id=<?= $real_index ?>">
                                                    <i class="fa fa-edit text-primary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
 
                                    </tbody>
                                </table>
                            </div>
 
                            <!-- Pagination Footer -->
                            <!-- <div class="d-flex justify-content-between align-items-center mt-2">
 
                                <small>
                                    Showing <?= $start_index + 1 ?>
                                    to <?= min($start_index + $limit, $total) ?>
                                    of <?= $total ?> entries
                                </small>
 
                                <nav>
                                    <ul class="pagination pagination-sm mb-0">
 
                                        <?php for ($p = 1; $p <= $total_pages; $p++) { ?>
                                            <li class="page-item <?= $page == $p ? 'active' : '' ?>">
                                                <a class="page-link" href="gst.php?page=<?= $p ?>">
                                                    <?= $p ?>
                                                </a>
                                            </li>
                                        <?php } ?>
 
                                    </ul>
                                </nav>
 
                            </div> -->
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?php } else if ($_GET['mode'] == 'edit') {
 
    $id = $_GET['id'];
    $g  = $_SESSION['gst'][$id];
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
                                <b>GST</b> - Update Details
                            </span>
                            <a href="gst.php">
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="bx bxs-left-arrow-circle me-1"></i> Back
                                </button>
                            </a>
                        </div>
 
                        <div class="card-body">
                            <form method="post">
 
                                <input type="hidden" name="index" value="<?= $id ?>">
 
                                <div class="row mb-4 text-center">
                                    <div class="col-md-3">
                                        <label>GST</label>
                                        <input type="text" name="gst" value="<?= $g['gst'] ?>" class="form-control">
                                    </div>
 
                                    <div class="col-md-3">
                                        <label>SGST</label>
                                        <input type="text" name="sgst" value="<?= $g['sgst'] ?>" class="form-control">
                                    </div>
 
                                    <div class="col-md-3">
                                        <label>CGST</label>
                                        <input type="text" name="cgst" value="<?= $g['cgst'] ?>" class="form-control">
                                    </div>
 
                                    <div class="col-md-3">
                                        <label>IGST</label>
                                        <input type="text" name="igst" value="<?= $g['igst'] ?>" class="form-control">
                                    </div>
                                </div>
 
                                <div class="row mb-4 text-center">
                                    <div class="col-md-3">
                                        <label class="d-block">Default</label>
                                        <input type="radio" name="default" value="Yes"class="form-check-input" <?= $g['default']=="Yes"?'checked':'' ?>> Yes
                                        <input type="radio" name="default" value="No" class="form-check-input"<?= $g['default']=="No"?'checked':'' ?>> No
                                    </div>

                                    <div class="col-md-3">
                                        <label class="form-label">Status <span class="text-danger">*</span></label><br>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="status"
                                           value="Active"
                                           <?= $c['status'] == 'Active' ? 'checked' : '' ?>>
                                    <span class="form-check-label">Active</span>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="status"
                                           value="In-Active"
                                           <?= $c['status'] == 'In-Active' ? 'checked' : '' ?>>
                                    <span class="form-check-label">Inactive</span>
                                </div>
                                    </div>
                                </div>
 
                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="update_gst" class="btn btn-primary">
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