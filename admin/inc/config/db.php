<?php
session_start();
	// Connect to database
	try{
		$conn = new PDO(DSN, DB_USER, DB_PASSWORD);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		$errorMessage = $e->getMessage();
		echo $errorMessage;
		exit();
	}

define("server","localhost");
define("user","root");
define("password","");
define("database","smms_new");
$cid=mysqli_connect(server,user,password,database) or die("connection error");


function iud($query)
{
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
$result=mysqli_query($cid,$query);
$n=mysqli_affected_rows($cid);
mysqli_close($cid);
return $n;
}
	
function select($query)
{
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	mysqli_close($cid);
	return $result;
}
?>