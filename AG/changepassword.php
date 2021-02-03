<?php
    require 'dbconfig/config.php';
    session_start();
    error_reporting(0);
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
                <li class="nav-item">
                <a class="nav-link" href="mybooking.php">MY BOOKINGS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="booktickets.php">BOOK TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cancel.php">CANCEL TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="printtickets.php">PRINT TICKET</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="changepassword.php">CHANGE PASSWORD</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userlogin.php">LOG OUT</a>
                </li>
                
                
             </ul>
          </div>
        </nav>
        <br>
<body>
    <style>
        h5{
            background:rgba(0, 181, 204,0.8) ;
        }
        </style>
    <br>
    <center>
<div class="container5">
<h5>CHANGE PASSWORD</h5>
<form action ="" method="post">
            <br>&#160;&#160; &#160;&#160;<label><b> <b>OLD PASSWORD:</label></br>
            <input name="curpass" type="password" class="inputvalues" placeholder="Enter old password" required/></br>
            <br><label class="tab"><b>NEW PASSWORD:</label></br>
            <input  name="newpass" type="password" class="inputvalues" placeholder="Enter new password"required/><br>
            <br><label class="tab"><b>CONFIRM PASSWORD:</label></br>
            <input  name="conpass" type="password" class="inputvalues" placeholder="Confirm password"required/><br>
            <br><input type="submit" id="change_btn" name = "submit" value="CHANGE">

            </form>
            <?php

$username = $_SESSION['username'];
//echo "$username";
$query="SELECT u.email FROM user u WHERE u.username='$username'";
$query_run = mysqli_query($con , $query);
while ($row = $query_run->fetch_assoc()) {
    //echo "Your Registration ID is:"; 
    //echo $row['userid']."<br>";
    $email = $row['email'] ;
}
        $_SESSION['email'] = $email;

        if(isset($_POST['submit']))
        {
                $cur=$_POST['curpass'];
                $new=$_POST['newpass'];
                $conf=$_POST['conpass'];
                        if($new<>$conf)
                        {
                                echo "New password amd Confirm password did not match";
                        }
                        else
                        {
                            $sql="SELECT * from user where email='$email' and userpassword='$cur'";
                            $query_run=$con->query($sql);
                            
                                            if($query_run->num_rows>0)
                                            {
                                                    $sql1="UPDATE user set userpassword='$new' where email='$email' and userpassword='$cur'";
                                                    $query_run1=$con->query($sql1);
                                                    if($query_run1){
                                                    //if($query_run1->num_rows >0)
                                                    //{
                                                        echo"Password has changed";
                                                   // }
                                                    }
                    
                                            }
                                            else
                                            {
                                                echo "invalid current password";
                                            }
                            
                         }

        }


?>
</div>
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
</body>
</html>
