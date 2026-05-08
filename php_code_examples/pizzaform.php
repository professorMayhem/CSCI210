<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" styles.css">
    <title>PHP Multiple Checkboxes - Pizza Toppings</title>
</head>

<body >

    <form action="pizzatarget.php" method="post">

    <h1>Please select your pizza toppings:</h1>
    <ul>
	<li>
		<div>
			<input type="checkbox" name="pizza_toppings[]" value="pepperoni" id="pizza_topping_pepperoni"  />
			<label for="pizza_topping_pepperoni">Pepperoni</label>
		</div>
	</li>
			<li>
		<div>
			<input type="checkbox" name="pizza_toppings[]" value="mushrooms" id="pizza_topping_mushrooms"  />
			<label for="pizza_topping_mushrooms">Mushrooms</label>
		</div>
	</li>
			<li>
		<div>
			<input type="checkbox" name="pizza_toppings[]" value="onions" id="pizza_topping_onions"  />
			<label for="pizza_topping_onions">Onions</label>
		</div>
	</li>
			<li>
		<div>
			<input type="checkbox" name="pizza_toppings[]" value="sausage" id="pizza_topping_sausage"  />
			<label for="pizza_topping_sausage">Sausage</label>
		</div>
	</li>
			<li>
		<div>
			<input type="checkbox" name="pizza_toppings[]" value="bacon" id="pizza_topping_bacon"  />
			<label for="pizza_topping_bacon">Bacon</label>
		</div>
	</li>
	</ul>

    <button type="submit">Order Now</button>
</form></main>
</body>

</html>