<?php
session_start();
$con=mysqli_connect("localhost","root","","electric"); 
if(isset($_POST['submit'])){
    $bankname=$_POST['bankname'];
    $date=$_POST['date'];
    $city=$_POST['city'];
    $area=$_POST['area'];
    $mobilenumber=$_POST['mobilenumber'];
    $status=$_POST['status'];
    

    $query="insert into business(bankname,date,city,area,mobilenumber,status)values('$bankname','$date','$city','$area','$mobilenumber','$status')";
            mysqli_query($con,$query);
         echo "Success";
}
?>

