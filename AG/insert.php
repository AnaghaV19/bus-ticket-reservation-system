<?php
    require "dbconfig/config.php";
    include "header.php";

        if(isset($_POST['insert_btn']))
        {
               // echo '<script type ="text/javascript"> alert("Sign up button clicked") </script>';
              $busid = mysqli_real_escape_string($con, $_REQUEST['busid']);
              $busno = mysqli_real_escape_string($con, $_REQUEST['busno']);
              $busname = mysqli_real_escape_string($con, $_REQUEST['busname']);
              $bustype = mysqli_real_escape_string($con, $_REQUEST['bustype']);
              $source = mysqli_real_escape_string($con, $_REQUEST['source']);
              $destination = mysqli_real_escape_string($con, $_REQUEST['destination']);
              $depttime = mysqli_real_escape_string($con, $_REQUEST['depttime']);
              $arrivaltime = mysqli_real_escape_string($con, $_REQUEST['arrivaltime']);
              
              $journeydate = mysqli_real_escape_string($con, $_REQUEST['journeydate']);
              $busfare = mysqli_real_escape_string($con, $_REQUEST['busfare']);
              $totalseats  = mysqli_real_escape_string($con, $_REQUEST['totalseats']);
              $availableseats = mysqli_real_escape_string($con, $_REQUEST['availableseats']);
                             
                
                    $query="INSERT INTO busdetails ( busid , busno , busname , bustype, source , destination , depttime , arrivaltime ,  journeydate , busfare , totalseats , availableseats ,adminid )  VALUES ( '$busid' , '$busno' ,'$busname' ,'$bustype' , '$source' , '$destination' , '$depttime' , '$arrivaltime' , '$journeydate' , '$busfare' , '$totalseats' , '$availableseats',1 );";
                    $query_run =mysqli_query($con,$query);
                    if($query_run==TRUE)
                    {
                            echo '<script type ="text/javascript"> alert("Bus details added successfuly ....") </script>';
                            header('location:busmodify.php');

                        }
                   else
                   { 
                    echo '<script type ="text/javascript"> alert("Bus details  not added successfuly ....") </script>';
                   }
                   
                    
                
                
            }
?>        