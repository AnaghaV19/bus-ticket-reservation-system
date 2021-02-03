<?php
require "dbconfig/config.php";

?>
<!DOCTYPE html>
<html>
<head>
<title> Home Page</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body style ="background:linear-gradient(rgb(255,223,0,1),rgba(0, 181, 204,0.8) );">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       <center> <h1><b>A.G BUS LINES</b></h1>
        <h6><b> "Smiles of miles on your way"</b></h6></center>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">A G BUS LINES</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item ">
                <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="aboutus.php">ABOUT US</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contactus.php">CONTACT US</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="myprofile.php">MY PROFILE</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="mybooking.php">MY BOOKINGS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="">BOOK TICKET</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="cancel.php">CANCEL TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="printtickets.php">PRINT TICKET</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="changepassword.php">CHANGE PASSWORD</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userlogin.php">LOG OUT</a>
                </li>
                
                
             </ul>
          </div>
        </nav>
        <br>
        <br>
        <br>
    </body>
   </html> 
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background:linear-gradient(rgba(26,188,156,0.7),rgba(231,76,60,0.7));">

<form  method="post"> 
<div class="container3">

    <center>
            <label><b>PNR NO.:</label></br>
            <input name="pnrno" type="integer" class="inputvalues" placeholder="Enter PNR NO." required/><br>
            <label><b>REGISTRATION ID:</label></br>
            <input name="userid" type="integer" class="inputvalues" placeholder="Enter Registration ID" required/><br>
            <input name="cancel"type="submit" id="cancel_btn" value="CANCEL"/>
    </center>
    </div>
</form>
<?php
$pnrno='';
$userid='';

if (isset($_POST['pnrno']))
{
$pnrno=$_POST['pnrno'];
}

if (isset($_POST['userid']))
{
$userid=$_POST['userid'];
}
?>

<?php

$query="UPDATE reservation SET bookstatus = 'cancelled' WHERE pnrno = '$pnrno'";
$query_run = mysqli_query($con , $query);
if (!$query_run)
	{
        echo " ticket number doesn't exists";

}
else{
 
    try {
                            
        // execute the stored procedure
         $sql = "CALL `CANCELLATION`($userid,$pnrno);";
         $retval = mysqli_query($con,$sql);
         //echo "cancelled";
     }
     catch (conException $e) {

    die("Error occurred:" . $e->getMessage());
}

}
?>
<?php
                   $sq="SELECT busid,no_of_seats FROM reservation r WHERE r.pnrno='$pnrno' AND bookstatus='cancelled';";
                   $m=mysqli_query($con ,$sq);
                   while($rows=$m->fetch_assoc())
                   {
                       echo $rows['busid']."</br>";
                       $rbusid=$rows['busid'];
                       echo $rows['no_of_seats']."</br>";
                       $rseats=$rows['no_of_seats'];
                       $rs="UPDATE busdetails SET availableseats=availableseats+$rseats WHERE busid='$rbusid';";
                       $mr=mysqli_query($con ,$rs);
                       echo '<script type ="text/javascript"> alert("CANCELLED ") </script>';
                   }
?>
      
           
<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<!--a href="home.php">go</a>-->















