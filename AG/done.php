<?php
 require 'dbconfig/config.php';
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
                <a class="nav-link" href="">BOOK TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cancel.php">CANCEL TICKET</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="printtickets.php">PRINT TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userlogin.php">LOG OUT</a>
                </li>
             </ul>
          </div>
        </nav>
        <br>
<body>   
 <?php
 $grandtotal='';
session_start();
$tid = $_SESSION['tid'];
//echo "Your Transaction ID:";
//echo "$tid"."<br>";
$totalamount = $_SESSION['totalamount'];
//echo "Amount:";
//echo "$totalamount"."<br>";
$pnrno = $_SESSION['pnrno'];
//echo "Your PNR NO.: $pnrno"."<br>";

$mysql="INSERT INTO amount( pnrno , totalamount ) VALUES('$pnrno' , '$totalamount') ;";
$res=mysqli_query($con , $mysql);


//$mysql1="SELECT grandtotal FROM amount WHERE pnrno='$pnrno' AND totalamount='$totalamount';";
//$query_run1=mysqli_query($con ,$mysql1);
//echo "Grand Total: $grandtotal"."<br>";
//$mysql1="SELECT tid FROM card WHERE cardno='$cardno' ;";
//$////res1=mysqli_query($con , $mysql1);
//while ($row = $res1->fetch_assoc()) 
//{
  //  echo "tid:";
  //  echo $row['tid']."<br>";
  //  $tid = $row['tid'] ;
//}
//$_SESSION['tid']=$tid;
           



//$tid = $_SESSION['tid'];
//echo "tid : $tid";

//$sql="INSERT INTO id( tid , totalamount) VALUES( '$tid' , '$totalamount');";
////$result=mysqli_query($con ,$sql);
//if($result==TRUE)
//{
  // echo "done";
//}
//else
//{ 
// echo "no";
//}

$sql5="INSERT INTO transaction( pnrno , tid ) VALUES( '$pnrno' , '$tid' );";
$result5=mysqli_query($con ,$sql5);
echo"<b><center>RESERVATION HAS BEEN DONE SUCCESSFULLY</center></b>";
session_destroy();

?>
<center><img src="imgs/right.jpeg" width ="300" height="300"></center>   



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
</body>
   </html> 