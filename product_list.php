<?include ("global.php");?>
<?include ("header.php");?>
<div style=" color: black; text-align: center;">
<?php


				$result = mysqli_query($connection,"select * from categories");
				$res=  mysqli_query($connection,"select * from products");
				
				while ($row2 = mysqli_fetch_assoc($result)) 					
				{
					while ($row = mysqli_fetch_assoc($res)) 
					{						
						if ( $row["category_id"] == $row2["id"])
						{
							echo " ".$row2["category_name"]."<br />";
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