<?php
 include('dbconfig.php'); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor 
    </title>
    <link rel="stylesheet" href="style.css">
    <style>
        .logout {
         margin-left:30%;
        }
        th,td{
            padding:10px 20px;
        }
       .edit{
           margin-left:35%;
       }

    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
           <img src="images/toy.jpg" alt="">
           <button type="submit" value="Log Out" class="logout">Log Out</button>
           <div class="btn first"><a href="index.php">View Toys Record</a></div>
            <div class="btn"><a href="add.php">Add Toys Record</a></div>
      
        </div>

      
     
        <div class="mainbar">
       <form action="code.php" method="POST">
       <h1 style= "text-align:centre;">Add Toy</h1>

        <input type="text" placeholder = "Enter Toy Name" name = "T_Name">
        <input type="text" placeholder = "Enter Toy Description" name = "T_Description">
        <input type="text" placeholder = "Enter Toy Price" name = "T_Price">
        <select name="Category" id="">
        <?php 
       $query1 = "SELECT * FROM ntl_category";
       $query_run1 = mysqli_query($db, $query1);
       if(mysqli_num_rows($query_run1) > 0)        
       {
         while($row1 = mysqli_fetch_assoc($query_run1))
         {
       ?>
       <option value="<?php echo $row1['catID']; ?>"> <?php echo $row1['catID']; ?></option>
      <?php
         }}
         ?>
        </select>
        <select name="Manufacturer" id="">
        <?php 
       $query2 = "SELECT * FROM ntl_manufacturer";
       $query_run2 = mysqli_query($db, $query2);
       if(mysqli_num_rows($query_run2) > 0)        
       {
         while($row2 = mysqli_fetch_assoc($query_run2))
         {
       ?>
       <option value="<?php echo $row2['manID']; ?>"> <?php echo $row2['manID']; ?></option>
      <?php
         }}
         ?>
        </select>
        <button type = "submit" name="insert_btn" value = "insert" class = "edit">Insert</button>
       </form>
        </div>
    </div>
</body>
</html>