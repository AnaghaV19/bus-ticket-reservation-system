
<?php
require "dbconfig/config.php";
error_reporting(0);
session_start();

            $userid = $_SESSION['userid'];


?>
<!DOCTYPE html>
<html>
<head>
<center>
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
        <h6> "Smiles of miles on your way"</h6></center>
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
                <li class="nav-item ">
                <a class="nav-link" href="myprofile.php">MY PROFILE</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="mybooking.php">MY BOOKINGS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="booktickets.php">BOOK TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cancel.php">CANCEL TICKET</a>
                </li>
                <li class="nav-item ">
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
</body>






<body>
<h2> MY BOOKINGS </h2>
<?php echo "Registration ID is:";
            echo "$userid"."<br>";
            ?>
    </center>
<table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">PNR NO.</th>
      <th scope="col">BUSID</th>
      <th scope="col">BUS NO.</th>
      <th scope="col">BUS TYPE</th>
      <th scope="col">SOURCE</th>
      <th scope="col">DESTINATION</th>
      <th scope="col">DEPARTURE TIME</th>
      <th scope="col">ARRIVAL TIME</th>
      <th scope="col">JOURNEY DATE</th>
      <th scope="col">USER ID</th>
      <th scope="col">NO_OF_SEATS</th>
      <th scope="col">BOOKSTATUS</th>
      <th scope="col">GRANDTOTAL</th>


    </tr>
    <?php
        
        $sql ="SELECT r.pnrno,r.busid, b.busno, b.bustype ,b.source , b.destination , b.depttime, b.arrivaltime , b.journeydate ,r.userid,r.no_of_seats,r.bookstatus,a.grandtotal FROM reservation r,busdetails b ,amount a where  r.userid='$userid' and  r.busid=b.busid and r.pnrno=a.pnrno";
        $retval = $con->query($sql) or die($con->error);
        if($retval->num_rows >0)
  {
        while ($row = $retval->fetch_assoc()) {
          echo"<tr>
            <td>".$row["pnrno"]."</td>
            <td>".$row["busid"]."</td>
            <td>".$row["busno"]."</td>
            <td>".$row["bustype"]."</td>
            <td>".$row["source"]."</td>
            <td>".$row["destination"]."</td>
            <td>".$row["depttime"]."</td>
            <td>".$row["arrivaltime"]."</td>
            <td>".$row["journeydate"]."</td>
            <td>".$row["userid"]."</td>
            <td>".$row["no_of_seats"]."</td>
            <td>".$row["bookstatus"]."</td>
            <td>".$row["grandtotal"]."</td>
            </tr>
            ";
        }
        echo "</table>";
    }
    else
    {if($retval->num_rows <0)
        echo "no rows";
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
</table>
</body>
</html>

