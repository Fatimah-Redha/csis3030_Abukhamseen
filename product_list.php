<?include ("global.php");?>
<?include ("header.php");?>
<div style=" color: black; text-align: center;">
<?php

$no = $_GET['category_id'];
				$result = mysqli_query($connection,"select * from categories where id =$no");
				$res=  mysqli_query($connection,"select * from products where category_id =$no");				
				while ($row2 = mysqli_fetch_assoc($result)) 					
				{					
					echo " ". $row2[category_name]."<br />";
					while ($row = mysqli_fetch_assoc($res)) 
					{												
						{							
							echo " ..............................................................."."<br />";
							echo "<img src='Image/" . $row["image"] . "' width='200'>". "<br />";
							echo "Name:" .$row["product_name"]. "<br />";
							echo "Quantity Remaining :".$row["quantity_remaining"] . "<br />";
							echo "Price:".$row["price"] . "<br />";
							echo " Description: ".$row["description"] . "<br />";
						}										
					}
				}				
?>
<?include ("footer.php");?>