<?php
	session_start();           
	error_reporting(~E_NOTICE);
	$_SESSION['value'] = $_REQUEST['value']; //เก็บค่าพิกัด ในตัวแปรในรูปแบบ
	$date = date("Y-m-d");
	date_default_timezone_set("Asia/bangkok"); 
	$strlat = explode("|", $_SESSION['value']);

	$lati = $strlat[0];
	$lngi = $strlat[1];


    
?>

<?php
include("navbar_tot.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title>แก้ไขข้อมูลฟาร์ม</title>
  </head>
  
  
<br><br><br><br>
<div class="w3-content w3-margin-top" style="max-width:1100px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>พิกัดฟาร์มค่า Let - Long</h2>
      <div class="w3-container">
      <br>
      
      <form action="./owner_farm_letlong_db.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="farm_id" value="<?php echo $farm_id;?>">

        
        <div class="w3-container">
        <div class="container" >
		<div class="row">
			<div class="col-xs-12  col-sm-6 col-md-2"></div>
			<div class="col-xs-12   col-sm-6 col-md-8">
			
			<div class="card text-center">
				<div class="card-header">
					<h4>พิกัด Farm</h4>
					<ul class="nav nav-tabs card-header-tabs">
					  <li class="nav-item"></li>    
					</ul>
				</div>
				<br>
					
                <div class="w3-row-padding">
                <div class="w3-half">
                <h class="w3-text-grey"> วันที่
						<input class="form-control" type=""  name=" " value="<?=$date;?>"/>
                </div>

                <div class="w3-half">
                <h class="w3-text-grey"> ค่า Let-Long 
					    <input class="form-control" type="text" name="farm_latlong" value="<?php echo $_SESSION['value'];?>" /><br>
                       
                </div>
                
                <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการบันทึกข้อมูล?')) return true; else return false;"><h5>บันทึก</h5></button>
            <a class="btn btn-danger" href="owner_farm.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
         </form>
         </div></div>
			</div>
          
			</div>
		</div>
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>

<script type="text/javascript">
    (function() {
      'use strict';
      window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
      }
      form.classList.add('was-validated');
      }, false);
      });
      }, false);
      })();
    </script>

</body>
</html>


