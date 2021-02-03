<?php
     require 'dbconfig/config.php';
     
?>
<!DOCTYPE html>
<html>
<head>
<title>VIEW USER DETAILS</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

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
                <li class="nav-item">
                <a class="nav-link" href="busmodify.php">ADD BUS DETAILS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="viewbus.php">VIEW BUS</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="userdetails.php">VIEW USER DETAILS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="AMOUNT.php">VIEW BOOKINGS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admin.php">LOG OUT</a>
                </li>
               </ul>
          </div>
        </nav>
        <br>
<body style ="background:linear-gradient(rgb(255,223,0,1),rgba(0, 181, 204,0.8) );">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">USER ID</th>
      <th scope="col">USER NAME </th>
      <th scope="col">FULL NAME </th>
      <th scope="col">EMAIL ID</th>
      <th scope="col">PHONE</th>
       </tr>
    </thead>
  <?php
    $sql="Select userid,username, fullname,email,phone from user";
    $result=$con->query($sql);
    if($result->num_rows >0){
        while ($row=$result->  fetch_assoc()){
            echo"<tr><td>".$row["userid"]."</td><td>".$row["username"]."</td><td>".$row["fullname"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td></tr>";
        }
        echo "</table>";
    }
    else{
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
</table>
  </body>
  </html>
