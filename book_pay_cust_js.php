<html>
<title>Booking with Payment of Customer</title>
<body>
    
<?PHP
include ('database connected.php'); 
$sql= "SELECT a.cust_id as cust_id, a.cust_name as cust_name, a.cust_email as cust_email, a.cust_phone as cust_phone, b.book_id as book_id, b.date_in as date_in, b.date_out as date_out
from customer a
INNER JOIN booking b 
ON a.book_id = b.book_id";

$result = mysqli_query($conn,$sql) or die(mysql_error());
    
    
?>
<P><strong><center> Booking List</strong></center>  
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#FF7F50"><strong> Customer ID</strong></td>
<td align="center" bgcolor="#FF7F50"><strong>Name</strong></td>
<td align="center" bgcolor="#FF7F50"><strong>Email</strong></td>
<td align="center" bgcolor="#FF7F50"><strong>Phone</strong></td>
<td align="center" bgcolor="#FF7F50"><strong>Booking ID</strong></td>
 <td align="center" bgcolor="#FF7F50"><strong>Check In</strong></td>
 <td align="center" bgcolor="#FF7F50"><strong>Check Out</strong></td>

 
</tr>
<?PHP
while ($row=mysqli_fetch_array($result))
{
 echo "<tr>";
 echo "<td>" .$row["cust_id"]. "</td>";
 echo "<td>" .$row["cust_name"].  "</td>";
 echo "<td>" .$row["cust_email"].  "</td>";
 echo "<td>" .$row["cust_phone"].  "</td>";
 echo "<td>" .$row["book_id"].  "</td>";
 echo "<td>" .$row["date_in"].  "</td>";
 echo "<td>" .$row["date_out"].  "</td>";

}
echo "</table>";
echo "<center>";
echo "<br>";
?>
</body>
</html>