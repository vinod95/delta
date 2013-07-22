<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="task3"; // Database name 
if (isset($_POST)) {
  if (isset($_POST["uName"])){
    $name = $_POST['uName'];
    }}
if (isset($_POST)) {
  if (isset($_POST["pwd"])){
    $p = $_POST['pwd'];
    }}

$con=mysqli_connect("localhost","root","","task3");

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$result=mysqli_query($con,"SELECT * FROM userdetails WHERE userName='$name'");
if($result === FALSE)
 {
   echo "Invalid username or password";
}
while($row = mysqli_fetch_array($result))
{
 $k=md5($p);
 if($row['Password']==$k)
 {
  $sql="INSERT INTO data VALUES('$name')";
  $result2=mysqli_query($con,$sql);
  include('E:\wamp\www\h.htm'); 
 }
 else
  echo "Invalid Username or password";
 
}
mysqli_close($con); 
?> 
