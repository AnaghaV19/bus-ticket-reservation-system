<?php
     require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>VIEW BUS</title>
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
                <li class="nav-item active">
                <a class="nav-link" href="viewbus.php">VIEW BUS</a>
                </li>
                <li class="nav-item">
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
<title>VIEW BUS</title>
<body style ="background:linear-gradient(rgb(255,223,0,1),rgba(0, 181, 204,0.8) );">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">BUS ID</th>
      <th scope="col">BUS NO.</th>
      <th scope="col">BUS NAME </th>
      <th scope="col">BUS TYPE </th>
      <th scope="col">SOURCE</th>
      <th scope="col">DESTINATION</th>
      <th scope="col">DEPARTURE TIME</th>
      <th scope="col">ARRIVAL TIME</th>
      <th scope="col">JOURNEY DATE</th>
      <th scope="col">BUS FARE</th>
      <th scope="col">TOTAL SEATS</th>
      <th scope="col">AVAILABLE SEATS</th>
      <th scope="col">ACTION</th>

    </tr>
  </thead>
<?php
    $sql="Select * from busdetails";
    $result=$con->query($sql);
    if($result->num_rows >0){
        while ($row=$result->  fetch_assoc()){
            echo"<tr>
            <td>".$row["busid"]."</td>
            <td>".$row["busno"]."</td>
            <td>".$row["busname"]."</td>
            <td>".$row["bustype"]."</td>
            <td>".$row["source"]."</td>
            <td>".$row["destination"]."</td>
            <td>" .$row["depttime"]."</td>
            <td>".$row["arrivaltime"]."</td>
            <td>".$row["journeydate"]."</td>
            <td>".$row["busfare"]."</td>
            <td>".$row["totalseats"]."</td>
            <td>".$row["availableseats"]."</td>
            <td> <a href='up.php?a=$row[busid] &b=$row[busno] & c=$row[busname]& d=$row[bustype] & e=$row[source]& f=$row[destination]&  g=$row[depttime]&  h=$row[arrivaltime]& i=$row[journeydate]& j=$row[busfare] & k=$row[totalseats]& l=$row[availableseats]'> EDIT/UPDATE </a></td>
           <td><a href='delete.php?t=$row[busid]'> Delete</a> </td>
            </tr>
            ";
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
    <br>
    <br>
</table>
