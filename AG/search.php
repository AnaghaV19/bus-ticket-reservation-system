<?php
require "dbconfig/config.php";

$busid='';
session_start();
$userid = $_SESSION['userid'] ;
?>
<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head>
<title>SEARCH</title>
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
                <li class="nav-item  active">
                <a class="nav-link" href="search.php">BOOK TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userlogin.php">LOG OUT</a>
                </li>
             </ul>
          </div>
        </nav>
        <br>
   <!-- <h3>SELECT THE OPTION</h3>-->
</head>
<table class="table table-dark">
  <thead>
            <tr>
                <th>BUS ID</th>
                <th>BUS NO.</th>
                <th>BUS NAME</th>
                <th>BUS TYPE</th>
                <th>SOURCE</th>
                <th>DESTINATION</th>
                <th>DEPARTURE TIME</th>
                <th>ARRIVAL TIME</th>
                <th>JOUNEY DATE</th>
                <th>BUS FARE</th>
                <th>TOTAL SEATS</th>
                <th>AVAILABLE SEATS</th>
                <th>ACTION</th>
            </tr> <br>
  </thead>
  <?php
        if(isset($_POST['search']))
    {       $source = $_POST['source'];
            $destination = $_POST['destination'];
            $journeydate = $_POST['journeydate'];

            $query=" SELECT * FROM busdetails WHERE source ='$source' AND destination = '$destination' AND journeydate = '$journeydate' ";
            $query_run = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($query_run))
        {   
            ?>
            
            <tr>
                <td> <?php echo $row['busid']; ?>  </td>
                <td> <?php echo $row['busno']; ?>  </td>
                <td> <?php echo $row['busname']; ?> </td>
                <td> <?php echo $row['bustype']; ?> </td>
                <td> <?php echo $row['source']; ?> </td>
                <td> <?php echo $row['destination']; ?> </td>
                <td> <?php echo $row['depttime']; ?> </td>
                <td> <?php echo $row['arrivaltime']; ?> </td>
                <td> <?php echo $row['journeydate']; ?> </td>
                <td> <?php echo $row['busfare']; ?> </td>
                <td> <?php echo $row['totalseats']; ?> </td>
                <td> <?php echo $row['availableseats']; ?> </td>
               <td><a href='passengers.php'> BOOK NOW</a> </td>
            </tr>
            <?php
           // echo $row['busid'];
           $busid = $row['busid'];
        }
    }
    //echo "$busid";
  ?>
 
</table>

<?php
  
  //echo "busid is:";
  //echo "$busid";
  $_SESSION['busid']=$busid;
 
  ?>
  <?php
  $sql = "INSERT INTO views(userid , busid) VALUES($userid , $busid)";
  $query_run = mysqli_query($con , $sql);


  ?>
  <style>
    a :link{
    font-color: black;
    font-size:25px;
    background-color:white;
  }
  </style>
 
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
 </body>
 </html>












