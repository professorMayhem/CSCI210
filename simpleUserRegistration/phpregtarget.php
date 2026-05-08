
<!DOCTYPE html>
<html  lang="en">
	
<head>

<?php
// connect to database
// you can set this up as an include file so you don't have to
// have duplicate code in every php script
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "holmes210";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
</head>

<body>
	<?php
	
		$custusername = trim($_POST["username"]);
		$custpassword = trim($_POST["password"]);
		$custname = trim($_POST["custname"]);
		$custphone = trim($_POST["custphone"]);
		$custemail = trim($_POST["custemail"]);
		
	echo "<h2>Registration Target Page</h2>"; 
		
	// insert username and password into auth table
	// note php will allow you to break statements into multiple lines
	// for improved readability.  The semicolon terminates the statement.
	
	$sqlauth = "INSERT INTO auth(username, password) 
	VALUES ('" . $custusername . "', '" . $custpassword . "')";
	
	$conn->query($sqlauth);
	
//-----------------------------------------------------------------------------	
	// The next section creates a new customer ID.  There is a better 
	// way to do this in mysql using autonumbering, but this method works.

	$maxq = "SELECT MAX(CustID) FROM customers";
	$maxresult = mysqli_query($conn, $maxq);
	
	if (mysqli_num_rows($maxresult) > 0) {
    // Fetch a single row as an associative array
    $row = mysqli_fetch_assoc($maxresult);
    $newcustID = $row["MAX(CustID)"] + 1;
	} 
	else {
    $newcustID = 1;
	}

//----------------------------------------------------------------------------	
	// insert form data into customers table
	$sqlcust = "INSERT INTO customers (CustID, CustName, email, phone, username) VALUES(" 
	. $newcustID . ",'"
	. $custname . "','"
	. $custemail . "','"
	. $custphone . "','"
	. $custusername
	. "')";

	$conn->query($sqlcust);
	$conn->close();

	?>
</body>

</html>
