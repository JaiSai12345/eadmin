
<?php include('header.php');?>
<?php include('leftsidebar.php');?>
<?php include('header1.php');?>

<div class="main-content ">
    <div class="content">
        <div class="container-fluid py-2">
            <div class=" w-100 justify-content-center pb-5" >
                <div style="border-bottom:2px solid #888f9d;;">
                    <div class=" d-flex justify-content-between m-3" >
                        <div>
                            <h2 class="fs-4">State</h2>
                        </div>
                        <div>
                            <a href="state.php">
                                <button class="btn btn-primary"><i class="bx bxs-left-arrow-circle  me-1"></i> Back</button>
                            </a>
                        </div>
                    </div>
                </div>

    <!-- Card -->
    <div class="card shadow-sm mt-3">
        <div class="card-header fs-5" style=" background:#f1f3f5; font-weight:500;">
          <i class="fas fa-table"></i> Add New State
        </div>

        <div class="card-body  mx-5 ">
        <div class="row">
            <div class="col text-center">
            <label class="fs-5">State Name<span class="mandatory-color text-danger">*</span></label><br>
            <input type="text">
        </div><br><br><br><br>

         <div class="d-flex justify-content-center">
           <button class="btn btn-primary ">Add</button>
          </div>
         
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php include('footer.php');?>
<?php include('rightsidebar.php');?>

</body>
</html>
