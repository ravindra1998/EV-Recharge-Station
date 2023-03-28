<?php include('../header.php');
?>
<?php include('../user/data.php');
?>
<div class="main-panel">
         <div class="content-wrapper">
           <div class="page-header">
             <h3 class="page-title">Booking Bunk Details</h3>
             <a href="index.php">Logout</a>
           </div>
           <div class="row">
             <div class="col-lg-12 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <table class="table">
                     <thead>
                       <tr>
                         <th>Bunk Name</th>
                         <th>Date</th>
                         <th>city</th>
                         <th>Area</th>
                         <th>Address</th>
                         <th>Status</th>
                       </tr>
                       <?php
                       $rows = mysqli_query($con, "SELECT * FROM business ORDER BY id DESC")
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
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['city'];?></td>
                <td><?php echo $row['area'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['status'];?></td>
            </tr>
            <?php
                }
            ?>
                     </thead>