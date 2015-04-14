<?php
session_start();
$inputuserS=$_POST['sid'];
$inputpassS=$_POST['password'];
$_SESSION["salesperson"]=$inputuserS;

//echo "$userreg";
$database='DBMS';
$password='626391';
$username='can';


$con=mysql_connect('localhost', $username, $password) or die("error");
@mysql_select_db($database, $con) or die("un ");

$query=mysql_query("SELECT * FROM Salesperson WHERE sid='$inputuserS'") or die("null");
//log in 	
$row=mysql_fetch_array($query);
$serveruser=$row["sid"];

if($serveruser){
	//echo "Welcome";
	//echo $serveruser;
	header('Location:salespersonO.php');
}
else{
	echo "Not welcome";
}

mysql_close($con);

//phpinfo();
?>