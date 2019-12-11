<html>
<head>
    
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
    <body style="background-size:cover" background="images/6.jpg">
<body>
    <form action ="user_search.php" method="post">
        Enter USER_ID:<input tyte="text" name="user_id"><br>
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
	$n=$_POST['user_id'];
	echo "Entered user id is $n <br /><br />";
	$sql="select * from user where user_id ='$n'";

				$result = $con->query($sql);

			if ($result->num_rows > 0) {
		    echo "<table><tr><th>USER_ID</th><th>USER_NAME</th><th>ADDRESS</th><th>CONTACT_NO</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		        echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["uname"]. "</td><td>" . $row["address"]. "</td><td>" . $row["contact_no"]. "</td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}
		}

		$con->close();
?>
