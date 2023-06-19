<html>
<title>Customer with Payment</title>
<body>
<?PHP
include ('database connected.php'); 
$sql="SELECT a.cust_id as cust_id, a.cust_name as cust_name , a.cust_email as cust_email , a.cust_phone as cust_phone, b.price as price, c.pay_method as pay_method, c.pay_date as pay_date, c.pay_time as pay_time, c.pay_status as pay_status
from customer a
INNER JOIN booking b 
INNER JOIN payment c
     ON a.book_id = b.book_id AND b.pay_id = c.pay_id";
$result = mysqli_query($conn,$sql) or die(mysql_error());


?>
<P><strong><center> Customer List</strong></center>  
<table border="1" width="870" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#00FA9A"><strong> Customer ID</strong></td>
<td align="center" bgcolor="#00FA9A"><strong>Name</strong></td>
<td align="center" bgcolor="#00FA9A"><strong>Email</strong></td>
<td align="center" bgcolor="#00FA9A"><strong>Phone</strong></td>
<td align="center" bgcolor="#00FA9A"><strong>Payment Method</strong></td>
<td align="center" bgcolor="#00FA9A"><strong>Price (RM)</strong></td>
 <td align="center" bgcolor="#00FA9A"><strong>Date of Payment</strong></td>
 <td align="center" bgcolor="#00FA9A"><strong>Time of Payment</strong></td>
 <td align="center" bgcolor="#00FA9A"><strong>Payment Status</strong></td>
</tr>
<?PHP
while ($row=mysqli_fetch_array($result))
{
 echo "<tr>";
 echo "<td>" .$row["cust_id"]. "</td>";
 echo "<td>" .$row["cust_name"].  "</td>";
 echo "<td>" .$row["cust_email"].  "</td>";
 echo "<td>" .$row["cust_phone"].  "</td>";
 echo "<td>" .$row["pay_method"]."</td>";
  echo "<td>" .$row["price"]."</td>";
  echo "<td>" .$row["pay_date"]."</td>";
 echo "<td>" .$row["pay_time"]."</td>";
 echo "<td>" .$row["pay_status"]."</td>";
}
echo "</table>";
echo "<center>";
echo "<br>";
?>
</body>
</html>
