
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
                            <span class="card-title mb-0"><b>Sales Report</b></span>
                                <a href="dashboard.php">
                                    <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                                </a>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <!-- Supplier Name -->
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="choices-single-default" class="form-label text-center w-100">Supplier Name<span class="mandatory-color text-danger">*</span></label>
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" placeholder="">
                                                <option value="Choice 1">Select</option>
                                                <option value="Choice 2">SMR Enterprises</option>
                                                <option value="Choice 3">Renuka Fresh Form</option>
                                            </select>
                                    
                                    </div>

                                    
                                </div>

                                <!-- From Date -->
                                <div class="col-md-3 text-center">
                                    <!-- <label class="form-label">From Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fromDate" placeholder="dd/mm/yyyy" required> -->
                                    <label class="form-label">From Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="text" class="form-control  text-center" id="datepicker-basic" readonly="readonly" placeholder="dd/mm/yyyy" required>
                                </div>

                                <!-- To Date -->
                                <div class="col-md-3 text-center">
                                    <label class="form-label">To Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="text" class="form-control text-center" id="datepicker-basic" readonly="readonly"  placeholder="dd/mm/yyyy" required>
                                </div>

                                <!-- Report Type -->
                                <div class="col-md-3 text-center">
                                    
                                    
                                    <label class="form-label d-block ">Report Type<span class="mandatory-color text-danger">*</span></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked>
                                        <span class="form-check-label" for="formRadios1">Summary</span>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="formRadios"id="formRadios2">
                                        <span class="form-check-label" for="formRadios2">Details</span>
                                    </div>
                                    
                                </div>
                                
                            </div>



                                <!-- Generate Button -->
                                <div class="mt-4 d-flex justify-content-end">
                                    <!-- <button class="btn btn-primary" onclick="generateReport()">Generate</button> -->
                                    <button class="btn btn-primary">Generate</button>
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



<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> -->
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

// function generateReport() {
//     let supplier = document.getElementById("supplier").value;
//     var customer = document.getElementById("customer").value;
//     var fromDate = document.getElementById("fromDate").value;
//     var toDate = document.getElementById("toDate").value;
//     var reportType = document.querySelector('input[name="reportType"]:checked').value;
//     if (!fromDate || !toDate) {
//             alert("Please select From Date and To Date");
//             return;
//     }
//     document.getElementById("output").innerHTML = `
//       <div class="alert alert-success">
//         <strong>Report Generated</strong><br>
//         Customer: ${customer}<br>
//         From: ${fromDate}<br>
//         To: ${toDate}<br>
//         Type: ${reportType}
//       </div>
//     `
// }
</script>


<script src="assets/js/custom.js"></script>


</body>

</html>