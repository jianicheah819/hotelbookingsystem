<!DOCTYPE html>
<html>
<head>
<title>Configuration</title>
</head>
<body>
<?php
$hostname = '127.0.0.1:3307t';
$username = 'root';
$password = '';
$database = 'hotel_booking_sys';

$conn = mysqli_connect($hostname,  $username,  $password, $database) or die('Connecting to MySQL failed');

echo 'database connected';
?>
</body>
</html>