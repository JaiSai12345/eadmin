

<?php include('configure.php');?>
<?php include('header.php');?>

<div class="main-content">
   <div class="page-content">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-3">
                            <span class="card-title mb-0"><b>Invoice Details</b></span>
                            
                        </div>
                        <!-- end card header -->
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3 text-center">
                                    <label class="form-label ">Customer Name<span class="mandatory-color text-danger \">*</span></label>
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option>Sam Boys Hostel</option>
                                            <option> John High Schooh</option>
                                            <option>Ravish Food</option>
                                        </select>
                                </div>
                                <div class="col-md-3 text-center">
                                    <label>Contact No<span class="mandatory-color text-danger">*</span></label>
                                    <input class="form-control text-center" readonly type="text" >
                                </div>
                                <div class="col-md-6  text-center">
                                    <label class="form-label ">Address<span class="text-danger">*</span></label>
                                    <textarea class="form-control" type="text" name="address" id="address" autocomplete="off" style="height: 25px;"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3 text-center">
                                  
                                        <label>State<span class="mandatory-color text-danger">*</span></label>
                                            <select class="form-select  text-left">
                                 
                                 <option value="Karnataka">Karnataka</option>
                                 <option value="Maharashtra">Maharashtra</option>
                                 <option value="Tamilnadu">Tamilnadu</option>
                                 <option value="Delhi">Delhi</option>
                              </select>
                                    
                                </div>
                                <div class="col-md-3 text-center ">
                                    
                                    <label>GST No</label>
                                    <input class="form-control text-center" type="text" name="gst_no" id="gst_no" autocomplete="off" style="text-transform: uppercase;">
                                
                                </div> 
                            </div>  
                           
                            <div class="row mb-3">
                                <div class="col-md-6  text-center">
                                    <label class="form-label ">Delivery Address<span class="text-danger">*</span></label>
                                    <textarea class="form-control" type="text" name="address" id="address" autocomplete="off" style="height: 25px;"></textarea>
                                </div>

                                <div class="col-md-3 text-center" >
                                    <label>Delivery State<span class="mandatory-color text-danger">*</span></label>
                                     <select class="form-select  text-left">
                                 
                                 <option value="Karnataka">Karnataka</option>
                                 <option value="Maharashtra">Maharashtra</option>
                                 <option value="Tamilnadu">Tamilnadu</option>
                                 <option value="Delhi">Delhi</option>
                              </select>

                                </div>

                                <div class="col-md-3 text-center">
                                    <label>Bill Date <span class="mandatory-color text-danger">*</span></label>
                                     <input type="text" class="form-control" id="datepicker-basic" readonly="readonly" placeholder="dd/mm/yyyy"  style="background-color: #e9ecef">
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
                                <table class="table table-bordered text-center" style="table-layout: fixed;">
                                    <thead style=" background:#f8f9fa;font-size:14px;}">
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
                                <button id="addRow" class="btn btn-primary btn-sm waves-effect waves-light">+ Add More</button>
                                <button id="deleteRow" class="btn btn-danger btn-sm waves-effect waves-light">- Delete Last</button>
                            </div>
                            <br>
                            <!-- Totals -->
                            <div class="row g-3 text-center">
                                <div class="col-md-3">
                                    <label>Total Qty<span class="mandatory-color text-danger">*</span></label>
                                    <input id="totalQty" class="form-control" value="0">
                                </div>

                                <div class="col-md-3">
                                    <label>Total Taxable<span class="mandatory-color text-danger">*</span></label>
                                    <input id="totalTaxable" class="form-control" value="0">
                                </div>

                                <div class="col-md-3">
                                    <label>Total GST <span class="mandatory-color text-danger">*</span></label>
                                    <input id="totalGST" class="form-control" value="0">
                                </div>

                                <div class="col-md-3">
                                    <label>Total Bill Amt <span class="mandatory-color text-danger">*</span></label>
                                    <input id="invoiceAmt" class="form-control" value="0">
                                </div>
                            </div>

                            <div class="text-end mt-3">
                                <button class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
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
                    




                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php')?>
</div>
</div>
<?php include('links.php')?>
<script>
    

                flatpickr("#datepicker-basic", {
                    dateFormat: "d/m/Y"
                });

                flatpickr("#datepicker-basic", {
                    dateFormat: "d/m/Y"
                });


</script>


</body>
</html>

