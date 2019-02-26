<?php

$conn = mysqli_connect('localhost', 'root', 'root','user1','8889');
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }

//
//while($row = mysqli_fetch_array($result))
// {
//echo "<tr>";
//echo "<td>" . $row['PersonID'] . "</td>";
//echo "<td>" . $row['name'] . "</td>";
//echo "<td>" . $row['email'] . "</td>";
//echo "<td>" . $row['credit'] . "</td>"; //
 //

$sql = "SELECT PersonID, name FROM user_table";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 // output data of each row
 echo"<table>";
 while($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row["PersonID"]. "</td><td>" . $row["name"] . "</td><td>"
. "</td><td>";

// echo "<td><a href='html2.php?id='" . $row['PersonID'] . ">Post</a></td>";
echo "<tr><td><a href=html2.php?id=$row[PersonID]>$row[PersonID]</a></td>";

echo "</tr>";
}
echo "</table>";
}
else { echo "0 results"; }


if(isset($GET['PersonID'])) {
$txt= $GET['PersonID'];
$result = mysqli_query($conn,"SELECT * FROM user_table where PersonID=" . $txt);
echo "<table>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>" ."<br>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['credit'] . "</td>";
echo "</tr>";
}
echo "</table>";
}


mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost', 'root', 'root','user1','8889');
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }

if(isset($GET['PersonID'])) {
$txt= $GET['PersonID'];
$result = mysqli_query($conn,"SELECT * FROM user_table where PersonID=" . $txt);
echo "<table>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>" ."<br>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['credit'] . "</td>";
echo "</tr>";
}
echo "</table>";
}

mysqli_close($conn);
?>
<?php
require'db_conn.php';

$sel=filter_input(INPUT_POST,'se');
  $ty=filter_input(INPUT_POST,'ty');

if(isset($_POST['PersonID']))
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
