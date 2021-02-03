<?php
     require 'dbconfig/config.php';
     session_start();
     $userid=$_SESSION['userid'];
?>
<!DOCTYPE html>
<html>
<head>
<title>MY PROFILE</title>
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
                <li class="nav-item active">
                <a class="nav-link" href="myprofile.php">MY PROFILE</a>
                </li>
                <li class="nav-item ">
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
                <li class="nav-item">
                <a class="nav-link" href="userlogin.php">LOG OUT</a>
                </li>
                
                
             </ul>
          </div>
        </nav>
        <br>
<title> user details page</title>
<body style ="background:linear-gradient(rgb(255,223,0,1),rgba(0, 181, 204,0.8) );">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">USER ID</th>
      <th scope="col">USER NAME </th>
      <th scope="col">FULL NAME </th>
      <th scope="col">USER EMAIL</th>
      <th scope="col">USER PHONENO</th>
      <th scope="col">POSTALADDRESS</th>
      <th scope="col">CITY</th>
      <th scope="col">STATE</th>
      <th scope="col">PINCODE</th>

    </tr>
  </thead>
  
    <?php
    $sql="SELECT u.userid , u.username , u.fullname , u.email , u.phone , a.postaladdress , a.city , a.state , a.pincode FROM user u JOIN address a ON u.pincode = a.pincode WHERE u.userid='$userid';";
    $result = $con->query($sql) or die($con->error);
    if($result->num_rows >0)
{
    while($row = $result->fetch_assoc())
        {
            echo"<tr>
            <td>".$row["userid"]."</td>
            <td>".$row["username"]."</td>
            <td>".$row["fullname"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["phone"]."</td>
            <td>".$row["postaladdress"]."</td>
            <td>".$row["city"]."</td>
            <td>".$row["state"]."</td>
            <td>".$row["pincode"]."</td>
            <td><a href='userupdate.php?a=$row[userid] & b=$row[username] & c=$row[fullname] & d=$row[email] & e=$row[phone] & f=$row[postaladdress] &  g=$row[city] &  h=$row[state] & i=$row[pincode]'> EDIT/UPDATE </a></td>

            </tr>";





        }
        echo "</table>";
}
else 
{
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