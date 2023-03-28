<?php include('db.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Electric</title>
  </head>
  <body>
  <div class="col-lg-12 grid-margin stretch-card">
  <a href="index.php">Logout</a>
  <div class="container mt-4">
    <h3 style="color:blue;"> Ev Recharge Bunk :</h3>
    <hr>
</div>
</div>
<div class="main-panel">
         <div class="content-wrapper">
           <div class="page-header">
             <h3 class="page-title">Nearest Charging Station</h3>
           </div>
           <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <table class="table">
                     <thead>
                       <tr>
                       <th>Bank Name</th>
                         <th>Total Slot</th>
                         <th>Free Slot</th>
                         <th>Available Battery</th>
                         <th>Address</th>
                         <th>Locality</th>
                         <th>City</th>
                         <th>Pin Code</th>
                         <th>Google Map</th>
                         <th>Mobile Number</th>
                         <th>status</th>
                       </tr>
                       
                       <?php
     
      $rows = mysqli_query($con, "SELECT * FROM booking ORDER BY id DESC")
      ?>
<?php
    // LOOP TILL END OF DATA
    while($row=$rows->fetch_assoc())
    {
        ?>
     <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                   
                <td><?php echo $row['bankname'];?></td>
                <td><?php echo $row['totalslot'];?></td>
                <td><?php echo $row['freeslot'];?></td>
                <td><?php echo $row['battery'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['locality'];?></td>
                <td><?php echo $row['city'];?></td>
                <td><?php echo $row['pincode'];?></td>
                <td><?php echo $row['googlemap'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><a href="book.php">BookNow</td>
            </tr>
            <?php
                }
            ?>
                     </thead>
</body>
                     </html