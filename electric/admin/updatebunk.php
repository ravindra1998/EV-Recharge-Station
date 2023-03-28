<?php include('../header.php');
?>
<?php include('db.php');
?>
<div class="main-panel">
         <div class="content-wrapper">
           <div class="page-header">
             <h3 class="page-title">View Bunk Details</h3>
             <a href="index.php">Logout</a>
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
                         <th>Battery</th>
                         <th>Address</th>
                         <th>Locality</th>
                         <th>City</th>
                         <th>Pin Code</th>
                         <th>Google Map</th>
                         <th>Mobile Number</th>
                         <th>Status</th>
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
                <td><?php echo $row['mobilenumber'];?></td>
                <td><a href="edit.php?id=<?php echo $row['id']?>">edit <a href="delete.php?id=<?php echo $row['id']?>">delete</td>
                
            </tr>
            <?php
                }
            ?>
                     </thead>