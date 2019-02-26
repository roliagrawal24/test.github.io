

<!DOCTYPE html>
<html>
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

<body bgcolor="#F0F8FF">

</body>
 </html>
<?php

echo"<center>";
 echo"<form method='POST' action='' name='transfer' onSubmit='return validate()'>";
echo"<table border='5' bgcolor='Lavender'> <h2><b>transfer</b></h2>";
echo"<tr><td>
<center><table bgcolor='Lavender'>
<tr><td width='250'><b>Transfer to:<select name='sel'><option>Select Categary</option>";

  echo"<option value='cid'>PersonID</option>";
  echo"<option value='fn'>Name</option>";
  echo"<option value='city'>email</option>";
  echo"<option value='pin'>CREDIT</option>

<td><input type='text' name='ty'><input type='submit' name='se' value='search'>/<input type='submit' name='se1' value='AllSearch'>";
echo"</tr></td></table>";
echo"</td></tr></table></center></form>
</body></html>";

 require'db_conn.php';

 $sel=filter_input(INPUT_POST,'sel');
   $ty=filter_input(INPUT_POST,'ty');

if(isset($_POST['se']))
 {

  if($sel=="cid")
  {$connect = mysqli_connect('localhost', 'root', 'root', 'user1','8889');
$q1=mysqli_query($connect,"select* from user_table where PersonID='$ty'");
echo"<center><table border='1'>";
  echo"<tr bgcolor='violet'><td><center>id</center><td><center>NAME</center><td><center>EMAIL</center><td><center>CREDIT</center></center></td></tr>";


  while($rows=mysqli_fetch_array($q1))
{
    $cid=$rows['PersonID'];
 $fn=$rows['Name'];

  $email=$rows['email'];
    $dob=$rows['CREDIT'];

 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$email</center><td><center>$dob</center></td></tr>";

}
 echo"</center>";

}

echo '<form Name ="form1" Method ="POST" action="">';
echo"<input type='text' name='t'>";
echo"<input type='text' name='t1'>";
echo'<INPUT TYPE = "Submit" Name = "Sub" VALUE = "transfer">';

echo'</form>';
   

$s=filter_input(INPUT_POST,'t1');
$t=filter_input(INPUT_POST,'t');
if(isset($_POST['Sub']))
{
  $connect = mysqli_connect('localhost', 'root', 'root', 'user1','8889');
  $q1=mysqli_query($connect,"UPDATE user_table SET CREDIT = (CREDIT- $t) WHERE PersonID='$ty'");

  // $q1=mysqli_query($connect,"select* from user_table where PersonID='$ty'");
  while($rows=mysqli_fetch_array($q1))
{
  $cid=$rows['PersonID'];
$fn=$rows['Name'];

$email=$rows['email'];
  $dob=$rows['CREDIT'];

echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$email</center><td><center>$dob</center></td></tr>";

}
echo"</center>";

/*require'db_conn.php';

$s=filter_input(INPUT_POST,'t1');
$t=filter_input(INPUT_POST,'t');
if(isset($_POST['Submit1']))
{ */
$connect = mysqli_connect('localhost', 'root', 'root', 'user1','8889');
  $q2=mysqli_query($connect,"UPDATE user_table SET CREDIT = (CREDIT+ $t) WHERE PersonID='$s'");
while($rows=mysqli_fetch_array($q2))
{
$cid=$rows['PersonID'];
$fn=$rows['Name'];

$email=$rows['email'];
$dob=$rows['CREDIT'];

echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$email</center><td><center>$dob</center></td></tr>";

}
echo"</center>";


}
}


 if($sel=="fn")
  { $connect = mysqli_connect('localhost', 'root', 'root', 'user1','8889');
$q2=mysqli_query($connect,"select* from user_table where Name='$ty'");
echo"<center><table border='1'>";
  echo"<tr bgcolor='violet'><td><center>PersonID</center><td><center>Name</center><td><center>email</center><td><center>credit</center></td></tr>";

  while($rows=mysqli_fetch_array($q2))
{

      $cid=$rows['PersonID'];
   $fn=$rows['Name'];

    $email=$rows['email'];
      $dob=$rows['CREDIT'];


 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$email</center><td><center>$dob</center></td></tr>";

}
 echo"</center>";
}
if($sel=="city")
  {$connect = mysqli_connect('localhost', 'root', 'root', 'user1','8889');
$q3=mysqli_query($connect,"select* from user_table where email='$ty'");
echo"<center><table border='1'>";
echo"<tr bgcolor='violet'><td><center>PersonID</center><td><center>Name</center><td><center>email</center><td><center>credit</center></td></tr>";



  while($rows=mysqli_fetch_array($q3))
{$cid=$rows['PersonID'];
$fn=$rows['Name'];

$email=$rows['email'];
$dob=$rows['CREDIT'];

 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$ln</center><td><center>$email</center><td><center>$phone</center><td><center>$address</center><td><center>$street</center><td><center>$city</center><td><center>$pin</center><td><center>$dob</center></td></tr>";

}
 echo"</center>";
}
if($sel=="pin")
  {$connect = mysqli_connect('localhost', 'root', 'root', 'user1','8889');
$q4=mysqli_query($connect,"select* from user_table where CREDIT='$ty'");
echo"<center><table border='1'>";
echo"<tr bgcolor='violet'><td><center>PersonID</center><td><center>Name</center><td><center>email</center><td><center>credit</center></td></tr>";


  while($rows=mysqli_fetch_array($q4))
{$cid=$rows['PersonID'];
$fn=$rows['Name'];

$email=$rows['email'];
$dob=$rows['CREDIT'];

 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$email</center><td><center>$dob</center></td></tr>";

}
 echo"</center>";
}






?>
