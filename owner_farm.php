<!DOCTYPE html>
<html>
<title>ข้อมูลฟาร์ม</title>
<?php
include("navbar_tot.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
h5 {
    font-size: 15px;
    }
   @media(min-width: 768px){
     h5{
      font-size: 1.18em;
     }
   }
</style>
<body class="w3-light-grey">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\Farm\assets\bootstrap\dist\css\bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <link href="/Farm/css/backtotop.css" rel="stylesheet">
  
  </head>
<br><br>
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1500px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
    <!-- Right Column -->
    <div class="w3-container">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom ">
      <nav class="navbar navbar-right" style="">
          <a></a> 
          <a  href="owner_index.php" class="btn btn-danger" >ย้อนกลับ</a>
          </nav>
        <h3  class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>ฟาร์ม : <?php print_r($_SESSION['user_farm']);?></h3>
        <div class="w3-container">
          <h5 class="w3-opacity "><p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i><b>ชื่อเจ้าของฟาร์ม : </b><?php print_r($_SESSION['user']);?></p></h5>
         

 <?php


  include('connection.php');
  $query ="SELECT * FROM farm WHERE farmuser_id ='".$_SESSION['user_id']."' ";
  $res = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($res)) {
    ?>
      <button class="w3-button w3-teal" ><a href="./owner_farmedit.php? farm_id=<?php echo $row["farm_id"]; ?>"><font color="white"><h5>จัดการข้อมูลฟาร์ม</h5></font></a></button>
      <button class="w3-button w3-indigo"><a href="./owner_insertfarmplan.php? farm_id=<?php echo $row["farm_id"]; ?>"><font color="white"><h5>จัดการข้อมูลแปลง</h5></font></a></button>
     <!-- <button onclick="getLocation()"  type="reset" class="btn btn-primary" id="input-temp"><h5>พิกัดฟาร์ม<h5></button><br><br> -->
      <hr>
      <center><img src="<?php echo $row["farm_image"];?>"class="img-thumbnail" alt="Cinque Terre" width="600" height="350"> </center><br>
       <h5> เบอร์โทร  : </b><?php echo $row["farm_phone"];?><br>
        ที่ตั้ง  : </b><?php echo $row["farm_location"];?><br>
        พิกัดค่า lat-long  : </b><?php echo $row["farm_lat"];?>-<?php echo $row["farm_long"];?><br>
       

  <?php  
  }
  ?>
  </table>
  

<hr>
<?php


?>
<footer class="w3-container w3-teal w3-center w3-margin-top">
  
</footer>

</body>
</html>

                  
<script>
var x  =  document.getElementById("input-temp");
var b  =   document.getElementById("input-temp");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
    b.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {


  x = "" + position.coords.latitude.toFixed(2);         
  b = "" + position.coords.longitude.toFixed(2); 
 
 
  window.location.href ="owner_farm_letlong.php?value=" + x  +"|" + b; //บรรทัดที่ 105 ให้มันส่งค่าพิกัดของ Function Geolocation จาก Javascript ไปเก็บตัวแปร PHP//
  return false
 
}
function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      b.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      b.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      b.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      b.innerHTML = "An unknown error occurred."
      break;

  }


}
</script>







  

    