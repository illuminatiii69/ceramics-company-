<!DOCTYPE html>
<html>
<head>
 <title> Feedback</title>
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
   color: black;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
   font-family:"Verdana";
   font-weight: bold;
   text-align: center;
   border-radius: 14px;
  } 
  th 
  {
   background-color: mediumpurple;
   color: white;
   border-radius: 14px;
  }
  h1{
    font-family: "Arial";
    font-size: 50px;
    border: 9px solid white;
    border-radius: 17px;
     color: black;
  }
  td{
    padding: 12px;
    border-radius: 14px;
  }
  tr:nth-child(even) {background-color: #f2f2f2; 
    border-radius: 14px;}
 </style>
</head>
<body style="background-size:cover" background="images/13.jpg">
  <h1><center><font style="border:9px black">  FEEDBACK </font></center></h1>
 <table>
 <tr>
  <th><br>EMAIL<br><br></th> 
  <th><br>FDATE<br><br></th>
  <th><br>SUBJECT<br><br></th>
  <th><br>USER_ID<br><br></th>
  <br><br>
 </tr>
  <?php
$con = mysqli_connect("localhost", "root", "", "ceramics");

  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 

  $sql = "CREATE procedure display1() SELECT * from feedback";
  mysqli_query($con,$sql);
  
  if ($result = mysqli_query($con,"CALL display1()"))
   {
   
   while($row = $result->fetch_assoc())
    {
    echo "<tr><td>" . $row["email"]. "</td><td>" . $row["fdate"]. "</td><td><br>". $row["subject"]."</td><td><br>" . $row["fdate"]. "<br></br></td></tr>";
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