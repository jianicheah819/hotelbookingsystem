<html>
<head>
 <title> Search Result </title>
 </head>
<body>

<center>
<h1> Search Result </h1>
</center>
<?php

$searchtype=$_POST['searchtype'];
$searchterm=$_POST['searchterm'];
$searchterm= trim($searchterm);

if (!$searchtype || !$searchterm)
{
	echo ' Please Enter your search. Please enter again.';
	exit;
}

include ('database connected.php');
$query = "select * from v_book_pay_cust where ".$searchtype." like '%".$searchterm."%'";
$result = mysqli_query($conn,$query);
$num_results = mysqli_num_rows($result);
echo "<center>";
echo '<p>The numbers: '.$num_results.'</p>';

?>
<P><strong><center>Customer Booking List</strong></center>  
<table border="1" width="900" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#FF7F50"><strong>Customer ID</strong></td>
<td align="center" bgcolor="#FF7F50"><strong>Name</strong></td>
<td align="center" bgcolor="#FF7F50"><strong>Email</strong></td>
<td align="center" bgcolor="#FF7F50"><strong>Phone</strong></td>
<td align="center" bgcolor="#FF7F50"><strong>Booking ID</strong></td>
<td align="center" bgcolor="#FF7F50"><strong>Check In</strong></td> 
<td align="center" bgcolor="#FF7F50"><strong>Check Out</strong></td> 


</tr>
<?PHP

for ($i=0; $i <$num_results; $i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>";
 echo "<td>" .$row["cust_id"]. "</td>";
 echo "<td>" .$row["cust_name"].  "</td>";
 echo "<td>" .$row["cust_email"]."</td>";
 echo "<td>" .$row["cust_phone"]."</td>";
 echo "<td>" .$row["book_id"]."</td>";
 echo "<td>" .$row["date_in"]."</td>";
 echo "<td>" .$row["date_out"]."</td>";

}
echo "</table>";
echo "<center>";
echo "<br>";
 

 ?>
</body>
</html>
