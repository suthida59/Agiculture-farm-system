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
<br>
<?php
$farm_id = $_GET["farm_id"];
?>
<div class="w3-content w3-margin-top" style="max-width:1400px;">
<!-- The Grid -->
<div class="w3-row-padding">
  <!-- Right Column -->
  <div class="w3-container">
    <div class="w3-container w3-card w3-white w3-margin-bottom ">
   <nav class="navbar navbar-light" style="">
          <a ></a>
          <a  href="owner_insertfarmplan.php?farm_id=<?php echo $farm_id ;?>" class="btn btn-danger" >ย้อนกลับ</a>
        </nav>
      <h3 class="w3-text-grey w3-padding-16"><i class="fa fa-camera-retro fa-5x fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>จัดการข้อมูลแปลง</h3>
      <div class="w3-container">
        
      <div class="container-fluid">    
        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="admin_table">
              <thead>
                <tr>
                <th></th>
                  
                  <th scope="col" >ขนาดแปลง</th>
                  <th scope="col">พื้นที่ปลูก(ทั้งหมด)</th>
                  <th scope="col">รูปภาพ</th>
                  <th scope="col">ชื่อผัก</th>
                  <th scope="col">พื้นที่ใช้ปลูก</th>
                  <th scope="col">วันที่ปลูก</th>
                  <th scope="col" colspan="4"></th>
                </tr>
              </thead>
              <tbody>
<?php
  include('connection.php');
  $garden_id = $_GET["garden_id"];
  $garden_size = $_GET["garden_size"];
  $gardendetail_id = $_GET["garden_id"];
  $query ="SELECT *
   FROM garden AS g
   LEFT JOIN gardendetail AS ug  ON g.garden_id = ug.gardendetail_garid
   LEFT JOIN farm AS f           ON g.garden_farm_id = f.farm_id
   LEFT JOIN cfquota AS c        ON ug.gardendetail_idcfquota = c.cfquota_id
   LEFT JOIN quotadetail AS q    ON c.cfquota_detail_id = q.quotadetail_id
   WHERE garden_id ='$garden_id' AND number='1'";

  $res = mysqli_query($con,$query);

  $query1 ="SELECT *
  FROM garden AS g
  LEFT JOIN gardendetail AS ug  ON g.garden_id = ug.gardendetail_garid
  LEFT JOIN farm AS f           ON g.garden_farm_id = f.farm_id
  LEFT JOIN cfquota AS c        ON ug.gardendetail_idcfquota = c.cfquota_id
  LEFT JOIN quotadetail AS q    ON c.cfquota_detail_id = q.quotadetail_id
  WHERE garden_id ='$garden_id' AND number='2'";

$query2 ="SELECT *
FROM garden AS g
LEFT JOIN gardendetail AS ug  ON g.garden_id = ug.gardendetail_garid
LEFT JOIN farm AS f           ON g.garden_farm_id = f.farm_id
LEFT JOIN cfquota AS c        ON ug.gardendetail_idcfquota = c.cfquota_id
LEFT JOIN quotadetail AS q    ON c.cfquota_detail_id = q.quotadetail_id
WHERE garden_id ='$garden_id' AND number='3'";
 $res2 = mysqli_query($con,$query2);
$b=0;
$b1=0;
$b2=0;
$gg01= $garden_size;
$gg01= explode("x", $gg01);

 $res1 = mysqli_query($con,$query1);?>
    
     <a href="./owner_detailinsert2_farmplan.php?farm_id=<?php echo $farm_id;?>&&g_size=<?php echo $gg01[0]*$gg01[1];?>&&
        garden_id=<?php echo $gardendetail_id;?>"><i class="btn btn-info"><h5>เพิ่มข้อมูลแปลงหลัก</h5></a></i>
        <?php
    while($row = mysqli_fetch_array($res)) {
    ?>

    <td></td>
        
        <th ><?php if($b==0){ echo $row["garden_size"];
            $b=1;}?></th>
        <?php $gg= $row["garden_size"];
              $gg1= explode("x", $gg);
              $gg2= explode("x", $gg);
              ?>
        
        <td><?php if($b1==0){ echo $total=$gg1[0]*$gg2[1];
            $b1=1;}?></td>
      
        <td><img src="<?php echo $row["gardendetail_image"];?>" width="250" height="150" ></td>
        <td><?php echo $row["gardendetail_nameseed"];?><?php echo $row["quotadetail_nameseed"];?></td>
        <td><?php echo $row["gardendetail_areause"];?></td>
        <td><?php echo $row["gardendetail_dateplan"];?></td>
        <td></td>
        <td><a href="./owner_detailedit_farmplan.php?gardendetail_id=<?php echo $row["gardendetail_id"];?>&&
        farm_id=<?php echo $row["farm_id"];?>&&g_size=<?php echo $total;?>&&
        garden_id=<?php echo $row["garden_id"];?>&&
        number_id=<?php echo $row["number"];?>"><i class="btn btn-warning">แก้ไข</a></td>
        <td><?php if($b2==0){?><a href="./owner_detailinsert_farmplan.php?gardendetail_id=<?php echo $row["gardendetail_id"];?>&&
        farm_id=<?php echo $row["farm_id"];?>&&g_size=<?php echo $total;?>&&
        garden_id=<?php echo $row["garden_id"];?>&&
        number_id=<?php echo $row["number"];?>"><i class="btn btn-success">เพิ่มข้อมูลปลูก</a></td><?php $b2=1;}?>
      </tr>
      
  <?php  
  
  }
  $c=0;
  $c1=0;
  $c2=0;
  while($row1 = mysqli_fetch_array($res1)) {
    ?>
    <td></td>
    <th ><?php if($c==0){ echo $row1["garden_size"];
            $c=1;}?></th>
        <?php $gg= $row1["garden_size"];
              $gg1= explode("x", $gg);?>
        
        <td><?php if($b1==0){ echo $total=$gg1[0]*$gg2[1];
            $b1=1;}?></td>
      
        <td><img src="<?php echo $row1["gardendetail_image"];?>" width="250" height="150" ></td>
        <td><?php echo $row1["gardendetail_nameseed"];?><?php echo $row1["quotadetail_nameseed"];?></td>
        <td><?php echo $row1["gardendetail_areause"];?></td>
        <td><?php echo $row1["gardendetail_dateplan"];?></td>
        <td></td>
        <td><a href="./owner_detailedit_farmplan.php?gardendetail_id=<?php echo $row1["gardendetail_id"];?>&&
        farm_id=<?php echo $row1["farm_id"];?>&&g_size=<?php echo $total;?>&&
        garden_id=<?php echo $row1["garden_id"];?>&&
        number_id=<?php echo $row1["number"];?>"><i class="btn btn-warning">แก้ไข</a></td>
        <td><?php if($c2==0){?><a href="./owner_detailinsert_farmplan.php?gardendetail_id=<?php echo $row1["gardendetail_id"];?>&&
        farm_id=<?php echo $row1["farm_id"];?>&&g_size=<?php echo $total;?>&&
        garden_id=<?php echo $row1["garden_id"];?>&&
        number_id=<?php echo $row1["number"];?>"><i class="btn btn-success">เพิ่มข้อมูลปลูก</a></td><?php $c2=1;}?>
      </tr>
      
  <?php  
  
  }
  $d=0;
  $d1=0;
  $d2=0;
  while($row2 = mysqli_fetch_array($res2)) {
    ?>
    <td></td>
    <th ><?php if($d==0){ echo $row2["garden_size"];
            $d=1;}?></th>
        <?php $gg= $row2["garden_size"];
              $gg1= explode("x", $gg);?>
        
        <td><?php if($b1==0){ echo $total=$gg1[0]*$gg2[1];
            $b1=1;}?></td>
      
        <td><img src="<?php echo $row2["gardendetail_image"];?>" width="250" height="150" ></td>
        <td><?php echo $row2["gardendetail_nameseed"];?><?php echo $row2["quotadetail_nameseed"];?></td>
        <td><?php echo $row2["gardendetail_areause"];?></td>
        <td><?php echo $row2["gardendetail_dateplan"];?></td>
        <td></td>
        <td><a href="./owner_detailedit_farmplan.php?gardendetail_id=<?php echo $row2["gardendetail_id"];?>&&
        farm_id=<?php echo $row2["farm_id"];?>&&g_size=<?php echo $total;?>&&
        garden_id=<?php echo $row2["garden_id"];?>&&
        number_id=<?php echo $row2["number"];?>"><i class="btn btn-warning">แก้ไข</a></td>
        <td><?php if($d2==0){?><a href="./owner_detailinsert_farmplan.php?gardendetail_id=<?php echo $row2["gardendetail_id"];?>&&
        farm_id=<?php echo $row2["farm_id"];?>&&g_size=<?php echo $total;?>&&
        garden_id=<?php echo $row2["garden_id"];?>&&
        number_id=<?php echo $row2["number"];?>"><i class="btn btn-success">เพิ่มข้อมูลปลูก</a></td><?php $d=1;}?>
      </tr>
      
  <?php  
  
  }
  ?>
  </table>







  