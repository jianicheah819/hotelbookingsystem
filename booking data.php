<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking Data</title>
</head>

<body>

<?PHP
include ('database connected.php'); 
$sql="SELECT * from booking ORDER BY book_id ASC";
$result =mysqli_query($conn,$sql) or die(mysql_error());
while ($row=mysqli_fetch_array($result))
{
 echo "<br>";
 echo "<td>  " .$row["book_id"].  "</td>";
 echo "<td>  " .$row["book_date"]. "</td>";
 echo "<td>  " .$row["date_in"].  "</td>";
 echo "<td>  " .$row["date_out"].  "</td>";
 echo "<td>  " .$row["price"].  "</td>";
 echo "<td>  " .$row["no_room"]."</td>";
 echo "<td>  " .$row["no_adult"]."</td>";
 echo "<td>  " .$row["no_child"]."</td>";
}
echo "<br>";
?>
</body>
</html>