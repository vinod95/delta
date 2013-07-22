<?php
if(isset($_POST)) {
  if(isset($_POST["day"])){
     $day=$_POST['day'];
    }}
if(isset($_POST)) {
  if(isset($_POST["movie"])){
 $movie=$_POST['movie'];
    }}
if (isset($_POST)) {
  if (isset($_POST["seats"])){
    $seats = $_POST['seats'];
    }}
if (isset($_POST)) {
  if (isset($_POST["time"])){
    $st = $_POST['time'];
    }}

$j=0;

function val1()
{
global $j,$seats;
if ($seats==null || $seats=="")
 {
  echo "Number of seats must be filled out<br>";
  $j++;
 }
else if(!(is_numeric($seats)) || $seats<=0)
 {
  echo "Number of seats should be filled in digits.<br>";
  $j++;
 }
}

val1();

if($j==0)
{
if($day=="today")
 $date = date("Y-m-d", strtotime("today"));
else if($day=="2mr")
 $date = date("Y-m-d", strtotime("tomorrow"));
else if($day=="DA")
 $date = date("Y-m-d", strtotime("+2 days"));

if($movie=='1')
 $m="SINGAM II";
else if($movie=='2')
 $m="WORLD WARZ";
else if($movie=='3')
 $m="BHAAG MILKHA BHAAG";
else if($movie=='4')
 $m="RAANJHANAA";
else if($movie=='5')
 $m="HANGOVER PART III";
else if($movie=='6')
 $m="THE ICEMAN";

 

$con=mysqli_connect("localhost","root","","task3");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM tablemovie";
$result=mysqli_query($con,$sql);

if($result  === FALSE)
 echo mysqli_error();
$i=10;

while($row=mysqli_fetch_array($result))
{
$p=50-$row['seat'];
$q=$row['seat']+$seats;

if($row['seat']>=50 && $row['movie']='$movie' && $row['date']='$date' && $row['showTime']='$st')
 {
$i=20;
echo "Seats full";
}
else if($row['seat']+$seats>=50 && $row['movie']='$movie' && $date='$date' && $row['showTime']='$st')
{
$i=20;
 echo "No. of seats available =" . $p;
}
else if($row['date']==$date && $row['movie']==$movie && $row['showTime']='$st')
{
$i=20;
$result2=mysqli_query($con,"UPDATE tablemovie SET seat='$q' WHERE date='$date' AND movie='$movie' AND showTime='$st'");
}
}
$sql="INSERT INTO tablemovie VALUES('$movie','$st','$seats','$date')";
if($i==10)
  $result3=mysqli_query($con,$sql);

 
if($result)
{
$sql="SELECT * FROM data";
$result4=mysqli_query($con,$sql);
while($r=mysqli_fetch_array($result4))
{
$w=$r['userName'];
$sql="SELECT * FROM userdetails WHERE userName='$w'";
}
$result5=mysqli_query($con,$sql);
while($row2=mysqli_fetch_array($result5))
{
 echo "<br>Name          : " . $row2['first'] . " " . $row2['last'];
 echo "<br>Username      : " . $row2['userName'];
 echo "<br>Movie         : " . $m;
 echo "<br>Screen Number : " . $movie;
 echo "<br>Show Date     : " . $date;
 echo "<br>Show Time     : " . $st;
}
}
else 
echo "ERROR";
}
?>