<?php
session_start();
$inputuserMC=$_POST['cmid'];
$inputpassMC=$_POST['cpassword'];
$inputuserMR=$_POST['rmid'];
$inputpassMR=$_POST['rpassword'];
$inputuserMS=$_POST['smid'];
$inputpassMS=$_POST['spassword'];
$_SESSION["storemanager"]=$inputuserMS;
$_SESSION["rmanager"]=$inputuserMR;
$_SESSION["ceo"]=$inputuserMC;

//echo "$userreg";
$database='DBMS';
$password='626391';
$username='can';


$con=mysql_connect('localhost', $username, $password) or die("error");
@mysql_select_db($database, $con) or die("un ");

$query=mysql_query("SELECT * FROM Store WHERE storeid='$inputuserMS'") or die("null");
$query2=mysql_query("SELECT * FROM Region WHERE regionid='$inputuserMR'") or die("null");
//$query3=mysql_query("SELECT * FROM Store WHERE storeid='$inputuserMC'") or die("null");
//log in 	
$row=mysql_fetch_array($query);
$serveruser=$row["storeid"];

$row2=mysql_fetch_array($query2);
$serveruser2=$row2["regionid"];

//$row3=mysql_fetch_array($query3);
//$serveruser3=$row3["storeid"];

if($serveruser){
	//echo "Welcome";
	//echo $serveruser;
	header('Location:managerS-employee-perfomance.php');
}
else if($serveruser2){
	//echo "Welcome";
	//echo $serveruser;
	header('Location:managerR.php');
}
else if($_SESSION["ceo"]=="ceo"){
	//echo "Welcome";
	//echo $serveruser;
	header('Location:managerCEO-employee.php');
}


mysql_close($con);

//phpinfo();
?>