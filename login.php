<?php
session_start();
	include 'databaseconnection.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$_SESSION['uid'] = $uid;

$sql= "SELECT * FROM logins WHERE uid='$uid' AND pwd= '$pwd'";

$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
   echo "Username or password incorrect!";
}
else {
  echo "Logged in";
	//starting session
	//session_start();
	//$_SESSION["username"]=
  header("Location: homepage.php");

}


?>
