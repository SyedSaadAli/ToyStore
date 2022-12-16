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
      
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
        <img src="images/toy.jpg" alt="">
      <a href="logout.php"> <button type="submit" value="Log Out" class="logout">Log Out</button></a> 
        <div class="btn first"><a href="index.php">View Toys Record</a></div>
        <div class="btn"><a href="add.php">Add Toys Record</a></div>
      
        </div>
        <div class="mainbar">
            
        <table border="1" class='content'> 
            <tr>
           
                <th>TID</th>
                <th>Toy Name</th>
                <th>Toy Description</th>
                <th>Toy Price</th>
                <th>Delete</th>
            </tr>
            <?php
             
             $query = "SELECT * FROM ntl_toys";
        $query_run = mysqli_query($db, $query);
   
     if(mysqli_num_rows($query_run) > 0){
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
            <tr>
                
                <td><?php  echo $row['toyID']; ?></td>
                <td><?php  echo $row['toyName']; ?></td>
                <td><?php  echo $row['description']; ?></td>
                <td><?php  echo $row['toyPrice']; ?></td>
               
                 <form action="code.php" method="POST">
                    <input type="hidden" name="toyID" value="<?php echo $row['toyID']; ?>">
                <td><button type="submit" name="delete_btn" class = "delete">Delete</button></td>
                   </form>
            </tr>
        <?php  }} ?>
          
        </div>
     
    </div>
</body>
</html>