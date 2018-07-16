

<?php
    require_once 'db_connect.php';

     if(!empty($_POST)){

       $Name=$_POST['Name'];
      $Email=$_POST['Email'];
     $Message=$_POST['Message'];

     if($_POST['actionbtn']) 
         {
             $insertsql="INSERT INTO feedback(Name,Email,Message) VALUES($Name,$Email,$Message)";
            $insert_db=mysqli_query($connect,$insertsql);

          if($insert_db) {
                echo "Insertion To Database Done..!!" ;    
            } else {
                echo mysqli_error($connect);
            }

         }
     }
    


?>



<!DOCTYPE html>
<html>
<title>Techno-News</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="https://i.ytimg.com/vi/DipIfzCGXYs/maxresdefault.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Techno-News</b></h4>
    <p class="w3-text-grey">Hosted by Ganesh_Aswar</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>TECHNOLOGY</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>UPCOMING TECH..</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="life.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container"><br><br>
    
	<center><h1 id="demo" onmouseover="mouseOver()" onmouseout="mouseOut()"> <b>Techno-News </b> </h1>  </center>
<script>
function mouseOver() {
    document.getElementById("demo").style.color = "red";
}

function mouseOut() {
    document.getElementById("demo").style.color = "black";
}
</script>
		
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="lifi.html"><img src="http://dkedq8s8z8wib.cloudfront.net/wp-content/uploads/sites/5/2015/11/30150459/Depositphotos_40277159_m-2015.jpg" alt="LiFi" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>LiFi Technology</b></p>
        <p>Li-Fi uses common household LED (light emitting diodes) light bulbs to enable data transfer, boasting speeds of up to 224 gigabits per second.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="block_Chain.html"><img src="https://www.smartdatacollective.com/wp-content/uploads/2017/06/blockchain-explain-smartdata-collective-1024x614.jpg" alt="BlockChain" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>BlockChain</b></p>
        <p>A blockchain is a digitized, decentralized, public ledger of all cryptocurrency transactions.
			Constantly growing as ‘completed’ blocks are recorded and added to it in chronological order,it allows market participants to keep track of digital currency transactions .</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <a href="hyper.html"><img src="https://awaissoftnews.files.wordpress.com/2016/05/video_cover1.jpg?w=1920&h=768&crop=1" alt="Hyperloop" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>Hyperloop</b></p>
        <p>Hyperloop will reinvent transportation to eliminate the barriers of distance and time. Hyperloop One will move people and goods, and unlock unprecedented value for governments, businesses, and consumers.</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="bigData.html"><img src="https://images.techhive.com/images/article/2014/12/big_data_trends-100537349-large.jpg" alt="BigData" style="width:100%" class="w3-hover-opacity">
    </a> 
		<div class="w3-container w3-white">
        <p><b>Big Data Technology</b></p>
        <p>Big data is a term that describes the large volume of data – both structured and unstructured – that inundates a business on a day-to-day basis. But it's not the amount of data that's important.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
     <a href="carbon.html"><img src="https://cdn.zmescience.com/wp-content/uploads/2013/09/carbon_Capture.jpg" alt="Carbon Capture Technology" style="width:100%" class="w3-hover-opacity"></a> 
      <div class="w3-container w3-white">
        <p><b>Carbon Capture Technology</b></p>
        <p>Carbon capture and storage (CCS) (or carbon capture and sequestration or carbon control and sequestration[1]) is the process of capturing waste carbon dioxide (CO2) from large point sources.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
     <a href="ai.html"> <img src="https://s16315.pcdn.co/wp-content/uploads/2015/11/ai-image.jpg" alt="Artificial Intelligence" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>Artificial Intelligence</b></p>
        <p>Artificial intelligence (AI), the ability of a digital computer or computer-controlled robot to perform tasks commonly associated with intelligent beings.</p>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="second.php" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
	  <h2>Upcoming Tech...</h2>
    <div class="w3-col m6">
      <img src="https://i.ytimg.com/vi/gWxRLA2BWkw/maxresdefault.jpg" alt="Sophia" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="http://coolinterestingstuff.com/wp-content/uploads/2013/10/life-on-mars.jpg" alt="Life On Mars" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="https://i.ytimg.com/vi/e-P5IFTqB98/maxresdefault.jpg" alt="Black Holes" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="https://i.ytimg.com/vi/JF1bVr4L8jE/maxresdefault.jpg" alt="Nano Technology" style="width:100%">
    </div><div class="w3-col m6">
      <img src="
	  https://media.buzzle.com/media/images-en/photos/conceptual/technology/1200-254881-history-of-blue-ray-technology.jpg" alt="Blue ray Technology..." style="width:100%">
    </div>
	  <div class="w3-col m6">
      <img src="https://i.ytimg.com/vi/GezYZ3M25bw/maxresdefault.jpg" alt="Electronic Aspirin" style="width:100%">
    </div>
	</div>

  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>aswarganesh1@gmail.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
		  <p>Jalgaon,Maharashtra India</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>+918888285425</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="" method="POST">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" placeholder="Enter UR Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" placeholder="Enter UR Valid Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" placeholder="Give UR Valuable Response..." required>
      </div>
      <button type="submit" name='actionbtn' class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>Knowledge Partners</h3>
     <a href="https://www.wikipedia.org/"><img src="https://www.seoclerk.com/pics/121513-1.png" width="50%" height="50%"></a>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
         <a href="https://www.quora.com/"> <img src="https://pitechnologies.org/blogfiles/quora.png" width="50%" height="50%"></a>
          <span class="w3-large">Learn..</span><br>
         </li>
      </ul>
    </div>

  </div>
  </footer>
  
  <center><font size="1"><h4><i>Copyright@Ganesh_Aswar</i></h4></font></center>
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
