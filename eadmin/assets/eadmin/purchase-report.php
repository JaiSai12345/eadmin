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
                        <div class="card-header d-flex justify-content-between align-items-center mb-3">
                            <span class="card-title mb-0"><b>Purchase Report</b></span>
                                <a href="dashboard.php">
                                    <button class="btn btn-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                                </a>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <!-- Supplier Name -->
                                <div class="col-md-3">
                                    <label class="form-label">Supplier Name</label>
                                    <select class="form-select" id="supplier">
                                        <option value="All">All</option>
                                        <option value="WoodenStreet">WoodenStreet</option>
                                        <option value="Durian">Durian</option>
                                    </select>
                                </div>

                                <!-- From Date -->
                                <div class="col-md-3">
                                    <label class="form-label">From Date</label>
                                    <input type="date" class="form-control" id="fromDate">
                                </div>

                                <!-- To Date -->
                                <div class="col-md-3 ">
                                    <label class="form-label">To Date</label>
                                    <input type="date" class="form-control" id="toDate">
                                </div>
                                <!-- Report Type -->
                                <div class=" col md-3">
                                    <label class="form-label d-block">Report Type</label>
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="radio" name="reportType" value="Summary"checked>
                                        <label class="form-check-label">Summary</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="reportType" value="Details">
                                        <label class="form-check-label">Details</label>
                                    </div>
                                </div>
                            </div>


                            <!-- Generate Button -->
                            <div class="mt-4 d-flex justify-content-end">
                                <button class="btn btn-primary btn-sm waves-effect waves-light" onclick="generateReport()">Generate</button>
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
<?php include('links.php'); ?>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
function generateReport() {
    var supplier = document.getElementById("supplier").value;
    var fromDate = document.getElementById("fromDate").value;
    var toDate = document.getElementById("toDate").value;
    var reportType = document.querySelector('input[name="reportType"]:checked').value;

    document.getElementById("output").innerHTML = `
      <div class="alert alert-success">
        <strong>Report Generated</strong><br>
        Supplier: ${supplier}<br>
        From: ${fromDate}<br>
        To: ${toDate}<br>
        Type: ${reportType}
      </div>
    `
}
</script>

</body>

</html>