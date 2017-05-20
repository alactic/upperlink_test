<?php
if(!isset($_SESSION))
{
session_start();
}

//$connection=new PDO("mysql:host=mysql4.000webhost.com; dbname=a8451497_db","a8451497_db", "0gbunike");
$connection=new PDO("mysql:host=localhost; dbname=education_db", "root", "");
?>
<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
</head>
<body>
     <form action="index.php" method="post">
     	FIRST NAME:<input type="text" name="firstname" placeholder=" ENTER YOUR FIRST NAME"><br>
     	SURNAME:<input type="text" name="surname" placeholder="ENTER YOUR SURNAME">
     	PHONE NUMBER:<input type="text" name="phone" placeholder="ENTER YOUR PHONE NUMBER">
     	EMAIL:<input type="text" name="surname" placeholder="ENTER YOUR EMAIL">
     	UPLOAD YOUR PASSPORT:<input type="text" name="surname" placeholder="ENTER YOUR SURNAME">
     </form>
</body>
</html>