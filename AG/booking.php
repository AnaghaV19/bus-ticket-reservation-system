<?php
require "dbconfig/config.php";
error_reporting(0);
//$pnrno='';
$availableseats='';
$rows='';

session_start();
            $busid = $_SESSION['busid'];
            $no_of_seats = $_SESSION['no_of_seats'];
            $userid = $_SESSION['userid'];
            $pnrno = $_SESSION['pnrno'];

?>
<!DOCTYPE html>
<html>
<head>
<title>BOOKING PAGE</title>
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
                <li class="nav-item active">
                <a class="nav-link" href="booking.php">BOOK TICKET</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userlogin.php">LOG OUT</a>
                </li>
            </ul>
          </div>
        </nav>
        <br>
    </body>
   </html>
<?php

?>


<head>
    <link rel="stylesheet" href="css/style.css"/>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$("#prospects_form").submit(function(e) {
    e.preventDefault();
});
</script>-->
</head> 
<center>
<body >  
<?php echo "SELECTED  BUS ID:";
            echo "$busid"."<br>";
            echo "REGISTRATION ID:";
            echo "$userid"."<br>";
            //echo "AVAILABLE SEATS:";
            //echo "$availableseats"."<br>";

            ?>
<!--form method="get" id="group">
&#160;&#160; &#160;&#160;<label><b>TOTAL PASSENGERS:</label></br>
&#160;&#160; &#160;&#160;<input type="number" value=<?=$rows?> max="10" min="1" name="no_of_seats" required></br>
    &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
    &#160;&#160; &#160;&#160;<input type="submit" name="submit2"></br>

</form-->

<div class="container6">
<form method="post" action="">
    <?php
   $rows = $no_of_seats; 
   echo "<b>ENTER PASSENGER DETAILS</b>";

            for ($i=0; $i < $rows; $i++) 
            {
                         ?>
                    <div >
                   <br> &#160;&#160; <input placeholder="name" type="text" name='name<?=$i?>' required>
                            <input placeholder="gender" type="radio"  name='gender<?=$i?>' value="M" /> MALE 
                            <input placeholder="gender" type="radio"  name='gender<?=$i?>' value="F" /> FEMALE 
                            <input type="integer" placeholder="age" name='age<?=$i?>' required>

<br>

                    </div>
                <?php
            }
            echo "<b>NO. OF SEATS BOOKED:</b>";
            echo "$no_of_seats";
            $_SESSION['no_of_seats'] = $no_of_seats;

    //echo "pnrno : $pnrno";
    //$query1="INSERT INTO reservation( busid , userid , no_of_seats , bookstatus ) VALUES('$busid','$userid','$no_of_seats','booked');";
    //$query_run1 = mysqli_query($con , $query1);

    ////$pnrno = mysqli_insert_id($con);
    //echo "pnr no: $pnrno";
    function insert_into_db($data)
    {
        foreach($data as $key => $value)
        {
            $k[] = $key;
            $v[] = "'".$value."'";
    
        }

    


    $k = implode(",", $k);
    $v = implode(",", $v);



    $con = mysqli_connect("127.0.0.1:3307","root","") or die ("Unable to connect");
    mysqli_select_db($con,"agbus");
    $sql="INSERT INTO passengers($k) VALUES($v)";
    $run_query=mysqli_query($con,$sql);
    
    }
    if(isset($_POST['submit']))
    {       for ($i=0;$i < $rows; $i++)
        {       
                $data=array(
                    'pnrno'=>$pnrno,
                    'userid' => $userid ,
                    'name' => $_POST['name'.$i] ,
                    'gender' => $_POST['gender'.$i] ,
                    'age' => $_POST['age'.$i] 
                   
            );
            insert_into_db($data);
            
        }
    }

                ?>
<div>
<input type="submit" name="submit" ><br>
</div>
</form>




<!--?php

echo "no_of_seats:";
echo "$no_of_seats";


$_SESSION['no_of_seats'] = $no_of_seats;

$_SESSION['availableseats'] = $availableseats;

?-->
<?php
             $query = "SELECT busfare FROM busdetails b WHERE b.busid='$busid'";
            $query_run = mysqli_query($con , $query);
            while ($row = $query_run->fetch_assoc()) {
                //echo $row['busfare']."<br>";
                echo "<b>BUSFARE :</b>";
                echo $row['busfare']."<br>"."<br>";
                $busfare = $row['busfare'] ;
            }

            //echo "$no_of_seats";
            //echo "$busfare";
           //$totalamount = $no_of_seats * $busfare ;
           //echo "<b>TOTAL AMOUNT :</b>";
           //echo "$totalamount" ;
       // $_SESSION['totalamount'] = $totalamount;

?>
<?php
   $result = mysqli_query($con , "SELECT age FROM passengers WHERE userid='$userid' AND pnrno='$pnrno'");
   $storeArray = Array();
   $ageamount = Array();
   $amount = Array();
   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
   {
       $storeArray[] =  $row['age'];
   }
   for($i=0;$i<$no_of_seats;$i++)
   {
       $ageverify = $storeArray[$i]."\n";

       if($ageverify >= 60)
       {
          $ageamount[$i] = ($busfare - ($busfare * 15 / 100));
       }
       else
       {
          $amount[$i] = $busfare;
       }
   }
   foreach($ageamount as $it)
   {
       //echo $it."\n";
   }
    $a=Array_sum($ageamount);
    $b=Array_sum($amount);
    $totalamount=$a+$b;
    $_SESSION['totalamount'] = $totalamount;
?>
<br>
<br>
<center><a href="pay.php">Pay now</a></center>
        </div>
        </body>
        </html>








