<?php

include('configure.php');
session_start();

/* ================= RESET SESSION (ONLY FOR DEMO) ================= */
/* Remove this block later when using database */

if (!isset($_SESSION['customers'])) {

    $_SESSION['customers'] = [

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


<!-- ================= VIEW PAGE ================= -->

<?php if (!isset($_GET['mode'])) { ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="card-title mb-0">
                        <b>Customers</b> - View Details
                    </span>

                    <a href="customers.php?mode=add_customer"
                       class="btn btn-primary btn-sm">
                        <i class="fa fa-plus me-1"></i> Create
                    </a>
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">

                            <thead class="table-light">
                                <tr>
                                    <th>S.No</th>
                                    <th>Customer Name</th>
                                    <th>Contact No</th>
                                    <th>Address</th>
                                    <th>State</th>
                                    <th>GST Number</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php foreach ($_SESSION['customers'] as $i => $c) { ?>

                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= htmlspecialchars($c['name']) ?></td>
                                    <td><?= htmlspecialchars($c['contact']) ?></td>
                                    <td><?= htmlspecialchars($c['address']) ?></td>

                                    <td>
                                        <?= isset($c['state']) 
                                            ? htmlspecialchars($c['state']) 
                                            : 'Karnataka' ?>
                                    </td>

                                    <td><?= htmlspecialchars($c['gst']) ?></td>

                                    <td>
                                        <?php if ($c['status'] == 'Active') { ?>
                                            <span class="badge bg-success">Active</span>
                                        <?php } else { ?>
                                            <span class="badge bg-danger">In-Active</span>
                                        <?php } ?>
                                    </td>

                                    <td class="text-center">
                                        <a href="customers.php?mode=update_customer&id=<?= $i ?>">
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



<!-- ================= ADD PAGE ================= -->

<?php } else if ($_GET['mode'] == 'add_customer') { ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="card-title mb-0">
                        <b>Customers</b> - Add New
                    </span>

                    <a href="customers.php"
                       class="btn btn-primary btn-sm">
                        <i class="fa fa-arrow-left me-1"></i> Back
                    </a>
                </div>

                <div class="card-body">

                    <form method="post">

                        <div class="row text-center">

                            <div class="col-md-4 mb-3">
                                <label class="form-label">
                                    Customer Name <span class="mandatory-color text-danger">*</span>
                                </label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">
                                    Contact No <span class="mandatory-color text-danger">*</span>
                                </label>
                                <input type="text"
                                       name="contact"
                                       class="form-control"
                                       pattern="[0-9]{10}"
                                       maxlength="10"
                                       required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address"
                                          class="form-control"
                                          rows="1"></textarea>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">
                                    State <span class="mandatory-color text-danger">*</span>
                                </label>
                                <input type="text"
                                       name="state"
                                       value="Karnataka"
                                       class="form-control"
                                       required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">GST No</label>
                                <input type="text"
                                       name="gst"
                                       maxlength="15"
                                       class="form-control">
                            </div>

                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit"
                                    name="create_customer"
                                    class="btn btn-primary px-4">
                                Add
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>



<!-- ================= UPDATE PAGE ================= -->

<?php } else if ($_GET['mode'] == 'update_customer') {

    $id = $_GET['id'];
    $c  = $_SESSION['customers'][$id];

?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="card-title mb-0">
                        <b>Customers</b> - Update <Details></Details>
                    </span>

                    <a href="customers.php"
                       class="btn btn-primary btn-sm">
                        <i class="fa fa-arrow-left me-1"></i> Back
                    </a>
                </div>

                <div class="card-body">

                    <form method="post">

                        <input type="hidden" name="id" value="<?= $id ?>">

                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Customer Name<span class="mandatory-color text-danger">*</span></label>
                                <input type="text"
                                       name="name"
                                       value="<?= htmlspecialchars($c['name']) ?>"
                                       class="form-control"
                                       required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Contact No <span class="mandatory-color text-danger">*</span></label>
                                <input type="text"
                                       name="contact"
                                       value="<?= htmlspecialchars($c['contact']) ?>"
                                       class="form-control"
                                       pattern="[0-9]{10}"
                                       maxlength="10"
                                       required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address"
                                          class="form-control"
                                          rows="1"><?= htmlspecialchars($c['address']) ?></textarea>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">State<span class="mandatory-color text-danger">*</span></label>
                                <input type="text"
                                       name="state"
                                       value="<?= htmlspecialchars($c['state']) ?>"
                                       class="form-control"
                                       required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">GST No</label>
                                <input type="text"
                                       name="gst"
                                       value="<?= htmlspecialchars($c['gst']) ?>"
                                       class="form-control">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Status<span class="mandatory-color text-danger">*</span></label><br>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="status"
                                           value="Active"
                                           <?= $c['status'] == 'Active' ? 'checked' : '' ?>>
                                    <label class="form-check-label">Active</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="status"
                                           value="In-Active"
                                           <?= $c['status'] == 'In-Active' ? 'checked' : '' ?>>
                                    <label class="form-check-label">Inactive</label>
                                </div>

                            </div>

                        </div>

                        <div class="text-center mt-3">
                            <button type="submit"
                                    name="update_customer"
                                    class="btn btn-primary px-4">
                                Update
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?php } ?>

<?php include('footer.php'); ?>
<?php include('links.php'); ?>
</body>
</html>