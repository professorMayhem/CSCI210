<?php
  
  // set up string variables for SQL statement
  $sql = "SELECT * FROM Products" ;     // select clause
  $where = " WHERE";					// where clause
  
  echo("<h1>Pizza Search Results</h1>");  // create vertical whitespace
  
  if(empty($_POST['searchbox'])) 
  {
    echo("You didn't enter any search terms.");
  } 
  else 
  {	
	// copy the contents of $_POST array into a variables
	// to avoid having to deal with more single-quotes
	// when concatenating SQL statements
	$searchTxt = $_POST['searchbox'];
	
	// append the searchbox contents to the where clause
	$where = $where . " toppings LIKE %" . $searchTxt . "%";
    
    echo("<br> " . $searchTxt . "<br>"); 
	
	// create and output the SQL statement
	echo("<br> This is the SQL statement: <br>");
	
	// append the where clause to the sql statement
	$sql = $sql . $where . ";";
	echo("<br>");
	echo $sql;  
	
	// now, connect to the mysql server and use $sql to query the database
  }
?>