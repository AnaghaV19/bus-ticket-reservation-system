<!DOCTYPE html>
<html>
<head>
<title> Home Page</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="js/sl.js"></script>
</head>


<body style ="background:linear-gradient(rgb(255,223,0),rgba(0, 181, 204) );">

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
                <li class="nav-item active">
                <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="aboutus.php">ABOUT US</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contactus.php">CONTACT US</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userlogin.php">LOGIN</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admin.php">ADMIN LOGIN</a>
                </li>
                
                
             </ul>
          </div>
        </nav>
        <br>
        <center>
            <h2><b> WELCOME TO A.G BUS LINES</b></h2>
        </center>
        <br>
        <div class="wrapper">
        <marquee behaviour="alernate"><span class="marquee"><b> You can book tickets 5 days in advance.</b></span></marquee>
        </div>
      
         
<body>
<center>
<div class="w3-content w3-section" style="max-width:500px  max-height:50px">
  

  <img class="mySlides w3-animate-fading" src="imgs/img1.jpeg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="imgs/img2.jpeg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="imgs/img8.jpeg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="imgs/img9.jpeg" style="width:100%">
</div>
</center>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script>


<br>
<br>

         
    </body>
</html>