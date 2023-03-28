<?php include('../header.php');
?>
<?php
require_once ('db.php');
$sql = "SELECT * FROM `booking` WHERE 1";

//echo "$sql";
$result = mysqli_query($con, $sql);
if(isset($_POST['update']))
{
    
    $bankname = mysqli_real_escape_string($con, $_POST['bankname']);
    $totalslot = mysqli_real_escape_string($con, $_POST['totalslot']);
    $freeslot = mysqli_real_escape_string($con, $_POST['freeslot']);
    $area = mysqli_real_escape_string($con, $_POST['area']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $locality = mysqli_real_escape_string($con, $_POST['locality']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
    $googlemap = mysqli_real_escape_string($con, $_POST['googlemap']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $battery = mysqli_real_escape_string($con, $_POST['battery']);
    $id=mysqli_real_escape_string($con, $_POST['id']);
    
$result = mysqli_query($con, "UPDATE `booking` SET `bankname`='$bankname',`totalslot`='$totalslot',`freeslot`='$freeslot',`area`='$area',`address`='$address',`locality`='$locality',`city`='$city',`pincode`='$pincode',`googlemap`='$googlemap',`mobile`='$mobile',`battery`='$battery' where id='$id' ");
echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Succesfully Updated')
window.location.href='updatebunk.php';
</SCRIPT>");
}
?>

<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `booking` WHERE id=$id";
	$result = mysqli_query($con, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$bankname = $res['bankname'];
	$totalslot = $res['totalslot'];
	$freeslot = $res['freeslot'];
	$area = $res['area'];
	$address = $res['address'];
	$locality = $res['locality'];
	$city = $res['city'];
	$pincode = $res['pincode'];
  $googlemap = $res['googlemap'];
	$mobile = $res['mobile'];
  $battery = $res['battery'];
	
}
}

?>
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Employee Info</h2>
                    <form id = "createbunk" action="edit.php" method="POST">
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
                <input type="text" class="form-control form-control-lg"  value="<?php echo $bankname;?>" name= "bankname" />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">totalslot</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg"  value="<?php echo $totalslot;?>" name= "totalslot" />
             </div>
              <div class="col-md-6 pe-3">
                <input hidden type="text" class="form-control form-control-lg"  value="<?php echo $id;?>" name= "id" />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Free Slot</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg"  value="<?php echo $freeslot;?>" name= "freeslot" />
             </div>
            </div>
 <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Area</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg" value="<?php echo $area;?>" name= "area" />
             </div>
            </div>
 <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Address</h6>
            </div>
              <div class="col-md-6 pe-3">
                <input type="text" class="form-control form-control-lg" placeholder="xxxx" value="<?php echo $address;?>" name= "address"  />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Locality</h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg"  value="<?php echo $locality;?>" name= "locality"  />
             </div>
            </div>
			<div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">City </h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg" value="<?php echo $city;?>" name= "city" />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">pincode</h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg" value="<?php echo $pincode;?>" name= "pincode"  />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Google Map </h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg" value="<?php echo $googlemap;?>" name= "googlemap" />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Mobile </h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg" value="<?php echo $mobile;?>" name= "mobile"  />
             </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5"> 
                <h6 style="color:red;" class="mb-0">Available Battery </h6>
            </div>
              <div class="col-md-5 pe-2">
                <input type="text" class="form-control form-control-lg" value="<?php echo $battery;?>" name= "battery" />
            </div>
            <div class="row align-items-center pt-4 pb-3">
            <div class="col-md-5 pe-2">
            <div style="text-align:center;"><input type="submit"  name="update" value="submit"></div>
            </div>
        </div>
</div>

