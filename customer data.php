<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer Data</title>
</head>

<body>

<?PHP
include ('database connected.php'); 
$sql="SELECT * from customer ORDER BY cust_id ASC";
$result =mysqli_query($conn,$sql) or die(mysql_error());
while ($row=mysqli_fetch_array($result))
{
 echo "<br>";
 echo "<td>  " .$row["cust_id"].  "</td>";
 echo "<td>  " .$row["cust_name"]. "</td>";
 echo "<td>  " .$row["cust_ic"].  "</td>";
 echo "<td>  " .$row["cust_passport"].  "</td>";
 echo "<td>  " .$row["cust_gender"].  "</td>";
 echo "<td>  " .$row["cust_email"]."</td>";
 echo "<td>  " .$row["cust_phone"]."</td>";
}
echo "<br>";
?>
</body>
</html>
