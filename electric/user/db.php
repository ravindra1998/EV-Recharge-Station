<?php
session_start();
$con=mysqli_connect("localhost","root","","electric"); 
if(isset($_POST['submit'])){
    $bankname=$_POST['bankname'];
    $area=$_POST['area'];
    $address=$_POST['address'];
    $locality=$_POST['locality'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $googlemap=$_POST['googlemap'];
    $mobile=$_POST['mobile'];
    $battery=$_POST['battery'];
    $totalslot=$_POST['totalslot'];
    $freeslot=$_POST['freeslot'];

    $query="insert into booking(bankname,area,address,locality,city,pincode,googlemap,mobile,battery,totalslot,freeslot)values('$bankname','$area','$address','$locality','$city','$pincode','$googlemap','$mobile','$battery','$totalslot','$freeslot')";
            mysqli_query($con,$query);
         echo "Success";
}
?>
<?php
$con=mysqli_connect("localhost","root","","electric"); 
if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $feedback=$_POST['feedback'];
    $query="insert into feedback(name,email,phone,feedback)values('$name','$email','$phone','$feedback')";
    mysqli_query($con,$query);
    echo "Success";

}
?>
