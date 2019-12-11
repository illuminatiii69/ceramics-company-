<!DOCTYPE html>
<html>
<head>
 <title> USER</title>
 <style>
  b{
    font-size: 30px;
    font-family: 'Arial';
    padding: 2px;
    text-align: center;
}
  table 
  {
   border-collapse: collapse;
   width: 100%;
   color: green;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
   font-family:"Verdana";
   font-weight: bold;
   text-align: center;
   border-radius: 14px
  } 
  th 
  {
   background-color: lightblue;
   color: black;
   border-radius: 14px;
  }
  h1{
    font-family: "Arial";
    font-size: 50px;
    border-radius: 17px;
     color: white;
  }
  td{
    padding: 12px;
    border-radius: 14px;
  }
  tr:nth-child(even) {background-color: #f2f2f2; 
    border-radius: 14px;}
 </style>
</head>
<body style="background-size:cover" background="images/8.jpg">
  <h1><center><font style="border:9px black"> STORED PROCEDURE /\/ USER </font></center></h1>
 <table>
 <tr>
  <th><br>USER_ID<br><br></th> 
  <th><br>UNAME<br><br></th>
  <th><br>ADDRESS<br><br></th>
  <th><br>CONTACT_NO<br><br></th>
  <br><br>
 </tr>
  <?php
$con = mysqli_connect("localhost", "root", "", "ceramics");
echo " <b><center>Creating Stored Procedure...</center></b>";

  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 

  $sql = "CREATE procedure display2() SELECT * from user";
  mysqli_query($con,$sql);
  echo "<b><center>Procedure  Created Successfully.</center></b>";
  echo "<b><center>Calling Stored Procedure!!!</center></b>";
  if ($result = mysqli_query($con,"CALL display2()"))
   {
   
   while($row = $result->fetch_assoc())
    {
    echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["uname"]. "</td><td>". $row["address"]."</td><td>" . $row["contact_no"]. "</td></tr>";
    }
    echo "</table>";
    }
else 
  { 
    echo "0 results"; 
  }
$con->close();
?>
</table>
</body>
</html>