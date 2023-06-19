 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment Data</title>
</head>

<body>

<?PHP
include ('database connected.php'); 
$sql="SELECT * from payment ORDER BY pay_id ASC";
$result =mysqli_query($conn,$sql) or die(mysql_error());
while ($row=mysqli_fetch_array($result))
{
 echo "<br>";
 echo "<td>  " .$row["pay_id"].  "</td>";
 echo "<td>  " .$row["pay_method"]. "</td>";
 echo "<td>  " .$row["pay_date"].  "</td>";
 echo "<td>  " .$row["pay_time"].  "</td>";
 echo "<td>  " .$row["pay_status"].  "</td>";

}
echo "<br>";
?>
</body>
</html>