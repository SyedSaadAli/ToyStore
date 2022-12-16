
<?php 
include('CheckLogin.php');
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
           <img src="images/professor.jpg" alt="">
           <button type="submit" value="Log Out" class="logout">Log Out</button>
           <div class="btn first"><a href="index.php">View Student Record</a></div>
            <div class="btn"><a href="add.php">Add Student Record</a></div>
      
        </div>
        <?php
if(isset($_POST['edit_btn']))
{
 $edit_id = $_POST['edit_id'];

 $query = "SELECT * FROM marks WHERE Marks_ID='$edit_id' ";
    $query_run = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($query_run);

        ?>
        <div class="mainbar">
       <form action="code.php" method="POST">
       <h1 style= "text-align:centre;">Edit Student Grade</h1>

        <input type="text" value="<?php  echo $row['Student_ID']; ?>" placeholder = "Enter Student ID" name = "edit_sid">
        <input type="text" value="<?php  echo $row['Quiz_Marks']; ?>" placeholder = "Enter Quiz Marks" name = "edit_quizm">
        <input type="text" value="<?php  echo $row['Assignment_Marks']; ?>" placeholder = "Enter Assignment Marks" name = "edit_assignm">
        <input type="text" value="<?php  echo $row['Mid_Term_Marks']; ?>" placeholder = "Enter Mid Term Marks" name = "edit_midm">
        <input type="text" value="<?php  echo $row['Final_Marks']; ?>" placeholder = "Enter Final Marks" name = "edit_finalm">
        <button type = "submit" name="update_btn" value = "update" class = "edit">Update</button>
       </form>
        </div>
    </div>
<?php } ?>
</body>
</html>