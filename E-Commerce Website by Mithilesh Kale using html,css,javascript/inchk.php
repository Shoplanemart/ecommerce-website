<?php
$a = $_POST['usana'];
$c = $_POST['ppsw'];

$con = mysqli_connect("localhost", "root", "", "handm");

$db = mysqli_select_db($con, "handm") or die("error in db");

$sql = "SELECT * FROM `log` WHERE usname='$a' AND passw='$c'";

$rs = mysqli_query($con, $sql);

$count = mysqli_num_rows($rs);

if ($count == 0) 
{
  echo ("please enter Correct username and password");
  header('Refresh: 1; url=http://localhost/E-Commerce%20Website%20by%20Mithilesh%20Kale%20using%20html,css,javascript/');
  die();
}

echo "<h3> login sucsess..! </h3>";

header('Refresh: 2; url=http://localhost/E-Commerce%20Website%20by%20Mithilesh%20Kale%20using%20html,css,javascript/login.html');


/*
CREATE TABLE `handm`.`log` ( `first_name` VARCHAR(15) NOT NULL ,  `Last_name` VARCHAR(15) NOT NULL , 
 `usname` VARCHAR(15) NOT NULL ,  `passw` VARCHAR(15) NOT NULL ) ENGINE = InnoDB;

INSERT INTO `log` (`first_name`, `Last_name`, `usname`, `passw`) VALUES ('adarsh', 'chate', 'adarsh', 'admin');


*/

?>

<img align="center" src="aass.gif" width="400" height="300">