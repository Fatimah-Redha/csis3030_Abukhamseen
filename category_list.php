<?include ("global.php");?>
<?include ("header.php");?>
<div style=" color: black; text-align: center;">
		<h2>List of All category</h2>
		
<?php

			$result = mysqli_query($connection,"select * from categories ");
			
			while ($row2 = mysqli_fetch_assoc($result)) 
					{
							
							echo $row2["id"].'- <a href="product_list.php?category_id='.$row2["id"].'">'.$row2["category_name"].'</a>'."<br />";		
					}	
					
						
?>
		
<?include ("footer.php");?>