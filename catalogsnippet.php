
<?php
	$sql = "SELECT * FROM Products";
	// Execute the SQL query
	$result = $conn->query($sql);

	// Display the results
	if ($result->num_rows > 0) {

	// Output data of each row
	  while($row = $result->fetch_assoc()) {
	  
?>
// notice how PHP and HTML code are used together		
	<div class="product">
		<img src = "<?php echo $row['imagePath'] ?>"><br>
		<?php echo "Fresh Pumpkin<br>" ?>
		<button>Add to Cart</button>
	</div>
<?php
	  }
	} else {
	  echo "No Products existP";
	}
?>