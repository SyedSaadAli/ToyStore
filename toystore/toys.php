<?php 
include('security.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="./images/POKEMON_PIKACHU_OK.png" type="image/x-icon">
    <title>HOME-1</title>
    <style>
      .catform select{
        padding:10px 100px;
        background-color: white;
        color: black;
       
      }
      .catform{
        position: relative;
        left:20%;
        margin-top:10%;
      
      }
    </style>
  </head>
  <body>

    <!-- header-background image with overlay-text -->
    <section class="container">
      <div class="home-1-bg"></div>
      <div class="overlay"></div>

      <div class="navbar-text">
        <div class="navbar">
          <div class="logo-admin">
            <img src="./images/Logo.png" height="100px" width="200px" alt="" />
          </div>

          <div class="center-elements">
            <a href="index.php">Home</a>
            <a href="toys.php">View Toys</a>
            <a href="credits.php">Credits</a>
          </div>

          <div class="logo-admin">
            <a href="admin/">Admin</a>
          </div>
        </div>

        <div class="main-center">
          <div class="submain-center">
            <p class="p-gallery">TOYS GALLERY</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CARDS -->
    <section>


   <!--Form Category Selection-->
    
   <form action="toys.php" method='post' class="catform">
     <h1>Select Category</h1> <br>
     <select name="Category" id="">
       <?php 
       $query1 = "SELECT * FROM ntl_category";
       $query_run1 = mysqli_query($connection, $query1);
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
     <button type='submit' name=toy_cat style="padding: 10px 20px; background-color: green;border-radius: 5px;color: white;">Search</button>
   </form>
   <!--Form Code Ends-->
      <div class="cards">
        <!-- --------card-------------- -->
        <?php 
      if(isset($_POST['toy_cat']))
      {
        $Category = $_POST['Category'];
        $query = "SELECT * FROM ntl_toys WHERE catID = '$Category' ";
        $query_run = mysqli_query($connection, $query);
        if(mysqli_num_rows($query_run) > 0)        
        {
          while($row = mysqli_fetch_assoc($query_run))
          {
        ?>
        <div class="card">
          <div class="card-img">
            <img
              src="./images/POKEMON_PIKACHU_OK.png"
              style="margin-right: 30px"
            />
          </div>
          <div class="card-text">
            <h4><?php  echo $row['toyName']; ?></h4>
          </div>
          <div class="discription" >
            <p ><?php  echo $row['description']; ?></p>        </div>
          <div class="card-pricing">
            <h4><?php  echo $row['toyPrice']; ?> AED</h4>
          </div>
        </div>
 <?php 
 
          }}}
 ?>
     
    </section>

    <!-- footer -->
    <section class="footer">
      <div class="copyrights">The Toys 2022 All rights Reserved</div>
    </section>
  </body>
</html>
