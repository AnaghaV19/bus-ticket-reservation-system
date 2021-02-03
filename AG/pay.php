<?php
    
    require 'dbconfig/config.php';
    
    
            

    session_start();
    $totalamount = $_SESSION['totalamount'];
    $gstamount = $totalamount*1.05;
$busno='';
$bustype='';
$source='';
$destination='';
$depttime='';
$arrivaltime='';
$journeydate='';
   // echo "amount:";
    //echo "$totalamount";
    $busid = $_SESSION['busid'];
    //echo "busid is:";
    //echo "$busid";
    $userid = $_SESSION['userid'];
    //echo "userid is:";
    //echo "$userid";
    $no_of_seats = $_SESSION['no_of_seats'];
    //echo "seats is:";
    //echo "$no_of_seats";
     $availableseats = $_SESSION['availableseats'];
    //echo "seats is:";
    //echo "$availableseats";


          
    
    $query = "UPDATE busdetails SET availableseats=($availableseats - $no_of_seats) WHERE busid='$busid';";
    $query_run = mysqli_query($con , $query);
    
    


    

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
                <a class="nav-link" href="pay.php">BOOK TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userlogin.php">LOG OUT</a>
                </li>
                
                
             </ul>
          </div>
        </nav>
        <br>
    

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 50px; /* Location of the box */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 50%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color:blue;
  margin:  5px auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: skyblue;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>


<!-- Trigger/Open The Modal -->
<button id="myBtn">Click here to verify details</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>
    <?php
     echo "SELECTED BUSID :";
     echo "$busid";
     echo "</br>";
     
    $query1="SELECT busno,busname,bustype,source,destination,depttime,arrivaltime,journeydate,busfare FROM busdetails WHERE busid='$busid';";
    $query_run1=mysqli_query($con,$query1);
    while($row3=mysqli_fetch_array($query_run1))
    {
      echo "BUSNO :";
      echo $row3['busno']."</br>";
      echo "BUSNAME :";
      echo $row3['busname']."</br>";
      echo "BUSTYPE :";
      echo $row3['bustype']."</br>"; 
      echo "SOURCE :";
      echo $row3['source']."</br>"; 
      echo "DESTINATION :";
      echo $row3['destination']."</br>"; 
      echo "DEPARTURE TIME :";
      echo $row3['depttime']."</br>";
      echo "ARRIVAL TIME :";
      echo $row3['arrivaltime']."</br>"; 
      echo "JOURNEYDATE :";
      echo $row3['journeydate']."</br>"; 
      echo "BUSFARE :";
      echo $row3['busfare']."</br>";
    }
     echo "AMOUNT TO BE PAID(GST) :";
    echo "$gstamount";
    echo "</br>";
   echo "REGISTRATION ID :";
    echo "$userid";
    echo "</br>";
   echo "NO. OF SEATS BOOKED :";
    echo "$no_of_seats";
    echo "</br>";?>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      .tab2 {
 margin-left: 11em
}
</style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="header">
    </div>
    <div class="content" id="pay">
        <div class="row">
            <!--<div class="col-6 main-content">-->
            <form class="myform"action ="pay.php" method="post">
            <center><h2>MAKE PAYMENT</h2></center>
                <br>
                
                &#160;&#160;&#160;&#160;<label><b>CARD NUMBER :</label>
                &#160;&#160;&#160;&#160;<label class="tab2"><b>CARD HOLDER NAME:</label></br>
                &#160;&#160;&#160;&#160;<input name="cardno" type="integer" class="inputvalues" placeholder="Enter your card number"required/>
                &#160;&#160;&#160;&#160;<input name="cname" type="text" class="inputvalues" placeholder="Enter card holder name"required/><br>
                &#160;&#160;&#160;&#160;<label for="cn"><b>CARD TYPE:</label>
                &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<label class="tab2"><b>BANK NAME:</label></br>
                &#160;&#160;&#160;&#160;<select id="cn" name="cardtype" class="inputvalues">
                <option value="cn">Select Cardtype</option>
                <option value="CREDIT CARD" >CREDIT CARD</option>
                <option value="DEBIT CARD">DEBIT CARD</option>
                </select>    
                <!--<input name="cardtype" type="text" class="inputvalues" placeholder="Enter your postal address"required/>-->
                &#160;&#160;&#160;&#160;<select id="bk" name="bankname" class="inputvalues">
                <option value="bk">Select Bankname</option>
                <option value="SBI" >SBI</option>
                <option value="AXIS">AXIS</option>
                <option value="HDFC" >HDFC</option>
                <option value="SYN" >SYN</option>
                <option value="CB" >CB</option>
                <option value="BOI" >BOI</option>
                </select><br>
                &#160;&#160;&#160;&#160;<label><b>CARD EXPIRY:</label>
                &#160;&#160;&#160;&#160;&#160;&#160;&#160;<label class="tab2"><b>CVV NUMBER:</label></br>
                &#160;&#160;&#160;&#160;<input name="cardexpiry" type="text" class="inputvalues" placeholder="00/00"required/>
                
                &#160;&#160;&#160;&#160;<input name="cvvno" type="integer" class="inputvalues" placeholder="Enter CVV number"required/><br>
                &#160;&#160;&#160;&#160;<br>
                &#160;&#160;&#160;&#160;<a href="done.php"><input  name="submit_btn" type="submit" id="pay_btnn" value="PAY NOW"/></a>
        
        
            </form>
            </div>
            <!--<div class="col-9 main-content">
            <a href="done.php">go</a>
              
            </div>  -->
        </div>
    </div>
    <div>
    <?php
    if(isset($_POST['submit_btn']))
        {
              //echo '<script type ="text/javascript"> alert("Sign up button clicked") </script>';
              $cardno= mysqli_real_escape_string($con, $_REQUEST['cardno']);
              $cname = mysqli_real_escape_string($con, $_REQUEST['cname']);
              $cardtype = mysqli_real_escape_string($con, $_REQUEST['cardtype']);
              $bankname = mysqli_real_escape_string($con, $_REQUEST['bankname']);
              $cvvno = mysqli_real_escape_string($con, $_REQUEST['cvvno']);
              $cardexpiry = mysqli_real_escape_string($con, $_REQUEST['cardexpiry']);
              $query="INSERT INTO  card (  cardno , cname , cardtype , bankname , cvvno, cardexpiry , totalamount)  VALUES ('$cardno' , '$cname' , '$cardtype' , '$bankname' , '$cvvno' , '$cardexpiry' , '$totalamount');";
              $query_run =mysqli_query($con,$query);
              $tid = mysqli_insert_id($con);
              echo "YOUR TRANSACTION ID: $tid";
              $_SESSION['tid']=$tid;
              if($query_run==TRUE)
              {
                
                  echo '<script type ="text/javascript"> alert("Payment successfull ") </script>';
              }
             else
             { 
                  echo '<script type ="text/javascript"> alert("Payment details are not added .... Try Again") </script>';
             
                }
                   
                  
        }  
                   
    ?>
         

       

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
                </div>
  




<a href="done.php">CLICK HERE</a>
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