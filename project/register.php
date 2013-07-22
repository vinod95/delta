<?php
if (isset($_POST)) {
  if (isset($_POST["fName"])){
    $fname = $_POST['fName'];
    }}
if (isset($_POST)) {
  if (isset($_POST["lName"])){
    $lname = $_POST['lName'];
    }}
if (isset($_POST)) {
  if (isset($_POST["uName"])){
    $uname = $_POST['uName'];
    }}
if (isset($_POST)) {
  if (isset($_POST["Gender"])){
    $g= $_POST['Gender'];
    }}
if (isset($_POST)) {
  if (isset($_POST["phNo"])){
    $ph = $_POST['phNo'];
    }}
if (isset($_POST)) {
  if (isset($_POST["Residential"])){
    $addr = $_POST['Residential'];
    }}

if (isset($_POST)) {
  if (isset($_POST["pwd"])){
    $pwd = $_POST['pwd'];
    }}
if (isset($_POST)) {
  if (isset($_POST["rpwd"])){
    $rpwd = $_POST['rpwd'];
    }}

mysql_connect("localhost","root","")or die("cannot connect"); 
mysql_select_db("task3")or die("cannot select DB");

$i=0;

function val1()
{
global $i,$fname;
if ($fname==null || $fname=="")
  {
  echo "First Name must be filled out<br>";
  $i++;
  }
else if (is_numeric($fname))
{
echo "Please enter a Valid First Name<br>";
$i++;
}
}
function val2()
{
global $i,$lname;
if ($lname==null || $lname=="")
  {
  echo "Last Name must be filled out<br>";
  $i++;
  }
else if (is_numeric($lname))
{
echo "Please enter a Valid Last Name<br>";
$i++;
}
}

function val3()
{
global $i,$uname;
if ($uname==null || $uname=="")
  {
  echo "Please enter Username.<br>";
  $i++;
  }
}

function val4()
{
global $i,$ph;
if ($ph==null || $ph=="")
  {
  echo "Phone number must be filled out<br>";
  $i++;
  }
}

function val5()
{
global $i,$pwd;
if ($pwd==null || $pwd=="") 
  {
  echo "Password must be filled out<br>";
  $i++;
  }
}

function val6()
{
global $i,$rpwd;
if ($rpwd==null || $rpwd=="")
  {
  echo "Re-Password must be filled out<br>";
  $i++;}
}

function val7()
{
global $i,$pwd;
if(!preg_match('/[0-9A-Za-z_]$/', $pwd))  
{
$i++;
echo "password must have alphabet, digits and underscores only<br>"; 
}
}

function val8()
{
global $i,$pwd;
if(strlen($pwd)<6 || strlen($pwd)>12)  
{
$i++;
echo "password must be 6-12 characters long<br>"; 
}}


function val9()
{
global $i,$ph;
if(strlen($ph)!=10)  
{
$i++;
echo "Invalid mobile number<br>"; 
}
}

function val10()
{
global $i,$rpwd,$pwd;
if($pwd!==$rpwd)  
{
$i++;
echo "Re-password should be same as password<br>"; 
}}

val1();
val2();
val3();
val4();
val5();
val6();
val8();
val9();
val10();

$l=md5($pwd);

if($i==0)
{
$sql="INSERT INTO userDetails VALUES('$fname','$lname','$uname','$g','$addr','$ph','$l')";
$result=mysql_query($sql);
 
if($result)
include 'E:\wamp\www\project.html';
else 
echo "ERROR";
}
?>