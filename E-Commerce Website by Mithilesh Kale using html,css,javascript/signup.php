<?php
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$una=$_POST['usn'];
$pas=$_POST['psw'];

$con = mysqli_connect("localhost", "root", "", "handm");

$db = mysqli_select_db($con, "handm") or die("error in db");


$sql ="INSERT INTO `log` (`first_name`, `Last_name`, `usname`, `passw`) VALUES ('$fn', '$ln', '$una', '$pas');";

$rs = mysqli_query($con, $sql); 

if ($rs > 0) 
{
  echo "Your account has been created. please login now..!";
  header('Refresh: 2; url=http://localhost/E-Commerce%20Website%20by%20Mithilesh%20Kale%20using%20html,css,javascript/');
} else 
{
  die("technical error...! Your account has been not created <br> create plz..! ");
  header('Refresh: 3; url=http://localhost/E-Commerce%20Website%20by%20Mithilesh%20Kale%20using%20html,css,javascript/sign.html');
}


?>
