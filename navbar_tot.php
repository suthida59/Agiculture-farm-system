<?php session_start();?>
<?php 
if (!$_SESSION["user_id"]){
	  Header("Location: index.php");
}else{?>
<!DOCTYPE html>
<html>
<title>เกษตรฟาร์ม</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="./images/logo.jpg">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="/Farm/css/fonts.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("../images/bg2.jpg");
  min-height: 100%;
}
.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>
<br>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-green w3-card navbar-dark fixed-top font-weight-bold" id="myNavbar">
  <a class="w3-bar-item w3-button w3-wide" href=""><img id="" src="./images/Logo.png" width="50" height="25" /><span class="text-warning h5"> เกษตรฟาร์ม</span></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
    <div class="w3-bar-item w3-button"><?php print_r($_SESSION['user_lavel']);?> <i class="fa fa-user"></i> : <?php print_r($_SESSION['user']);?></div>
      <?php //session_destroy();?><?php }?>
      
	    <a href ="logout.php"style="float:right"><button onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?')" onclick="document.getElementById('id01').style.display='block'"  class="w3-bar-item w3-button w3-red"><i class="fa fa-sign-out "></i> ออกจากระบบ</button></a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="logout.php"> <button onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?')" onclick="document.getElementById('id01').style.display='block'"  onclick="w3_close()" class="w3-bar-item w3-button" ><i class="fa fa-user"></i> ออกจากระบบ</button></a>
</nav>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>










