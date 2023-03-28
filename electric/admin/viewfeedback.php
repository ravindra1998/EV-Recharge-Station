<?php include('../user/db.php');
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
  <div class="container mt-4">
    <h3 style="color:blue;"> Ev Recharge Bunk :</h3>
    <a href="index.php">Logout</a>
    <hr>
    
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
                       <th> Name</th>
                         <th>mobile</th>
                         <th>email</th>
                         <th>feedback</th>
                       </tr>
                     <?php
                       $rows = mysqli_query($con, "SELECT * FROM feedback ORDER BY id DESC")
      ?>
<?php
    // LOOP TILL END OF DATA
    while($row=$rows->fetch_assoc())
    {
        ?>
     <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                   
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['feedback'];?></td>
            </tr>
            <?php
                }
            ?>
                     </thead>
</body>
                     </html