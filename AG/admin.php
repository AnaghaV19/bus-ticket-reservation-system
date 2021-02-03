<?php
     require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>ADMIN PAGE</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body style ="background:linear-gradient(rgb(255,223,0,1),rgba(0, 181, 204,0.8) );">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       <center> <h1><b>A.G BUS LINES</b></h1>
        <h6> <b>"Smiles of miles on your way"</b></h6></center>
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
                <li class="nav-item ">
                <a class="nav-link" href="contactus.php">CONTACT US</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="userlogin.php">LOGIN</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="admin.php">ADMIN LOGIN</a>
                </li>
             </ul>
          </div>
        </nav>
        <br>
    <div id="main-wrapperr">
        <center>
            <h4> &#160;&#160;ADMIN LOGIN</h4>
        </center><br>
        <form class="myform" action ="admin.php" method="post">
        &#160;&#160;&#160;&#160; <label><b>ADMIN NAME:</label></br>
        &#160;&#160;&#160;&#160;<input name="adminname" type="text" class="inputvalues" placeholder="Enter your username" required/><br>
        &#160;&#160;&#160;&#160;<label><b>PASSWORD:</label></br>
        &#160;&#160;&#160;&#160;<input name="adminpassword" type="password" class="inputvalues" placeholder="Enter your password" required/><br>
        &#160;&#160;&#160;&#160;<a href="admin1.php"> <input  name="loginn" type="button" id="login_btnn" value="Login"/></a>
        </form>
        <?php
        if(isset($_POST['loginn']))
        {
            $adminname=$_POST['adminname'];
            $adminpassword=$_POST['adminpassword'];

            $query="SELECT  * FROM admin WHERE adminname='$adminname' AND adminpassword='$adminpassword';";
            $query_run =mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                echo '<script type ="text/javascript"> alert("Admin logged in successfully ") </script>';
                header('location:admin1.php');

            }
            else{
                echo '<script type ="text/javascript"> alert("Invalid Credentials ") </script>';
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
</body>
</html>