<?php

    $con = mysqli_connect("127.0.0.1:3307","root","") or die ("Unable to connect");
    mysqli_select_db($con,"agbus");
    if(!$con){
        die("Sorry failed to connect".mysqli_connect_error());

    }
    else{
        //echo"Successfully connected";
    }
?>