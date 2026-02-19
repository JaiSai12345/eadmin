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
<<<<<<< HEAD
                     <div id="table-search-count"></div>
=======
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">

<<<<<<< HEAD
                            <thead>
=======
                            <thead class="table-light">
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
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

<<<<<<< HEAD
                            <tbody  id="tableBody">
=======
                            <tbody>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b

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

<<<<<<< HEAD
                    <a href="customers.php">
                       <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
=======
                    <a href="customers.php"
                       class="btn btn-primary btn-sm">
                        <i class="fa fa-arrow-left me-1"></i> Back
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                    </a>
                </div>

                <div class="card-body">

                    <form method="post">

<<<<<<< HEAD
                        <div class="row">

                            <div class="col-md-3 mb-3">
                                <label class="form-label">
                                    Customer Name <span class="text-danger">*</span>
=======
                        <div class="row text-center">

                            <div class="col-md-4 mb-3">
                                <label class="form-label">
                                    Customer Name <span class="mandatory-color text-danger">*</span>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                </label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
<<<<<<< HEAD
                                       autocomplete="off">
                            </div>

                            <div class="col-md-3 mb-3">
                                <label class="form-label">
                                    Contact No <span class="text-danger">*</span>
=======
                                       required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">
                                    Contact No <span class="mandatory-color text-danger">*</span>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                </label>
                                <input type="text"
                                       name="contact"
                                       class="form-control"
                                       pattern="[0-9]{10}"
                                       maxlength="10"
<<<<<<< HEAD
                                       autocomplete="off">
                            </div>

                            <div class="col-md-6 mb-3">
=======
                                       required>
                            </div>

                            <div class="col-md-4 mb-3">
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                <label class="form-label">Address</label>
                                <textarea name="address"
                                          class="form-control"
                                          rows="1"></textarea>
                            </div>

<<<<<<< HEAD
                            <div class="col-md-3 mb-3">
                                <label class="form-label">
                                    State <span class="text-danger">*</span>
=======
                            <div class="col-md-4 mb-3">
                                <label class="form-label">
                                    State <span class="mandatory-color text-danger">*</span>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                </label>
                                <input type="text"
                                       name="state"
                                       value="Karnataka"
                                       class="form-control"
<<<<<<< HEAD
                                      autocomplte="off">
                            </div>

                            <div class="col-md-3 mb-3">
=======
                                       required>
                            </div>

                            <div class="col-md-4 mb-3">
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                <label class="form-label">GST No</label>
                                <input type="text"
                                       name="gst"
                                       maxlength="15"
<<<<<<< HEAD
                                       class="form-control"
                                       autocomplete="off">
=======
                                       class="form-control">
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                            </div>

                        </div>

<<<<<<< HEAD
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit"
                                    name="create_customer"
                                    class="btn btn-primary waves-effect waves-light">
=======
                        <div class="d-flex justify-content-end">
                            <button type="submit"
                                    name="create_customer"
                                    class="btn btn-primary px-4">
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
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
<<<<<<< HEAD
                        <b>Customers</b> - Update
                    </span>

                    <a href="customers.php">
                       <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
=======
                        <b>Customers</b> - Update <Details></Details>
                    </span>

                    <a href="customers.php"
                       class="btn btn-primary btn-sm">
                        <i class="fa fa-arrow-left me-1"></i> Back
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                    </a>
                </div>

                <div class="card-body">

                    <form method="post">

                        <input type="hidden" name="id" value="<?= $id ?>">

                        <div class="row">

<<<<<<< HEAD
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Customer Name <span class="text-danger">*</span></label>
=======
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Customer Name<span class="mandatory-color text-danger">*</span></label>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                <input type="text"
                                       name="name"
                                       value="<?= htmlspecialchars($c['name']) ?>"
                                       class="form-control"
                                       required>
                            </div>

<<<<<<< HEAD
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Contact No <span class="text-danger">*</span></label>
=======
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Contact No <span class="mandatory-color text-danger">*</span></label>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                <input type="text"
                                       name="contact"
                                       value="<?= htmlspecialchars($c['contact']) ?>"
                                       class="form-control"
                                       pattern="[0-9]{10}"
                                       maxlength="10"
                                       required>
                            </div>

<<<<<<< HEAD
                            <div class="col-md-6 mb-3">
=======
                            <div class="col-md-4 mb-3">
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                <label class="form-label">Address</label>
                                <textarea name="address"
                                          class="form-control"
                                          rows="1"><?= htmlspecialchars($c['address']) ?></textarea>
                            </div>

<<<<<<< HEAD
                            <div class="col-md-3 mb-3">
                                <label class="form-label">State <span class="text-danger">*</span></label>
=======
                            <div class="col-md-4 mb-3">
                                <label class="form-label">State<span class="mandatory-color text-danger">*</span></label>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                <input type="text"
                                       name="state"
                                       value="<?= htmlspecialchars($c['state']) ?>"
                                       class="form-control"
                                       required>
                            </div>

<<<<<<< HEAD
                            <div class="col-md-3 mb-3">
=======
                            <div class="col-md-4 mb-3">
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                <label class="form-label">GST No</label>
                                <input type="text"
                                       name="gst"
                                       value="<?= htmlspecialchars($c['gst']) ?>"
                                       class="form-control">
                            </div>

<<<<<<< HEAD
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Status <span class="text-danger">*</span></label><br>
=======
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Status<span class="mandatory-color text-danger">*</span></label><br>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="status"
                                           value="Active"
                                           <?= $c['status'] == 'Active' ? 'checked' : '' ?>>
<<<<<<< HEAD
                                    <span class="form-check-label">Active</span>
=======
                                    <label class="form-check-label">Active</label>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="status"
                                           value="In-Active"
                                           <?= $c['status'] == 'In-Active' ? 'checked' : '' ?>>
<<<<<<< HEAD
                                    <span class="form-check-label">Inactive</span>
=======
                                    <label class="form-check-label">Inactive</label>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
                                </div>

                            </div>

                        </div>

<<<<<<< HEAD
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit"
                                    name="update_customer"
                                    class="btn btn-primary waves-effect waves-lightbtn btn-primary waves-effect waves-light">
=======
                        <div class="text-center mt-3">
                            <button type="submit"
                                    name="update_customer"
                                    class="btn btn-primary px-4">
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
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
<<<<<<< HEAD
=======
</body>
</html>
>>>>>>> 3aae9fbcf26715c664befb684c9004b5053c474b
