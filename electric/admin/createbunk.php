<?php include('../header.php');
?>
 <div class="container mt-4">
    <h3 style="color:blue;"> Add Bunk :</h3>
    <hr>
    <form action = "db.php" method = "POST" >

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
                <h6 style="color:red;" class="mb-0">totalslot</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg"  value="" name= "totalslot" />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Free Slot</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg"  value="" name= "freeslot"  />
             </div>
            </div>
 <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Area</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg" value="" name= "area" required/>
             </div>
            </div>
 <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Address</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg" placeholder="xxxx" value="" name= "address" />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Locality</h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg"  value="" name= "locality" required />
             </div>
            </div>
			<div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">City </h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg" value="" name= "city" required />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">pincode</h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg" value="" name= "pincode" required />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Google Map </h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg" value="" name= "googlemap" required />
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
                <h6 style="color:red;" class="mb-0">Available Battery </h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg" value="" name= "battery" required />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
            <div class="col-md-5 pe-2">
            <div style="text-align:center;"><input type="submit"  name="submit" value="submit">
            <a href="index.php">Logout</a>
          </div>
            </div>
        </div>
</div>