<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body style="background-size:cover" background="images/11.jpg">
    <form action ="order_search.php" method="post">
        Enter ORDER_ID:<input tyte="text" name="order_id"><br>
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
	$n=$_POST['order_id'];
	echo "Entered order id is $n <br /><br />";
	$sql="select * from orders where order_id ='$n'";

				$result = $con->query($sql);

			if ($result->num_rows > 0) {
		    echo "<table><tr><th>ORDER_ID</th><th>ORDER_DATE</th><th>TILE_ID</th><th>QUANTITY</th><th>DEALER_ID</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		        echo "<tr><td>" . $row["order_id"]. "</td><td>" . $row["order_date"]. "</td><td>" . $row["tile_id"]. "</td><td>" . $row["quantity"]. "</td><td>". $row["dealer_id"]. "</td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}
		}

		$con->close();
?>
