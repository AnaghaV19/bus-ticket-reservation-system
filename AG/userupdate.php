<?php
 require "dbconfig/config.php";
 error_reporting(0);
 $a='';
$b='';
$c='';
$d='';
$e='';
$f='';
$g='';
$h='';
$i='';
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
$e=$_GET['e'];
$f=$_GET['f'];
$g=$_GET['g'];
$h=$_GET['h'];
$i=$_GET['i'];

?>
<!DOCTYPE html>
<html>
<head>
<title>USER UPDATE PAGE</title>
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
                <a class="nav-link" href="changepassword.php">CHANGE PASSWORD</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userlogin.php">LOG OUT</a>
                </li>
                
                
                
             </ul>
          </div>
        </nav>
        <br>


<body style ="background:linear-gradient(rgb(255,223,0,1),rgba(0, 181, 204,0.8) );">
<style>
     .tab {
 margin-left: 16.3em
}
.tab1{
    margin-left:1em
}
.tab2{
    margin-left: 14.6em
}
.tab3{
    margin-left: 12em
}
.tab4{
    margin-left: 11em
}
h2{
    background-color:yellow;
}

</style>
    <div id="main2">
    
 <center>
 <h2> USER DETAILS</h2>
</center>
<br>

<form class="myform" action ="" method="GET">
 &#160;&#160;&#160;<label><b>USERID:</label>
 &#160;&#160;&#160;<label class="tab"><b>USERNAME.:</label></br>
 &#160;&#160;&#160;<input name="userid" type="integer" value="<?php echo"$a"?>" class="inputvalues" placeholder="Enter userid"required/>
 
 &#160;&#160; &#160;&#160;<input name="username" type="text" value="<?php echo"$b"?>" class="inputvalues" placeholder="Enter username."required/><br>
 
 <br><label class="tab1"><b>FULLNAME:</label>
 <label class="tab2" for="tab2"><b>EMAIL:</label></br>
 &#160;&#160;&#160;<input name="fullname" type="text"  value="<?php echo"$c"?>" class="inputvalues" placeholder="Enter fullname"required/>
 
 &#160;&#160; &#160;&#160;<input name="email" type="text"  value="<?php echo"$d"?>" class="inputvalues" placeholder="Enter email"required/>
     
 




 <br>&#160;&#160;&#160;<br><label class="tab1" ><b>PHONENO:</label>
 &#160;<label class="tab2" ><b>POSTALADDRESS:</label></br>
 &#160;&#160;&#160;<input name="phone" type="integer"  value="<?php echo"$e"?>" class="inputvalues" placeholder="Enter phoneno"required/>
 
 &#160;&#160; &#160;&#160;<input name="postaladdress" type="text"  value="<?php echo"$f"?>" class="inputvalues" placeholder="Enter postaladdress"required/>



 <br>&#160;&#160;&#160;<br><label class="tab1" ><b>CITY:</label>
 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<label class="tab2" ><b>STATE:</label></br>
 &#160;&#160;&#160;&#160;<input name="city" type="text"  value="<?php echo"$g"?>" class="inputvalues" placeholder="Enter city"required/>
 
 &#160;&#160; &#160;&#160;<input name="state" type="text"  value="<?php echo"$h"?>" class="inputvalues" placeholder="Enter state"required/>

 <br><br>&#160;&#160;&#160;<br><label class="tab1" ><b>PINCODE:</label><br>
 &#160;&#160;&#160;<input name="pincode" type="integer"  value="<?php echo"$i"?>" class="inputvalues" placeholder="Enter pincode"required/>

 <br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<br> <button id="btn_up" name="sub" type="submit">UPDATE</button>

</form>

 
 
</div>    
<?php 

$sub='';
//if(isset$_GET['sub'])
if(isset($_GET['sub']))
{

                   



    $userid = $_GET['userid'];
    $username = $_GET['username'];
    $fullname = $_GET['fullname'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $postaladdress = $_GET['postaladdress'];
    $city = $_GET['city'];
    $state = $_GET['state'];
    $pincode = $_GET['pincode'];
    
  
    $sql1="UPDATE user  SET userid='$userid', username='$username', fullname='$fullname', email='$email', phone='$phone' ,pincode='$pincode' WHERE userid='$userid';";
    $sql2="UPDATE address SET pincode='$pincode' , postaladdress='$postaladdress', city='$city' , state='$state' WHERE userid='$userid' ;";

    if($con->query($sql1)==true)
    {
        if($con->query($sql2)==true)
        {
             echo "<script>alert('SUCCESSFULLY UPDATED !!!')</script>";
               // echo "Error: ". $sql1 ."<br>". $con->error;
               // echo "Error: ". $sql2 ."<br>". $con->error;
        }
    }
    else
    {
        echo" updation failed";
    }
}

?>
