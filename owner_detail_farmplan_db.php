<?php
$x = 2;

for($i=0;$i<$x;$i++)
	
		{
			$strSQL = "INSERT INTO process_quantity (team_id, product_id , process_id , process_quantity , date) VALUES 
					('1','2','3','4','5') " ; 
					echo $strSQL."<br>";
		}
		
		?>