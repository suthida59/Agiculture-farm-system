<?php session_start();?>
<?php
include('h.php');
?>
<!DOCTYPE html>
<html>
<title>เกษตรฟาร์ม</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="/Farm/css/fonts.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("images/bg2.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-green w3-card" id="myNavbar">
	<a class="w3-bar-item w3-button " href=""><img id="" src="images/Logo.png" width="50" height="38" class="d-inline-block align-top" alt=""> <span class="text-warning h4"> เกษตรฟาร์ม</span></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <h5>
	  <a style="float:right"> <button onclick="document.getElementById('id01').style.display='block'"  class="w3-bar-item w3-button"><i class="fa fa-user"></i> เข้าสู่ระบบ</button></a>
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
  <!--<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>-->
  <a style=""> <button onclick="document.getElementById('id01').style.display='block'"  onclick="w3_close()" class="w3-bar-item w3-button" class="w3-bar-item w3-button"><i class="fa fa-user"></i> เข้าสู่ระบบ</button></a>
</nav>


<!-- Header with full-height image -->
<header class="bgimg-1 w3-container w3-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small "><h1>Agricultural farming system</h1></span>
    <span class="w3-large"><h3>ยินดีต้อนรับสู่เกษตรฟาร์ม</h3><span>
</header>


<div id="id01" class="w3-modal ">
   
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-5"></div>
        <div class="col-md-4" style="background-color:#D6EAF8">
    
        <h3 align="center">
      <i onclick="document.getElementById('id01').style.display='none'" class="fa fa-remove w3-right "></i>
      <img id="" src="images/Logo.png" width="80" height="80" ><br>
      เข้าสู่ระบบ</h3>
      <form  name="formlogin" action="login.php" method="POST" id="login" >
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="user_username" class="form-control" required placeholder="กรอกชื่อผู้ใช้" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="user_password" class="form-control" required placeholder="กรอกหัสผ่าน" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
          </div><hr>
        </div>
        <div class="form-group">
          <div class="col-sm-12 w3-center">
            <button type="submit" class="btn btn-success" style="width:  150px; height:40px;" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
             <button type="reset" class="btn btn-danger btn btn-primary active"style="width:  80px; height:40px;">Reset  </button>
             <p class="mt-5 mb-3 text-muted w3-center"><h5>© เกษตรฟาร์ม ยินดีต้อนรับ</h5></p>
          </div>
        </div>
      </form>
    </div>
</div>
    </div>
</div>


<!-- About Section -->
<div class="w3-container" style="padding:70px 16px" id="about">
  <h3 class="w3-center">ผักแนะนำ (Recommended vegetables)</h3>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
    <img src="images/1.jpg "width="250" height="160">
      <p class="w3-large">กรีนโอ๊ค (Green Oak Lettuce)</p>
      <p>เป็นผักตระกูลผักสลัด มีลักษณะเป็นผักใบหยักสีเขียวอ่อน รูปทรงสวยเป็นพุ่ม รสชาติหวานกรอบคล้ายผักกาดหอม
      วงอายุที่เหมาะสำหรับนำมารับประทาน 40-45 วัน 
      </p>
    </div>
    <div class="w3-quarter">
    <img src="images/2.jpg "width="250" height="160">
      <p class="w3-large">เรดโอ๊ค (Red Oak Lettuce)</p>
      <p>เป็นผักตระกูลผักสลัด มีลักษณะเป็นผักใบสีแดงเข้ม ซึ่งจะตรงข้ามกับกรีนโอ๊คที่ใบและต้นเป็นสีเขียว
       อายุที่เหมาะสำหรับเก็บรับประทานคือ ช่วง 40-45 วัน
       </p>
    </div>
    <div class="w3-quarter">
    <img src="images/4.jpg "width="250" height="160">
      <p class="w3-large">ฟิลเลย์ ไอซ์เบิร์ก (Frillice Iceberg Lettuce)</p>
      <p>อยู่ในกลุ่มผักสลัดอีกชนิดหนึ่ง มีจุดเด่นตรงใบมีความอวบ กรอบ สวยงาม และแปลกตา ต่างจากใบผักกาดหอมชนิดอื่นๆ มีรสขมเล็กน้อย
         </p>
    </div>
    <div class="w3-quarter">
    <img src="images/7.png "width="250" height="160">
      <p class="w3-large">กรีนคอส (Green Cos Lettuce)</p>
      <p>หรือเรียกอีกชื่อว่าสลัดคอส เป็นผักที่จัดอยู่ในกลุ่มผักสลัด ลักษณะใบยาวรี ซ้อนกันเป็นช่อ แต่จะมีลักษณะแตกต่างกันออกไปบ้างตามสายพันธุ์
      นิยมบริโภคสดเป็นผักสลัดสลัด</p>
    </div>
  </div>

<div class="w3-container" style="padding:70px 16px" id="about">
  <h3 class="w3-center">ฟาร์มที่เป็นสมาชิก</h3>
  <div class="w3-row-padding w3-center" style="margin-top:24px">
  <?php
include('connection.php');
$query ="SELECT * FROM district WHERE district_id != '1' "; //ไม่ให้โชว์ id ที่ 1
$res = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($res)) {
  ?>
<button><a class="w3-btn " href="./index_farm.php?district_id=<?php echo $row["district_id"]; ?>"><?php echo $row["district_name"]; ?> </a></button>
<?php  
}
?>
  </div>
</div>

 
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
<body bgcolor="#FFFFE6">
</body>
</html>



<div class="container">
    <div class="row">
        <div class="col-md-3 "></div>
<div class="w3-container w3-padding-20" id="projects">
   <h3 class="w3-border-bottom w3-border-light-grey ">Map</h3>
  
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15307.060455085815!2d102.82516206831161!3d16.436751449350442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228a24f4b8b301%3A0xa21ecd59996f8d69!2z4Lio4Li54LiZ4Lii4LmM4Lia4Lij4Li04LiB4Liy4Lij4Lil4Li54LiB4LiE4LmJ4Liy4LiX4Li14LmC4Lit4LiX4Li1IOC4guC4reC4meC5geC4geC5iOC4mQ!5e0!3m2!1sen!2sth!4v1584604571448!5m2!1sen!2sth" class="img-thumbnail" alt="Cinque Terre" width="1000" height="450" ></iframe>
  </div>
  </div>
  </div> 
  <hr>       

  
</body>
</html>






