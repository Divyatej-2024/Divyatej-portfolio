<?php
include("connection.php");
if(isset($_GET['deleteid']))
{
    $deleteid=$_GET['deleteid'];
   $dlt="DELETE FROM adct where act_id='$deleteid'";
    $run_delete=mysqli_query($conn,$dlt);
    if($run_delete===true)
    {
        header ("location:homepage.php?page=buynow");
        echo "Record has been deleted";
    }
    else{
        echo "Failed,You can try again";
    }
}
?>