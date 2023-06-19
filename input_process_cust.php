<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
</head>
<body>
<?php 
include ('customer data.php'); 
$cust_id = $_POST['cust_id'];
$cust_name = $_POST['cust_name'];
$cust_ic = $_POST['cust_ic'];
$cust_passport = $_POST['cust_passport'];
$cust_gender = $_POST['cust_gender'];
$cust_email = $_POST['cust_email'];
$cust_phone = $_POST['cust_phone'];

$query ="insert into customer (cust_id, cust_name, cust_ic, cust_passport, cust_gender, cust_email, cust_phone)  values ('$cust_id','$cust_name','$cust_ic','$cust_passport','$cust_gender','$cust_email','$cust_phone')";
if (mysqli_query($conn, $query)) {

  echo "Customer ID :".$cust_id."<br>";
  echo "Name :".$cust_name."<br>";
  echo "IC :".$cust_ic."<br>";
  echo "Passport :".$cust_passport."<br>";
  echo "Gender :".$cust_gender."<br>";
  echo "Email :".$cust_email."<br>";
  echo "Phone :".$cust_phone."<br>";
  
  
    echo "New record created successfully";
	//echo "<a href=\"table with js.php\">  list</a>"; 
	header("location: customer_js.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
</body>
</html>
