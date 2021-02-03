<?php
    require 'dbconfig/config.php';
    

?>
<!DOCTYPE html>
<html>
<head>
<title>BOOK TICKETS</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<center>
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
                <li class="nav-item active">
                <a class="nav-link" href="booktickets.php">BOOK TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userlogin.php">LOG OUT</a>
                </li>
             </ul>
          </div>
        </nav>
        <br>
<?php
session_start();
$username = $_SESSION['username'];
//echo "$username";
$query="SELECT userid FROM user u WHERE u.username='$username'";
$query_run = mysqli_query($con , $query);
while ($row = $query_run->fetch_assoc()) {
    echo "Your Registration ID is:";
    echo $row['userid']."<br>";
    $userid = $row['userid'] ;
}
        $_SESSION['userid'] = $userid;
?>
 <script type ="text/javascript"> alert(<?php echo "Your registration ID is: '$userid'"; ?>) </script>

<br>
    <center>
        <div class="container2">
        <form action="search.php" method="POST">
            <label for="from" ><b>FROM:</label></br>
            <select id="from" name="source" class="inputvalues">
                <option value="from">Select Source</option>
                <option value="BANGALORE">BANGALORE</option>
                <option value="MANGALORE">MANGALORE</option>
            </select>




            <!--<input type="text" name="source" class="inputvalues" placeholder="Enter source"required/></br>-->
            <label for="to"><b>TO:</label></br>
            <select id="to" name="destination" class="inputvalues">
                <option value="to">Select Destination</option>
                <option value="MYSORE">MYSORE</option>
                <option value="SRINGERI">SRINGERI</option>
                <option value="MADIKERI">MADIKERI</option>
            </select>
            <!--<input type="text" name="destination"class="inputvalues"  placeholder="Enter Destination"required/></br>-->
            <label><b>JOURNEY DATE:</label></br>
            <input type="date" name="journeydate" min="2021-02-01" max="2021-02-05" class="inputvalues" placeholder="Enter Journeydate"required/></br>
            <br><input type="submit" id="submit" name="search" value="SEARCH"/>
        </form>

        </div>
    </center>
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
