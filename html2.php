


<!DOCTYPE html>
<! - -----
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     }
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>

 <?php
 /*
$conn = mysqli_connect('localhost', 'root', 'root','user1','8889');
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT PersonID, name FROM user_table";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["PersonID"]. "</td><td>" . $row["name"] . "</td><td>"
  . "</td><td>";
echo "<td><input type='submit' name='se' value='view'>";
echo"<td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();




require'db_conn.php';

$sel=filter_input(INPUT_POST,'se');
  $ty=filter_input(INPUT_POST,'ty');

if(isset($_POST['se']))
{



 $connect = mysqli_connect('localhost', 'root', 'root', 'user1','8889');
 $name=$row['PersonID'];
$q1=mysqli_query($connect,"select* from user_table where name='$name' ");
echo"<center><table border='1'>";
 echo"<tr bgcolor='violet'><td><center>personID</center><td><center>NAME</center><td><center>EMAIL</center></td</tr>";

 while($rows=mysqli_fetch_array($q1))
{ $ln=$rows['NAME'];
  $email=$rows['email'];
 $phone=$rows['credit'];
 echo"<tr bgcolor='Lavender'><td><center>$ln</center><td><center>$email</center><td><center>$phone</center></td></tr>";

}
echo"</center>";
}
 ?>
</table>
</body>
</html>
*/

////////////////////////////////////////////
// Collecting data from query string
$id=$_GET['id'];
// Checking data it is a number or not
if(!is_numeric($id)){
echo "Data Error";
exit;
}
// MySQL connection string
require "connect.php";
$connect = mysqli_connect('localhost', 'root', 'root', 'user1','8889');

$count=mysqli_query($connect,"SELECT *  FROM user_table where PersonID=".$id."");

echo"<center><table border='1'>";
 echo"<tr><td><center>personID</center><td><center>NAME</center><td><center>EMAIL</center><td><center>credit</credit></td</tr>";

 while($rows=mysqli_fetch_array($count))
{
 echo"<tr bgcolor='Lavender'><td><center>".$rows['PersonID']."</center><td><center>".$rows['Name']."</center><td><center>".$rows['email']."</center><td><center>".$rows['CREDIT']."</center></td></tr>";

}

echo"</center>";

echo "<Form Name ="form1" Method ="POST" ACTION = "transfer.php">";
echo"<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">";
?>
