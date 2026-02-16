<?php include('configure.php');?>
<?php include('header.php');?>

<div class="main-content">
   <div class="page-content">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-3">
                            <span class="card-title mb-0"><b>Inward Details</b></span>
                            <a href="dashboard.php">
                                <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                            </a>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">
                            <div class="row mb-3  ">
                                <div class="col-md-3 ">
                                    <div class="mb-3 ">
                                        <label for="choices-single-default" class="form-label text-center w-100">Supplier Name<span class="mandatory-color text-danger">*</span></label>
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" placeholder="">
                                                <option value="Choice 1">Select</option>
                                                <option value="Choice 2">SMR Enterprises</option>
                                                <option value="Choice 3">Renuka Fresh Form</option>
                                            </select>
                                    
                                    </div>

                                    

                                </div>
                                <div class="col-md-3 text-center">
                                    <label class="form-label">Contact No<span class="mandatory-color text-danger">*</span></label>
                                    <input class="form-control text-center" readonly type="text" style="background-color: #e9ecef">
                                </div>
                                <div class="col-md-3 text-center">
                                    <label class="form-label">GST No<span class="mandatory-color text-danger">*</span></label>
                                    <input class="form-control text-center" readonly type="text" style="background-color: #e9ecef">
                                </div>
                                <div class="col-md-3 text-center">
                                    <label class="form-label">State<span class="mandatory-color text-danger">*</span></label>
                                    <input class="form-control text-center" readonly type="text" style="background-color: #e9ecef;" value="Karnataka">
                                    
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-3 text-center">
                                    <label class="form-label ">Invoice Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="text" class="form-control text-center" id="datepicker-basic" style="background-color: #e9ecef;" readonly="readonly" placeholder="dd/mm/yyyy" required>
                                </div>

                                <div class="col-md-3 text-center">
                                    <label class="form-label" >Invoice No<span class="mandatory-color text-danger">*</span></label>
                                    <input class="form-control text-center">
                                </div>
                                <div class="col-md-3 text-center">
                                    <label class="form-label" >PO No<span class="mandatory-color text-danger">*</span></label>
                                    <input class="form-control text-center">
                                </div>
                                <div class="col-md-3 text-center">
                                    <label class="form-label ">PO Date<span class="mandatory-color text-danger">*</span></label>
                                    <input type="text" class="form-control text-center " id="datepicker-basic" style="background-color: #e9ecef;" readonly="readonly" placeholder="dd/mm/yyyy" required>
                                </div>
                            </div>
                        </div>
                    </div>


                    <style>
                    /* Column width adjustment */
                    th:nth-child(1), td:nth-child(1){ width:50px; }
                    th:nth-child(2), td:nth-child(2){ width:130px; }
                    th:nth-child(3), td:nth-child(3){ width:150px; }
                    th:nth-child(4), td:nth-child(4){ width:100px; }
                    th:nth-child(5), td:nth-child(5){ width:100px; }
                    th:nth-child(6), td:nth-child(6){ width:100px; }
                    th:nth-child(7), td:nth-child(7){ width:110px; }
                    th:nth-child(8), td:nth-child(8){ width:110px; }
                    th:nth-child(9), td:nth-child(9){ width:100px; }
                    th:nth-child(10), td:nth-child(10){ width:100px; }
                    th:nth-child(11), td:nth-child(11){ width:100px; }
                    th:nth-child(12), td:nth-child(12){ width:100px; }
                    th:nth-child(13), td:nth-child(13){ width:100px; }
                    th:nth-child(14), td:nth-child(14){ width:100px; }
                    th:nth-child(15), td:nth-child(15){ width:70px; }
                    
                    </style> 

                    <div class="card">
                        <div class="card-header">
                            <span class="card-title mb-0"><b>Item Details</b></span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered  table-sm text-center" style="table-layout: fixed;">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Category</th>
                                            <th>Item</th>
                                            <th>HSN</th>
                                            <th>Rate</th>
                                            <th>SRate</th>
                                            <th>Unit</th>
                                            <th>GST%</th>
                                            <th>Qty</th>
                                            <th>Taxable</th>
                                            <th>GST Amt</th>
                                            <th>Total</th>
                                            <th>Icode</th>
                                            <th>Stock</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody id="itemBody">
                                        <tr>
                                            <td>1</td>

                                            <td>
                                                <select class="form-select">
                                                    <option value="">Select</option>
                                                    <option>Vegetables</option>
                                                    <option>Fruits</option>
                                                    <option>Groceries</option>
                                                </select>
                                            </td>

                                            <td>
                                                <select class="form-select">
                                                    <option value="">Select</option>
                                                    <option>Capsicum</option>
                                                    <option>Tomato</option>
                                                    <option>Potato</option>
                                                </select>
                                            </td>

                                            <td><input class="form-control"></td>

                                            <td><input type="number" class="form-control rate"></td>
                                            <td><input class="form-control"></td>

                                            <td>
                                                <select class="form-select">
                                                    <option value="">Select</option>
                                                    <option>Kgs</option>
                                                    <option>Nos</option>
                                                    <option>Box</option>
                                                </select>
                                            </td>

                                            <td>
                                                <select class="form-select gst">
                                                    <option value="">Select</option>
                                                    <option value="0">0%</option>
                                                    <option value="5">5%</option>
                                                    <option value="12">12%</option>
                                                    <option value="18">18%</option>
                                                    <option value="28">28%</option>
                                                </select>
                                            </td>

                                            <td><input type="number" class="form-control qty"></td>

                                            <td><input class="form-control taxable" readonly></td>
                                            <td><input class="form-control gstamt" readonly></td>
                                            <td><input class="form-control totalamt" readonly></td>

                                            <td><input class="form-control"></td>
                                            <td><input class="form-control"></td>

                                            <td>
                                            <button class="btn btn-sm btn-danger rowDelete">x</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-end gap-2 mb-3">
                                <button id="addRow" class="btn btn-primary waves-effect waves-light">+ Add More</button>
                                <button id="deleteRow" class="btn btn-danger waves-effect waves-light">- Delete Last</button>
                            </div>
                            <br>
                            <!-- Totals -->
                            <div class="row g-3 text-center">
                                <div class="col-md-3">
                                    <label>Total Qty</label>
                                    <input id="totalQty" class="form-control" value="0">
                                </div>

                                <div class="col-md-3">
                                    <label>Total Taxable</label>
                                    <input id="totalTaxable" class="form-control" value="0">
                                </div>

                                <div class="col-md-3">
                                    <label>Total GST</label>
                                    <input id="totalGST" class="form-control" value="0">
                                </div>

                                <div class="col-md-3">
                                    <label>Invoice Amount</label>
                                    <input id="invoiceAmt" class="form-control" value="0">
                                </div>
                            </div>

                            <div class="text-end mt-3">
                                <button class="btn btn-primary  waves-effect waves-light">Save</button>
                            </div>

                        </div>
                    </div>
                

                    <!-- CKEditor CDN -->
                    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>

                    
                        <div class="card" >
                            <div class="card-header">
                                <span class="card-title mb-0"><b>Remarks</b></span>
                            </div>
                            <div class="card-body">
                                <textarea name="remarks" id="remarks" rows="6" class="form-control">
                                    1. Once items sold, they can not be taken back.<br>
                                    2. No warrenty or guarentee of any sold items
                                </textarea>
                            </div>
                        </div>
                

                    <script>
                        CKEDITOR.replace('remarks');
                    </script>
                    <script>
                        let rowCount = 1;

                        // Add Row
                        document.getElementById("addRow").onclick = function(){

                        rowCount++;

                        let row = `
                        <tr>
                        <td>${rowCount}</td>

                        <td>
                        <select class="form-select">
                        <option value="">Select</option>
                        <option>Vegetables</option>
                        <option>Fruits</option>
                        <option>Groceries</option>
                        </select>
                        </td>

                        <td>
                        <select class="form-select">
                        <option value="">Select</option>
                        <option>Capsicum</option>
                        <option>Tomato</option>
                        <option>Potato</option>
                        </select>
                        </td>

                        <td><input class="form-control"></td>

                        <td><input type="number" class="form-control rate"></td>
                        <td><input class="form-control"></td>

                        <td>
                        <select class="form-select">
                        <option value="">Select</option>
                        <option>Kgs</option>
                        <option>Nos</option>
                        <option>Box</option>
                        </select>
                        </td>

                        <td>
                        <select class="form-select gst">
                        <option value="">Select</option>
                        <option value="0">0%</option>
                        <option value="5">5%</option>
                        <option value="12">12%</option>
                        <option value="18">18%</option>
                        <option value="28">28%</option>
                        </select>
                        </td>

                        <td><input type="number" class="form-control qty"></td>

                        <td><input class="form-control taxable" readonly></td>
                        <td><input class="form-control gstamt" readonly></td>
                        <td><input class="form-control totalamt" readonly></td>

                        <td><input class="form-control"></td>
                        <td><input class="form-control"></td>

                        <td><button class="btn btn-sm btn-danger rowDelete">X</button></td>
                        </tr>
                        `;

                        document.getElementById("itemBody").insertAdjacentHTML("beforeend",row);
                        };

                        // Delete Last
                        document.getElementById("deleteRow").onclick = function(){
                        let table = document.getElementById("itemBody");
                        if(table.rows.length>1){
                        table.deleteRow(table.rows.length-1);
                        rowCount--;
                        calculateTotals();
                        }
                        };

                        // Delete Row
                        document.addEventListener("click",function(e){
                        if(e.target.classList.contains("rowDelete")){
                        e.target.closest("tr").remove();
                        calculateTotals();
                        }
                        });

                        // Auto Calculation
                        document.addEventListener("input",function(e){

                        if(e.target.classList.contains("rate") ||
                        e.target.classList.contains("qty") ||
                        e.target.classList.contains("gst")){

                        let row=e.target.closest("tr");

                        let rate=parseFloat(row.querySelector(".rate").value)||0;
                        let qty=parseFloat(row.querySelector(".qty").value)||0;
                        let gst=parseFloat(row.querySelector(".gst").value)||0;

                        let taxable=rate*qty;
                        let gstamt=taxable*gst/100;
                        let total=taxable+gstamt;

                        row.querySelector(".taxable").value=taxable.toFixed(2);
                        row.querySelector(".gstamt").value=gstamt.toFixed(2);
                        row.querySelector(".totalamt").value=total.toFixed(2);

                        calculateTotals();
                        }
                        });

                        // Totals
                        function calculateTotals(){
                        let tq=0,tt=0,tg=0,inv=0;

                        document.querySelectorAll("#itemBody tr").forEach(row=>{
                        tq+=parseFloat(row.querySelector(".qty").value)||0;
                        tt+=parseFloat(row.querySelector(".taxable").value)||0;
                        tg+=parseFloat(row.querySelector(".gstamt").value)||0;
                        inv+=parseFloat(row.querySelector(".totalamt").value)||0;
                        });

                        document.getElementById("totalQty").value=tq;
                        document.getElementById("totalTaxable").value=tt.toFixed(2);
                        document.getElementById("totalGST").value=tg.toFixed(2);
                        document.getElementById("invoiceAmt").value=inv.toFixed(2);
                        }
                    </script>
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
</script>



                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php')?>
</div>
</div>



</body>
</html>

