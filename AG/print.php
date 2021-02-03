<?php
require "dbconfig/config.php";
$busid='';

?>
<!DOCTYPE html>
<html>
<head>
<center>
<html>
<head>
<title> Print Page</title>
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
                <li class="nav-item">
                <a class="nav-link" href="myprofile.php">MY PROFILE</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="">BOOK TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cancel.php">CANCEL TICKET</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="printtickets.php">PRINT TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userlogin.php">LOG OUT</a>
                </li>
             </ul>
          </div>
        </nav>
        <br>
</body>



<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>-->
<!--<h1>A G BUS LINES</h1>-->
    <h6>Bangalore Branch #321,7th main ,Vijayanagar<br>
         Bangalore, Karnataka, Pin: 560040
        <br>080-23456789, 080-26800012<br>
                agbuslines@gmail.com<br> </h6>
      <br>
      <br>

    <h3>TICKET RESERVATION</h3>
    <br>
    <br>
    </center>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      body{
              border: 2px solid powderblue;
              padding: 30px;
              margin: 50px;
              background-color:white;
        
          }
      table, th, td {
                       border: 0.5px solid black;
                       padding: 5px;
                        margin: 10px;
                          border-collapse: collapse;

                    }
      </style>
    
</head>


<body>


<body>
          <div>
          
            
          <?php
                          if(isset($_POST['PRINT']))
                      {       $pnrno = $_POST['pnrno'];
                              $userid = $_POST['userid'];
                              //echo "PNRNO: $pnrno";
                              //echo "</br>";
                              echo "USERID: $userid";
                              echo "</br>";

                      }
                      $sqli="SELECT * FROM user WHERE userid='$userid';";
                      $res=mysqli_query($con, $sqli);
                      while($rows = mysqli_fetch_array($res))
                    { 
                      echo "USERNAME:    ";
                      echo $rows['username']."</br>";
                      echo "FULLNAME:    ";
                      echo $rows['fullname']."</br>"; 
                      echo "EMAIL:    "; 
                      echo $rows['email']."</br>"; 
                      echo "PHONENO:    ";
                      echo $rows['phone']."</br>"; 
                      //echo "PINCODE:    ";
                      //echo $rows['pincode']."</br>";
                    } 
                    $sqli2="SELECT * FROM address WHERE userid='$userid';";
                    $res2=mysqli_query($con, $sqli2);
                    while($rows1 = mysqli_fetch_array($res2))
                    { 
                      echo "PINCODE:    ";
                      echo $rows1['pincode']."</br>";
                      echo "AREA:    ";
                      echo $rows1['postaladdress']."</br>"; 
                      echo "CITY:    "; 
                      echo $rows1['city']."</br>"; 
                      echo "STATE:    ";
                      echo $rows1['state']."</br>"; 
                      //echo "PINCODE:    ";
                      //echo $rows['pincode']."</br>";
                    }
                       
            ?>
            
          </div>
<div>
<center>
<table class="w3-table-all w3-card-4">
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
                <th>JOURNEY DATE</th>
                <th>BUS FARE</th>
            </tr> <br>
  </thead>
  
<?php
  $sql="SELECT busid FROM reservation WHERE pnrno='$pnrno' AND userid='$userid';";
  $result=mysqli_query($con , $sql);
  while ($row = $result->fetch_assoc()) 
  {
   // echo $row['busid']."<br>";
    $busid = $row['busid'] ;
}
        echo "BUS INFORMATION";
        echo "</br>";
        echo "</br>";
            $query=" SELECT busid , busno , busname , bustype , source , destination ,  depttime , arrivaltime , journeydate , busfare  FROM  busdetails WHERE busid='$busid';";
            $query_run = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($query_run))
            {   
            ?>
            
            <tr>
              <center>
                <td> <?php echo $row['busid']; ?> </td>
                <td> <?php echo $row['busno']; ?> </td>
                
                <td> <?php echo $row['busname']; ?> </td>
                <td> <?php echo $row['bustype']; ?> </td>
                <td> <?php echo $row['source']; ?> </td>
                <td> <?php echo $row['destination']; ?> </td>
                
                <td> <?php echo $row['depttime']; ?> </td>
                <td> <?php echo $row['arrivaltime']; ?> </td>
                <td> <?php echo $row['journeydate']; ?> </td>
                <td> <?php echo $row['busfare']; ?> </td>
</td>
            </center>
            </tr>
            <?php
        }
    
    
  ?>

</table>

</div>
</center>
<br>
<br>

<?php
$sqli4="SELECT no_of_seats from reservation WHERE pnrno='$pnrno';";
$ress=mysqli_query($con, $sqli4);
while($rows2 = mysqli_fetch_array($ress))
{
echo"No. of seats booked:";
echo $rows2['no_of_seats']."</br>";
}
$sqli3="SELECT * FROM amount WHERE pnrno='$pnrno';";
$res3=mysqli_query($con, $sqli3);
while($rows1 = mysqli_fetch_array($res3))
{ 
  echo "PNR NO.:    ";
  echo $rows1['pnrno']."</br>";
  echo "TOTAL AMOUNT:    ";
  echo $rows1['totalamount']."</br>"; 
  echo "GRAND TOTAL WITH  5% GST:    "; 
  echo $rows1['grandtotal']."</br>"; 

  //echo "PINCODE:    ";
  //echo $rows['pincode']."</br>";
}

?>




<br>
<br>

<button onclick="myfunc()">Print</button>
     <script type="text/javascript">
      function myfunc(){
        window.print();
      }
      </script>
      </body>


</html>



  







<!--table class="table table-dark">
  <thead>
            <tr>
                <th>busid</th>
                <th>busname</th>
                <th>bustype</th>
                <th>source</th>
                <th>destination</th>
                <th>arrivaltime</th>
                <th>depttime</th>
                <th>journeydate</th>
                <th>busfare</th>
                <th>totalseats</th>
                <th>availableseats</th>
            </tr> <br>
  </thead>
  <!--?php
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
                <td> <input type='radio'  name='busid' id='busid' required> <?php echo $row['busid']; ?>  </td>
                <td> <!?php echo $row['busname']; ?> </td>
                <td> <!?php echo $row['bustype']; ?> </td>
                <td> <!?php echo $row['source']; ?> </td>
                <td> <!?php echo $row['destination']; ?> </td>
                <td> <1?php echo $row['arrivaltime']; ?> </td>
                <td> <1?php echo $row['depttime']; ?> </td>
                <td> <!?php echo $row['journeydate']; ?> </td>
                <td> <!?php echo $row['busfare']; ?> </td>
                <td> <!?php echo $row['totalseats']; ?> </td>
                <td> <!?php echo $row['availableseats']; ?> </td>
</td>
            </tr>
            <!?php
           // echo $row['busid'];
           $busid = $row['busid'];
        }
    }
    //echo "$busid";
  ?>
 
</table>

<!?php
  
  echo "busid is:";
  echo "$busid";
  
  $_SESSION['busid']=$busid;
 
  
  ?>
  <!?php
  $sql = "INSERT INTO views(userid , busid) VALUES($userid , $busid)";
  $query_run = mysqli_query($con , $sql);

  ?>
 <a href="busid.php">go now</a>







