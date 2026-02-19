<?php include('configure.php');?>
<?php include('header.php');?>

<!-- If page is null this content has to be displayed -->
<?php if($_GET['mode']==''){ ?>
<!-- MAIN CONTENT START -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        <!-- SEARCH CARD -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    
                    <div class="card-header d-flex justify-content-between align-items-center ">
                    <span class="card-title mb-0"><b>Stock Update </b></span>
                        <!-- <a href="stocks.php">
                            <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                        </a> -->
                    </div>
                    

                    <div class="card-body">
                    <!-- FORM CONNECTED TO VIEW PAGE -->
                    

                        <div class="row justify-content-center align-items-end">
                            <!-- SUPPLIER -->
                            <div class="col-md-3 ">
                                <label for="choices-single-default" class="form-label text-center w-100">Category Name<span class="mandatory-color text-danger">*</span></label>
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" placeholder="This">
                                        <option value="Choice 1">All</option>
                                        <option value="Choice 2">Fruits</option>
                                        <option value="Choice 3">Vegetables</option>
                                    </select>
                                        
                            </div>

                            <div class="col-md-3">
                                <label class="form-label text-center w-100">
                                    On Stock Lesser Than <span class="text-danger">*</span>
                                </label>
                                <input type="number" class="form-control text-center" value="100">
                            </div>
                        </div>
                            <!--  BUTTON -->
                            <div class="d-flex justify-content-end mt-3">
                                <a href="stock-update.php?mode=view_list">
                                    <button  name="view_inward" class="btn btn-primary waves-effect waves-light">Search</button>
                                </a>
                            </div>

                        

                
                    </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- MAIN CONTENT END -->






<!--if mode = view_list then this code will be displayed-->
<?php } else if($_GET['mode'] == 'view_list'){ ?>


<!-- MAIN CONTENT START -->
<div class="main-content">
    <!-- PAGE CONTENT START -->
    <div class="page-content">
        <!-- CONTAINER-FLUID START -->
        <div class="container-fluid">
            <!-- ROW START -->
            <div class="row" >
                <div class="col-lg-12">
                    <!-- CARD START -->
                    <div class="card">
                        <!-- CARD HEADER START -->
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="card-title mb-0"><b>Stock Update</b>- Items List</span>
                            <a href="stock-update.php">
                                <button class="btn btn-outline-primary btn-sm waves-effect waves-light"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                            </a>
                        </div>
                    <!-- CARD HEADER END -->

                    <!-- CARD BODY START -->
                    <div class="card-body">
                        <div id="table-search-count"></div>
                        <!--selector and searchbar is located in custom.js-->
                            <div class="table-responsive" style="height: auto;">
                                <table class="table table-bordered align-middle" style="height: auto; ">
                                    <thead>
                                    <tr >
                                        <th>
                                        S.No.
                                        <!-- <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button> -->
                                        </th>
                                        <th>Icode</th>
                                        <th>Category</th>
                                        <th>Item Name</th>
                                        <th>HSN NO.</th>
                                        <th>Unit</th>
                                        <th>Rate</th>
                                        <th>SRate</th>
                                        <th>Status</th>
                                        <th>Stock</th>
                                        <th>Update Stock</th>
                                    </tr>
                                </thead>
                                <tbody  id="tableBody">
                                    <tr>
                                        <td>1</td>
                                        <td>S001</td>
                                        <td>111</td>
                                        <td>men'swear</td>
                                        <td>46752</td>
                                        <td>1</td>
                                        <td>40</td>
                                        <td>689</td>
                                        <td ><span class="badge bg-success ">Active</span></td>
                                        <td id="stock-1">20</td>
                                        <td>
                                            <input type="number" id="update-1" class="form-control form-control-sm">
                                        </td>
                                    </tr>
                                
                                </tbody>
                            </table>
                            </div>
                        <!-- PAGE FOOTER-->
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <small id="tableInfo"></small>
                            <!-- <nav>
                            <ul class="pagination pagination-sm mb-0" id="pagination"></ul>
                            </nav> -->
                        </div>
                        <div class="text-end mt-3 text-center">
                            <button class="btn btn-primary" onclick="updateAllStocks()">Update Stock</button>
                        </div>
                        <!-- PAGE FOOTER-->
                        </div>
                    <!-- CARD BODY END -->
                    </div>
                <!-- CARD END -->
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


<!-- else if mode= view_details then this will be displayed -->
<!-- <?php } else if($_GET['mode'] == 'view_details'){ ?>
<?php } ?> -->
</div>


<!-- LAYOUT WRAPPER END -->
<?php include('links.php'); ?>

<script src="assets/js/custom.js"></script> 

<script>
function updateAllStocks() {

    // Get stock cells and input fields
    const stockCells = document.querySelectorAll("[id^='stock-']");
    const updateInputs = document.querySelectorAll("[id^='update-']");

    let updated = false;

    stockCells.forEach((stockCell, index) => {

        const input = updateInputs[index];
        const newStock = parseInt(input.value);

        // Only update if value entered
        if (!isNaN(newStock) && newStock >= 0) {

            //       Replace old stock with new stock
            stockCell.innerText = newStock;

            // Clear input
            input.value = "";

            updated = true;
        }
    });

    if (updated) {
        alert("Stock updated successfully!");
    } else {
        alert("Please enter stock value to update!");
    }

    

}
</script>
</body>
</html>
