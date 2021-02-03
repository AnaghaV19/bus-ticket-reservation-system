<?php
    
?>
<!DOCTYPE html>
<html>
<head>
<title>ADD BUS DETAILS</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

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
                <a class="nav-link" href="busmodify.php">ADD BUS DETAILS</a>
                </li>
                <li class="nav-item">
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
    <div id="main1">
        <center>
            <h2> BUS DETAILS</h2>
        </center>
        <br>
        <form class="myform" action ="insert.php" method="POST">
            &#160;&#160;&#160;<label><b>BUSID:</label>
            &#160;&#160;&#160;<label class="tab"><b>BUS NO.:</label></br>
            &#160;&#160;&#160;<input name="busid" type="integer" class="inputvalues" placeholder="Enter busid"required/>
            &#160;&#160; &#160;&#160;<input name="busno" type="text" class="inputvalues" placeholder="Enter busno."required/><br>
            <br><label class="tab1"><b>BUSNAME:</label>
            <label class="tab2" for="type"><b>BUSTYPE:</label></br>
            &#160;&#160;&#160;<input name="busname" type="text" class="inputvalues" placeholder="Enter busname"required/>
            &#160;&#160; &#160;&#160;<select id="type" name="bustype" class="inputvalues">
                <option value="type">Select Bus type</option>
                <option value="AC"  >AC</option>
                <option value="NON AC" >NON AC</option>
                </select>
        <br>&#160;&#160;&#160;<br><label class="tab1"for="from"><b>SOURCE:</label>
            &#160;&#160;&#160;&#160;&#160;<label class="tab2" for="to"><b>DESTINATION:</label></br>
            &#160;&#160;&#160;<select id="from" name="source" class="inputvalues">
                <option value="from">Select Source</option>
                <option value="BANGALORE" >BANGALORE</option>
                <option value="MANGALORE">MANGALORE</option>
                </select>
            &#160;&#160; &#160;&#160;<select id="to" name="destination" class="inputvalues">
                <option value="to" >Select Destination</option>
                <option value="MYSORE"  >MYSORE</option>
                <option value="SRINGERI"  >SRINGERI</option>
                <option value="MADIKERI"  >MADIKERI</option>
            </select>
            <br>&#160;&#160;&#160;<br><label  class="tab1"><b>DEPARTURE TIME:</label>
            <label class="tab4"><b>ARRIVAL TIME:</label></br>
             &#160;&#160;&#160;<input name="depttime" type="time"  step="1" class="inputvalues" placeholder="Enter departure time"required/>
            &#160;&#160; &#160;&#160;<input name="arrivaltime" type="time" step="1" class="inputvalues" placeholder="Enter arrival time"required/><br>
            &#160;&#160;&#160;<br><label  class="tab1"><b>JOURNEY DATE:</label>
            <label class="tab3"><b>BUS FARE:</label></br>
            &#160;&#160;&#160;<input name="journeydate" type="date"  min="2021-02-01" max="2021-02-05" class="inputvalues" placeholder="Enter journey date"required/>
            &#160;&#160; &#160;&#160;<input name="busfare" type="integer" class="inputvalues" placeholder="Enter bus fare"required/><br>
            &#160;&#160;&#160;&#160;&#160;&#160;<br><label  class="tab1"><b>TOTAL SEATS:</label>
            &#160;&#160;&#160;&#160;&#160;<label class="tab3"><b>AVAILABLE SEATS:</label></br>
            &#160;&#160;&#160;<input name="totalseats" type="integer" class="inputvalues" placeholder="Enter total seats"required/>
            &#160;&#160; &#160;&#160;<input name="availableseats" type="integer" class="inputvalues" placeholder="Enter available seats"required/><br>
            &#160;&#160;&#160;&#160;&#160;&#160;<br> <a href="insert.php"><button id="btn_insert" name="insert_btn" type="submit">ADD</button>
        </form>
        </div>
</body>
</html>