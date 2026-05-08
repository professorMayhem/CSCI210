<html>
<head>

<script>
function addToCart(productID) {
	alert(productID);
	document.location.href = "cart.php?" + productID;
}
</script>
</head>
<body>

<?php
$prodID = "ABC123";
echo "<button onclick=\"addToCart('" . $prodID . "')\">Add to Cart</button>";
?>

</body>

</html>