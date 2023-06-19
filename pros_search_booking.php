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
$query = "select * from booking where ".$searchtype." like '%".$searchterm."%'";
$result = mysqli_query($conn,$query);
$num_results = mysqli_num_rows($result);
echo "<center>";
echo '<p>The numbers: '.$num_results.'</p>';

?>
<P><strong><center>Booking List</strong></center>  
<table border="1" width="900" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#FFB6C1"><strong>Booking ID</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Booking Date</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Check In</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Check Out</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Price (RM)</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Num of Room</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Num of Adult</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Num of Child</strong></td>


</tr>
<?PHP

for ($i=0; $i <$num_results; $i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>";
 echo "<td>" .$row["book_id"]. "</td>";
 echo "<td>" .$row["book_date"].  "</td>";
  echo "<td>" .$row["date_in"].  "</td>";
   echo "<td>" .$row["date_out"].  "</td>";
    echo "<td>" .$row["price"].  "</td>";
 echo "<td>" .$row["no_room"]."</td>";
 echo "<td>" .$row["no_adult"]."</td>";
  echo "<td>" .$row["no_child"]."</td>";

}
echo "</table>";
echo "<center>";
echo "<br>";
 

 ?>
</body>
</html>
