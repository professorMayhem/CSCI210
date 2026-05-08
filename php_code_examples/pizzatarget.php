<?php
  
  // set up string variable for SQL statement
  $sql = "SELECT * FROM Products" ;  // sql select clause.  Assumes a table named Products
  $where = " WHERE";				 // creates where clause
  
  echo("<br><br>");
  
  // $_POST array contains the pizza toppings that were checked on
  // the previous page
  
  if(empty($_POST['pizza_toppings'])) 
  {
    echo("You didn't select any toppings.");  
	// or just do nothing.  This is here for illustrative purposes.
  } 
  else 
  {	
	// print the toppings
	
	// copy the contents of $_POST array into a variables
	// to avoid having to deal with more single-quotes
	// when concatenating SQL statements
	$aToppings = $_POST['pizza_toppings'];
	
	// use the count function.  This counts the number of rows in
	// the array
    $N = count($aToppings);
    echo("You selected $N topping(s): ");
	
    // traverse through the array of toppings, add each topping to
	// the where clause, with OR in between.
	for($i=0; $i < $N; $i++)
    {
      echo("<br>" . $aToppings[$i]);
	  if($i < $N - 1)  {
		$where = $where . " toppings = '" . $aToppings[$i] . "' OR ";
	  }
	  else {
		 $where = $where . " toppings = '" . $aToppings[$i] . "'";
	  }
    }
	
	// append the where clause to the SQL statement, and a semi-colon
	$sql = $sql . $where . ";";
	echo("<br>");
	echo $sql;
  }
?>