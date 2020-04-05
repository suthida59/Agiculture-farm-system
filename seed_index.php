<!DOCTYPE html>
<html>
<title>ผักแนะนำปลูก</title>
<?php
include("navbar_tot.php");
?>
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
<div class="container-fluid">
      <button onclick="topFunction()" id="myBtn" title="Go to top">กลับขึ้นด้านบน</button>
      <div class="shadow-lg p-3 mb-5 bg-white rounded" id="admin">
      
        <h2 style="text-align: center;">ผักแนะนำ</h2>
        <hr class="my-2">
        <nav class="navbar navbar-light" style="">
        <a href="seed_insert.php" class="badge badge-success"><h5>เพิ่มข้อมูลผัก</h5></a></p>
          <form class="form-inline">
          <a href="admin_prise.php" class="btn btn-danger my-2 my-sm-0" >ย้อนกลับ</a>&nbsp;
            <div class="form-group">
          <input class="form-control mr-sm-2" type="text" placeholder="ค้นหาข้อมูล" aria-label="Search" name="search" size="50" id="prise_search" />
            </div>
         
          </form>
        </nav>

        <div class="table-responsive" style="height:...px">
          <div class="table-wrapper-scroll-y">
            <table class="table table-striped" id="prise_table">
              <thead>
                <tr>
                  <th scope="col">ลำดับ</th>
                  <th scope="col">ชื่อสามัญ</th>
                  <th scope="col">ชื่อวิทยาศาสตร์</th>
                  <th scope="col">ราคาตลาด(ก.ก./บาท)</th>
                  <th scope="col">ระยะที่ใช้ปลูก/วัน</th>
                  <th scope="col">ประเภท</th>
                  <th scope="col">รูปภาพ</th>
                  <th scope="col" colspan="2"><center>จัดการ</center></th>
                </tr>
              </thead>
              <tbody>

              <?php
  include('connection.php');

  $query ="SELECT * FROM seed WHERE seed_user_dis = '".$_SESSION["district_id"]."'";
  $res = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($res)) {
    ?>
        <td><?php echo $row["seed_id"];?></td>
        <td><?php echo $row["seed_name"];?></td>
        <td><?php echo $row["seed_namesci"];?></td>
        <td><?php echo $row["seed_prise"];?></td>
        <td><?php echo $row["seed_dateof"];?></td>
        <td><?php echo $row["seed_lavel"];?></td>
        <td><img src="<?php echo $row["seed_image"];?>" width="120" height="100" >
       
        <td><a href="./seed_edit.php?seed_id=<?php echo $row["seed_id"]; ?>"><i class='fas fa-edit'></i></a></td>
        <td><a href="./seed_del.php?seed_id=<?php echo $row["seed_id"]; ?>"><i class="fa fa-trash"></i></a></td>
      </tr>
      
  <?php  
  }
  ?>
  
  </table>
  
  </div>
  </div>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>

</html>
</html>
<script src="\Farm\assets\jquery\jquery.js"></script>
    <script src="\Farm\assets\bootstrap\dist\js\bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#prise_search').keyup(function(){
          search_table($(this).val());
        });
        function search_table(value){
          $('#prise_table tr').each(function(){
            var found = 'false';
            $(this).each(function(){
              if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
              {
                found = 'true';
              }
            });
            if(found == 'true')
            {
              $(this).show();
            }
            else
            {
              $(this).hide();
            }
          });
        }
      });
      </script>