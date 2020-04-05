<?php
include('connection.php');

$garden_size = $_POST["garden_size"];
$garden_num = $_POST["garden_num"];
$farm_id = $_POST["farm_id"];

$gardendetail_nameseed = $_POST["gardendetail_nameseed"];



$query = "INSERT INTO garden (garden_id,garden_size, garden_num ,garden_farm_id)
VALUES('','$garden_size', '$garden_num','$farm_id')";
 mysqli_query($con, $query);

 $sql2 = "SELECT * FROM garden WHERE garden_farm_id='$farm_id' AND garden_size = '$garden_size' ";
 $res = mysqli_query($con,$sql2);
 $row = mysqli_fetch_array($res);


 
 for($i=0;$i<$garden_num;$i++) //การเรียกวนลูปตามจำนวน
	
		{
			$strSQL = "INSERT INTO `gardendetail`(`gardendetail_id`, `gardendetail_garid`,
            `gardendetail_nameseed`,`gardendetail_date`) VALUES ('','".$row["garden_id"]."','' , '') " ; 
			mysqli_query($con,$strSQL);	
		}
		
	
//echo $query;
header("Location: owner_insertfarmplan.php?farm_id=$farm_id");



?>