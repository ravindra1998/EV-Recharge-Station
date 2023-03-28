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
    $mobilenumber=$_POST['mobilenumber'];
    $battery=$_POST['battery'];
    $totalslot=$_POST['totalslot'];
    $freeslot=$_POST['freeslot'];

    $query="insert into booking(bankname,area,address,locality,city,pincode,googlemap,mobilenumber,battery,totalslot,freeslot)values('$bankname','$area','$address','$locality','$city','$pincode','$googlemap','$mobilenumber','$battery','$totalslot','$freeslot')";
            mysqli_query($con,$query);
         echo "Success";
}
?>