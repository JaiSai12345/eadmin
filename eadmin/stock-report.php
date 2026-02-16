<?php include('configure.php');?>
<?php include('header.php');?>



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
                            <span class="card-title mb-0"><b>Stock Report</b></span>
                                <a href="dashboard.php">
                                    <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                                </a>
                        </div>
                        <div class="card-body">
            <div class="row justify-content-center ">

                <!-- Searchable Category Dropdown -->
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="choices-single-default" class="form-label text-center w-100">Category Name <span class="text-danger">*</span></label>
                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" placeholder="This">                     
                            <option value="Choice 1">All</option>
                            <option value="Choice 2">Fruits</option>
                            <option value="Choice 3">Vegetables</option>
                        </select>
                                        
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <label class="form-label ">
                        On Stock Lesser Than <span class="text-danger">*</span>
                    </label>
                    <input type="number" class="form-control text-center" value="100">
                </div>

                            <!-- Generate Button -->
                            <div class="mt-4 d-flex justify-content-end">
                                <button class="btn btn-primary waves-effect waves-light" onclick="generateReport()">Generate</button>
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
</div>
<!-- LAYOUT WRAPPER END -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
     $('#supplier').select2({
        placeholder: "Select Supplier",
       
    });
    function generateReport() {
    let supplier = document.getElementById("supplier").value;
}
</script>
<?php include('links.php'); ?>  
</body>

</html>