<?php

// note:  you should put all the database connection code in an include file
// and include it on all pages that use the database
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "ecommerce";

// Create connection object - $conn
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// the SQL statement is stored in the string variable $sql
$sql = "SELECT CustID, CustName, CustPhone FROM customers";

// run the query method of the connect object using the sql statement
// return the dataset to $result, which is a PHP array
$result = $conn->query($sql);

echo("<h1>This script prints all the rows of the Customers table</h1>");

if ($result->num_rows > 0) {   // if the result array has rows
  // output data in each row
  while($row = $result->fetch_assoc()) {
	// note the use of PHP's associative arrays on the next line
	// the column names from the database are used as row indices
	
    echo "id: " . $row["CustID"]. " - Name: " . $row["CustName"]. " " . $row["CustPhone"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>