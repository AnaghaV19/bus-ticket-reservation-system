<?php
require "dbconfig/config.php";
include "header.php";
//error_reporting(0);
//$t='';
if(isset($_GET['t'])){
$busid=$_GET['t'];
//echo 't';
        $query5="DELETE FROM busdetails WHERE busid='$busid'";
        //$query_run1 = mysqli_query($con,$query1);
    
    //if($query_run1)
    if($con->query($query5)===TRUE)
    {
            echo '<script type ="text/javascript"> alert("Bus details deleted successfuly ....") </script>';
            header('location:viewbus.php');
    }
   else
   { 
    echo '<script type ="text/javascript"> alert("Bus details  not deleted successfuly ....") </script>';
   }
}

    ?>
            