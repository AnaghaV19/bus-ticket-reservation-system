<?php
    require 'dbconfig/config.php';
    include "header1.html";
?>
<!DOCTYPE html>
<html>
<head>
<title> Registration Page</title>
<link rel="stylesheet" href="css/style.css">
<style>
 .tab {
 margin-left: 13.8em
}
.tab1{
    margin-left:10.3em
}
h2{
    background-color:rgba(26,188,156,0.7);
}
</style>
</head>
<body style ="background-color:#FFD700">

    <div id="main">
        <center>
            <h2> REGISTRATION FORM</h2>
        </center>
        <br>
        <br>
        
        <form class="myform"action ="register.php" method="post">
        
             &#160;&#160; &#160;&#160;<label><b>USERNAME:</b></label>
            <label class="tab"><b>FULL NAME:</label><br>
            &#160;&#160; &#160;&#160;<input name="username" type="text" class="inputvalues" placeholder="Enter your username"required/>
            &#160;&#160;&#160;<input name="fullname" type="text" class="inputvalues" placeholder="Enter your fullname"required/><br>
           <br> &#160;&#160; &#160;&#160;<label><b>EMAIL:</label>
            &#160;&#160; &#160;&#160;&#160; &#160;&#160;<label  class="tab"><b>PHONE NO.:</label></br>
            &#160;&#160; &#160;&#160;<input name="email" type="email" class="inputvalues" placeholder="Enter your email"required/>
            &#160;&#160;&#160;<input name="phone" type="integer" class="inputvalues" placeholder="Enter your phone no." maxlength="10" required><br>
            <br> &#160;&#160; &#160;&#160; <label><b>POSTAL ADDRESS:</label>
            <label class="tab1"><b>CITY:</label></br>
            &#160;&#160; &#160;&#160;<input name="postaladdress" type="text" class="inputvalues" placeholder="Enter your postal address"required/>
            &#160;&#160;&#160;<input name="city" type="text" class="inputvalues" placeholder="City"required/><br>
            <br>&#160;&#160; &#160;&#160;<label><b>STATE:</label>
            &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<label class="tab"><b>PINCODE:</label></br>
            &#160;&#160; &#160;&#160;<input name="state" type="text" class="inputvalues" placeholder="State"required/>
            &#160;&#160;&#160; <input name="pincode" type="integer" class="inputvalues" placeholder="PINCODE"required/><br>
            <br>&#160;&#160; &#160;&#160;<label><b>PASSWORD:</label>
            <label class="tab"><b>CONFIRM PASSWORD:</label></br>
            &#160;&#160; &#160;&#160;<input name="password" type="password" class="inputvalues" placeholder="Enter your username" required/>
            &#160;&#160;&#160;<input  name="cpassword" type="password" class="inputvalues" placeholder="Confirm password"required/><br>
            <br><input name="submit_btn"type="submit" id="register_btn" value="REGISTER"/><br>
            <a href="userlogin.php"><input type="button" id="login_btn" value="LOGIN"/></a>
            
        </form>
        <?php

        if(isset($_POST['submit_btn']))
        {
               // echo '<script type ="text/javascript"> alert("Sign up button clicked") </script>';
              $username = mysqli_real_escape_string($con, $_REQUEST['username']);
              $fullname = mysqli_real_escape_string($con, $_REQUEST['fullname']);
              $email = mysqli_real_escape_string($con, $_REQUEST['email']);
              $phone = mysqli_real_escape_string($con, $_REQUEST['phone']);
              $postaladdress = mysqli_real_escape_string($con, $_REQUEST['postaladdress']);
              $city = mysqli_real_escape_string($con, $_REQUEST['city']);
              $state = mysqli_real_escape_string($con, $_REQUEST['state']);
              $pincode = mysqli_real_escape_string($con, $_REQUEST['pincode']);
              $password = mysqli_real_escape_string($con, $_REQUEST['password']);
              $cpassword = mysqli_real_escape_string($con, $_REQUEST['cpassword']);
              if($password==$cpassword){
                $query="Select * from user where username='$username'";
                $query_run =mysqli_query($con,$query);

                if(mysqli_num_rows($query_run)>0)
                {
                    echo '<script type ="text/javascript"> alert("User name already exists") </script>';
                }
                else
                {
                    $query ="INSERT INTO user (  username , fullname , userpassword , email , phone ,  pincode )  VALUES ('$username' , '$fullname' , '$password' , '$email' , '$phone' , '$pincode');";
                    $query_run =mysqli_query( $con , $query);
                    if($query_run==TRUE )
                    {
                        $query1 ="INSERT INTO address ( userid ,pincode , postaladdress , city , state )  VALUES ( '','$pincode' , '$postaladdress' , '$city' , '$state' );";
                        $query_run1 =mysqli_query( $con , $query1);
                        if($query_run1 == TRUE){
                        echo '<script type ="text/javascript"> alert("Registered successfuly Go to Login page....") </script>';
                        }
                    }
                   else
                   { 
                        echo '<script type ="text/javascript"> alert("User details not added successfuly ....") </script>';
                   }
                }
            }
             else
                {
                       echo '<script type ="text/javascript"> alert("password does not match") </script>';
                }
               }
        ?>
    </div>   
         <br>
         <br>
         <br>
         <br>
</body>
</html>