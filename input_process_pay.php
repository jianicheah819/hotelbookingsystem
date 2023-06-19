<!DOCTYPE html>
<html>
<head>
<title>Payment Form</title>
</head>
<body>
<?php 
include ('payment data.php'); 
$pay_id = $_POST['pay_id'];
$pay_method = $_POST['pay_method'];
$pay_date = $_POST['pay_date'];
$pay_time = $_POST['pay_time'];
$pay_status = $_POST['pay_status'];


$query ="insert into payment (pay_id, pay_method, pay_date, pay_time, pay_status)  values ('$pay_id','$pay_method','$pay_date','$pay_time','$pay_status')";
if (mysqli_query($conn, $query)) {

  echo "Payment ID :".$pay_id."<br>";
  echo "Payment Method :".$pay_method."<br>";
  echo "Date of Payment :".$pay_date."<br>";
  echo "Time of Payment :".$pay_time."<br>";
  echo "Payment Status :".$pay_status."<br>";

  
    echo "New record created successfully";
	
	header("location: payment_js.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
</body>
</html>
