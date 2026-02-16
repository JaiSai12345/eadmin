
<?php include('header.php');?>

<!-- MAIN CONTENT START -->
<div class="main-content ">
    <!-- PAGE CONTENT START -->
    <div class="page-content">
        <!-- CONTAINER-FLUID START -->
        <div class="container-fluid py-2">
            <div class=" w-100 justify-content-center pb-5">
                <div class=" d-flex justify-content-between m-3" >
                    <div>
                        <h4>State</h4>
                    </div>
                    <div>
                        <a href="state.php">
                            <button class="btn btn-primary"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                        </a>
                    </div>
                </div>
                    
                <!-- CARD START -->    
                <div class="card shadow-sm mt-3">
                    <!-- CARD HEADER START --> 
                    <div class="card-header " >
                        <i class="fas fa-table"></i>  Update State
                    </div>
                    <!-- CARD HEADER END --> 

                    <!-- CARD BODY START --> 
                    <div class="card-body  mx-5 ">
                        <div class="row">
                            <div class="col text-center">
                                <label >State Name<span class="mandatory-color text-danger">*</span></label><br>
                                <input type="text">
                            </div>
                            <div class="col text-center">
                                <label >Default<span class="mandatory-color text-danger">*</span></label><br>
                                <input type="radio" name="yes" value="yes"> Yes&emsp;
                                <input type="radio"name="yes" value="no"> No
                            </div>
                            <div class="col text-center">
                                <label >Status<span class="mandatory-color text-danger">*</span></label><br>
                                <input type="radio" name="status" value="active"> Active&emsp;
                                <input type="radio"name="status" value="inactive"> Inactive
                            </div>
                        </div><br>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary ">Update</button>
                        </div>
                    </div>
                    <!-- CARD BODY END --> 
                </div>
                <!-- CARD END -->   
            </div>
        </div>
        <!-- CONTAINER-FLUID END -->
    </div>
    <!-- PAAGE CONTENT END -->

<?php include('footer.php');?>
</div>
<!-- MAIN CONTENT END -->
</div>
<!-- LAYOUT WRAPPER END -->
<?php include('links.php');?>

</body>
</html>
