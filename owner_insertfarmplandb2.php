<?php
include('connection.php');

$gardendetail_garid = $_POST["gardendetail_garid"];
$gardendetail_nameseed = $_POST["gardendetail_nameseed"];
$gardendetail_date = $_POST["gardendetail_date"];
$garden_size = $_POST["garden_size"];

$number = $_POST["number"];

for($i=0;$i<$number;$i++)
{
 $query2 ="UPDATE `gardendetail` SET `gardendetail_nameseed`='$gardendetail_nameseed',
 `gardendetail_date`='$gardendetail_date',`gardendetail_garsize`='$garden_size' WHERE `gardendetail_garid`='$gardendetail_garid'";
 mysqli_query($con,$query2);

}

echo"$query2";


//echo $query2;

//header("Location: owner_showplan.php");
