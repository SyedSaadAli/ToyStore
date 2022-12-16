<?php include('dbconfig.php'); 

if(isset($_POST['insert_btn']))
{

 $T_Name = $_POST['T_Name'];
 $T_Description = $_POST['T_Description'];
 $T_Price = $_POST['T_Price'];
 $Category = $_POST['Category'];
 $Manufacturer = $_POST['Manufacturer'];




    $query = "INSERT INTO ntl_toys (toyName,description,manID,catID,toyPrice) VALUES 
    ('$T_Name','$T_Description','$Manufacturer','$Category','$T_Price')";
    $query_run = mysqli_query($db, $query);


    if($query_run)
    {
       
        header('Location: index.php'); 
    }
    else
    {
   
        header('Location: index.php');  
    }

}



//--------------------------------------------------------------------------------------------------------------------------



if(isset($_POST['delete_btn']))
{
    $id = $_POST['toyID'];

    $query = "DELETE FROM ntl_toys WHERE toyID='$id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
     
        header('Location: index.php'); 
    }
    else
    {
        
        header('Location: index.php'); 
    }    
}

?>