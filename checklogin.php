<?php
session_start();
$host="localhost"; // Host name 
$user="ucbmunor_login"; // Mysql username 
$password="mahith"; // Mysql password 
$db_name="ucbmunor_login"; // Database name 
$tbl_name="registration"; // Table name  change to registration

// Connect to server and select databse.
mysql_connect("$host", "$user", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$mysqli =  new mysqli($host, $user, $password, $db_name);

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];


function findPasswordHash($inputPassword, $storedPassword) {
	return crypt($inputPassword, $storedPassword);
}
/*
if ($stmt = $mysqli->prepare("SELECT 'password' FROM $tbl_name WHERE username = ?")) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
    if ($mysqli->affected_rows > 0) {

    }
    $stmt->close();
}
*/
$sql = sprintf("SELECT `password` FROM $tbl_name WHERE username='%s'",mysql_real_escape_string($myusername));

$result = mysql_query($sql);
if (mysql_num_rows($result) > 0) {
	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	$storedPassword = $row['password'];
} else {
	header("location:main_login.php?e=".urlencode("s"));
	exit;
}
// To protect MySQL injection 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$hashedPassword = findPasswordHash($mypassword, $storedPassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$hashedPassword'";

$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['username'] = $myusername;

	header("location:delegationHome.php");
} else {
	header("location:main_login.php?e=".urlencode("s"));
}
?>