<?php include('configure.php');?>
<?php include('header.php');?>
<!-- MAIN CONTENT START -->
<div class="main-content">
    <!-- PAGE CONTENT START -->
    <div class="page-content">
        <!-- CONTAINER-FLUID START -->
        <div class="container-fluid">
            <!-- ROW START -->
            <div class="row" >
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-3">
                            <span class="card-title mb-0"><b>Inward Details</b></span>
                            <a href="dashboard.php">
                                <button class="btn btn-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                            </a>
                        </div>
                        
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label>Supplier Name<span class="mandatory-color text-danger">*</span></label>
                                    <select class="form-select"><option>Select</option></select>
                                </div>
                                <div class="col-md-3">
                                    <label>Contact No<span class="mandatory-color text-danger">*</span></label>
                                    <input class="form-control text-center" readonly type="text" style="background-color: #e9ecef">
                                </div>
                                <div class="col-md-3">
                                    <label>GST No<span class="mandatory-color text-danger">*</span></label>
                                    <input class="form-control text-center" readonly type="text" style="background-color: #e9ecef">
                                </div>
                                <div class="col-md-3">
                                    <label>State<span class="mandatory-color text-danger">*</span></label>
                                    <input class="form-control text-center" readonly type="text" style="background-color: #e9ecef;" value="Karnataka">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Invoice Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="date" class="form-control text-center"  type="text" style="background-color: #e9ecef;">
                                </div>
                                 <div class="col-md-3">
                                    <label>Invoice No<span class="mandatory-color text-danger">*</span></label>
                                    <input class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label>PO No</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label>PO Date</label>
                                    <input type="date" class="form-control text-center" type="text" style="background-color: #e9ecef;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card ">
                        <div class="card-header mb-3">
                            <span class="card-title mb-0"><b>Item Details</b></span>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>S.N</th>
                                        <th>Category</th>
                                        <th>Item Name</th>
                                        <th>HSN</th>
                                        <th>Rate</th>
                                        <th>SRate</th>
                                        <th>Unit</th>
                                        <th>GST%</th>
                                        <th>Qty</th>
                                        <th>Taxable</th>
                                        <th>GST Amt</th>
                                        <th>Total Amt</th>
                                        <th>Icode</th>
                                        <th>Stock</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                        <td><input class="form-control"></td>
                                    </tr>
                                </tbody>
                            </table>
                        <div class=" mb-5 d-flex justify-content-end">
                            <button class="btn btn-danger btn-sm waves-effect waves-light">- Delete</button>&emsp;
                            <button class="btn btn-primary btn-sm waves-effect waves-light">+ Add More</button>
                        </div>
                        <div class="row text-center mb-3">
                            <div class="col-md-3">
                                <label>Total Qnty<span class="mandatory-color text-danger">*</span></label>
                                <input class="form-control text-center" value="0">
                            </div>
                            <div class="col-md-3">
                                <label>Total Taxable<span class="mandatory-color text-danger">*</span></label>
                                <input class="form-control text-center" value="0">
                            </div>
                            <div class="col-md-3">
                                <label>Total GST<span class="mandatory-color text-danger">*</span></label>
                                <input class="form-control text-center" value="0.00">
                            </div>
                            <div class="col-md-3">
                                <label>Invoice Amt<span class="mandatory-color text-danger">*</span></label>
                                <input class="form-control text-center" value="0">
                            </div>
                        </div>

                        <div class="mt-4 d-flex justify-content-end">
                            <button class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
                        </div>

                    </div>
                </div>

            </div>
            <!-- ROW END -->
        </div>
        <!-- CONTAINER-FLUID END -->
   </div>
    <!-- PAGE CONTENT END -->
   <?php include('footer.php');?>
</div>
<!-- MAIN CONTENT END -->

</div>
<!-- LAYOUT WRAPPER END -->
  <?php include('links.php');?>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
 
<script>
$(document).ready(function(){
 $('#remarksEditor').summernote({height:200});
});
</script>
</body>
</html>