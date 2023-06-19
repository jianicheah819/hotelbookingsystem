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
$query = "select * from v_cust_pay where ".$searchtype." like '%".$searchterm."%'";
$result = mysqli_query($conn,$query);
$num_results = mysqli_num_rows($result);
echo "<center>";
echo '<p>The numbers: '.$num_results.'</p>';

?>
<P><strong><center>Customer Payment List</strong></center>  
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#00FA9A"><strong>Customer ID</strong></td>
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

for ($i=0; $i <$num_results; $i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>";
 echo "<td>" .$row["cust_id"]. "</td>";
 echo "<td>" .$row["cust_name"].  "</td>";
 echo "<td>" .$row["cust_email"]."</td>";
 echo "<td>" .$row["cust_phone"]."</td>";
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
