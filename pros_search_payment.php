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
$query = "select * from payment where ".$searchtype." like '%".$searchterm."%'";
$result = mysqli_query($conn,$query);
$num_results = mysqli_num_rows($result);
echo "<center>";
echo '<p>The numbers: '.$num_results.'</p>';

?>
<P><strong><center>Customer List</strong></center>  
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#9932CC"><strong>Payment ID</strong></td>
<td align="center" bgcolor="#9932CC"><strong>Payment Method</strong></td>
<td align="center" bgcolor="#9932CC"><strong>Date of Payment</strong></td>
<td align="center" bgcolor="#9932CC"><strong>Time of Payment</strong></td>
<td align="center" bgcolor="#9932CC"><strong>Payment Status</strong></td>



</tr>
<?PHP

for ($i=0; $i <$num_results; $i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>";
 echo "<td>" .$row["pay_id"]. "</td>";
 echo "<td>" .$row["pay_method"].  "</td>";
  echo "<td>" .$row["pay_date"].  "</td>";
   echo "<td>" .$row["pay_time"].  "</td>";
    echo "<td>" .$row["pay_status"].  "</td>";


}
echo "</table>";
echo "<center>";
echo "<br>";
 

 ?>
</body>
</html>
