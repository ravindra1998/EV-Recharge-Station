<?php include('../header.php')
?>
<div class="container mt-4">
    <h3 style="color:blue;"> Book Bunk :</h3>
    <hr>
    <form action = "data.php" method = "POST" >

  <div class="container h-200">
    <div class="row d-flex justify-content-center align-items-center h-200">
    <div class="col-xl-9">
      <div class="card" style="border-radius: 15px;">
          <div class="card-body">
<div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Bank Name</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg"  value="" name= "bankname" required />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">date</h6>
            </div>
              <div class="col-md-6 pe-3">
              <input type="datetime-local" id="birthday" name="date">
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">city</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg"  value="" name= "city"  />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">area</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg"  value="" name= "area"  />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">MobileNumber </h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg" placeholder="7568xxxxxx" value="" name= "mobilenumber" required />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">status</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg"  value="" name= "status"  />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
            <div class="col-md-5 pe-2">
            <div style="text-align:center;"><input type="submit"  name="submit" value="submit"></div>
            </div>
        </div>
</div>
           