<!DOCTYPE html>
<html>
<head>
<title>Booking Form</title>
</head>
<body>
<?php 
include ('booking data.php'); 
$book_id = $_POST['book_id'];
$book_date = $_POST['book_date'];
$date_in = $_POST['date_in'];
$date_out = $_POST['date_out'];
$price = $_POST['price'];
$no_room = $_POST['no_room'];
$no_adult = $_POST['no_adult'];
$no_child = $_POST['no_child'];

$query ="insert into booking (book_id, book_date, date_in, date_out, price, no_room, no_adult, no_child)  values ('$book_id','$book_date','$date_in','$date_out','$price','$no_room','$no_adult', '$no_child')";
if (mysqli_query($conn, $query)) {

  echo "Booking ID :".$book_id."<br>";
  echo "Booking Date :".$book_date."<br>";
  echo "Check In :".$date_in."<br>";
  echo "Check Out :".$date_out."<br>";
  echo "Price :".$price."<br>";
  echo "Num of Room :".$no_room."<br>";
  echo "Num of Adult :".$no_adult."<br>";
  echo "Num of Children :".$no_child."<br>";
  
    echo "New record created successfully";
	
	header("location: booking_js.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
</body>
</html>
