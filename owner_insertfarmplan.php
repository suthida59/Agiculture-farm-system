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
  
  </head>
<br><br>

<div class="w3-content w3-margin-top" style="max-width:1200px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
    <nav class="navbar navbar-light" style="">
          <a ></a>
          <a ></a>
        </nav>
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>จัดการข้อมูลแปลง</h2>
      <div class="w3-container">

      <?php 
     include('connection.php');

    $farm_id = $_GET["farm_id"];
    
    //$graden_id = $_GET["graden_id"];
    $query = "SELECT * FROM farm WHERE farm_id = '$farm_id'";
    $res = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($res)){
    ?>
    <form action="./owner_insertfarmplandb.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="farm_id" value="<?php echo $farm_id;?>">
        <div class="w3-container">
  

         <div class="w3-row-padding">
          <div class="w3-half">
            <h5 class="w3-text-grey"> ขนาดแปลงผัก : 
            <input class="form-control" rows="5" id="comment"  type="text" name="garden_size" size=20 placeholder="กรุณากรอกขนาดแปลงผัก"onkeypress="not_number(event)" required><br>
            </div>


           <div class="w3-half">
             <h5 class="w3-text-grey"> จำนวนแปลงผัก : 
            <input class="form-control" rows="5" id="comment"  type="text" name="garden_num" size=20 placeholder="กรุณากรอกจำนวนแปลงผัก"onkeypress="not_number(event)" required><br>
            </div>

            

       </div>
       
       <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการบันทึกข้อมูล?')) return true; else return false;"><h5>บันทึก</h5></button>
            <a class="btn btn-danger" href="owner_farm.php"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
         </form>

         <?php
    }
?>
</div>
</div>
</div>
</div>


<div class="container-fluid">
      <br>
     
        <h3 style="text-align: center;">ข้อมูลแปลงผัก</h3>
       
        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="admin_table">
              <thead>
                <tr>
                <th></th>
                  
                  <th scope="col">ขนาดแปลง</th>
                  <th scope="col">จำนวน</th>
                  <th scope="col">พื้นที่ปลูก</th>
                  <th scope="col" colspan="4">สถานะ</th>
                </tr>
              </thead>
              <tbody>
<?php
  include('connection.php');
  //$query ="SELECT * FROM garden ";
  $query = "SELECT * FROM farm,garden WHERE farm_id = '$farm_id' AND 
  farm.farm_id = garden.garden_farm_id";

  $res = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($res)) {
    ?>
    <td></td>
         
        <td><?php echo $row["garden_size"];?></td>
        <td><?php echo $row["garden_num"];?></td>  
        
        
        <?php

//$q1 ="SELECT * FROM garden WHERE garden_status = '".$row["garden_status"]."' ";
//$ree = mysqli_query($con,$q1);
//$num = mysqli_num_rows($ree);

if($row["garden_status"]=="1"){ //ถ้า num = 1 //ตรวจสอบ status
  echo " <td>ตรวจสอบแล้ว</td>";
  ?>
  
  <td><a href="./owner_detail_farmplan.php?garden_id=<?php echo $row["garden_id"];?>&
  farm_id=<?php echo $row["farm_id"];?>&
  garden_size=<?php echo $row["garden_size"];?>"><i class="btn btn-warning">ดูข้อมูลเพิ่มเติม</a></td>
  <?php
   }else {
  
   echo " <td>ยังไม่ได้ตรวจสอบ</td>";
   ?><td></td><?php

    }
   ?>
    <td><a href="./owner_detail_farmplan_del.php?garden_id=<?php echo $row["garden_id"]; ?>"><i class="fa fa-trash"></i></a></td>
      </tr>
  <?php  
  }
  ?>
  </table>


  
</div>
</div>
</div>
</div>



<br><br><br>
  </body>
</html>







        

 




           
            
          