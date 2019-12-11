<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
 <body style="background-size:cover" background="images/18.jpg">
    <form action ="contact_search.php" method="post">
        Enter DEALER_ID:<input tyte="text" name="dealer_id"><br>
        <input type="submit" name="search" value ="Find">
    </form>
<?php
$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"ceramics");
if ($con->connect_error) {
		    die("Connection failed: " . $con->connect_error);
		}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$n=$_POST['dealer_id'];
	echo "Entered dealer id is $n <br /><br />";
	$sql="select * from contacts where DEALER_ID ='$n'";

				$result = $con->query($sql);

			if ($result->num_rows > 0) {
		    echo "<table><tr><th>DEALER_ID</th><th>PHONE</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		        echo "<tr><td>" . $row["DEALER_ID"]. "</td><td>" . $row["PHONE"]. "</td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}
		}

		$con->close();
?>
