<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
        <body style="background-size:cover" background="images/23.jpg">
    <form action ="tile_master_search.php" method="post">
        Enter TILE_ID:<input tyte="text" name="tile_id"><br>
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
	$n=$_POST['tile_id'];
	echo "Entered tile id is $n <br /><br />";
	$sql="select * from tile_master where tile_id ='$n'";

				$result = $con->query($sql);

			if ($result->num_rows > 0) {
		    echo "<table><tr><th>TILE_ID</th><th>SIZE</th><th>TILE_NAME</th><th>CATEGORY</th><th>DEALER_ID</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		        echo "<tr><td>" . $row["tile_id"]. "</td><td>" . $row["size"]. "</td><td>" . $row["tile_name"]. "</td><td>" . $row["category"]. "</td><td>" . $row["dealer_id"]."</td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}
		}

		$con->close();
?>
