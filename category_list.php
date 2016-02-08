<?include ("global.php");?>
<?include ("header.php");?>
<?php

			$result = mysqli_query($connection,"select * from categories ");
			
			while ($row2 = mysqli_fetch_assoc($result)) 
					{
							
							echo '<a href="product_list.php?category_id='.$row2["id"].'">'.$row2["category_name"].'</a>'."<br />";		
					}	
					
						
?>
		
<?include ("footer.php");?>