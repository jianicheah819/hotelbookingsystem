<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Booking</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?PHP
include ('database connected.php'); 
$book_id=$_GET['book_id'];
$query="SELECT * FROM booking WHERE book_id='$book_id'";
$result=mysqli_query($conn,$query);
$num= mysqli_num_rows($result);

$i=0;
while ($i < $num) {
$show=mysqli_fetch_assoc($result);
$book_id=$show['book_id'];
$book_date=$show['book_date'];
$date_in=$show['date_in'];
$date_out=$show['date_out'];
$price=$show['price'];
$no_room=$show['no_room'];
$no_adult=$show['no_adult'];
$no_child=$show['no_child'];
?>
<div class="container">
<form action="pros_update_book.php" method="post">
  <div class="form-group">
    <label for="book_id">Booking ID:</label>
    <input type="text" class="form-control" name="ud_book_id" id="ud_book_id" readonly="readonly" value="<?php echo $book_id; ?>" />
  </div>
  <div class="form-group">
    <label for="book_date">Booking Date:</label>
    <input type="date" class="form-control" name="ud_book_date" id="ud_book_date"  value="<?php echo $book_date; ?>" />
  </div>
  
  <div class="form-group">
    <label for="date_in">Check In:</label>
    <input type="date" class="form-control" name="ud_date_in" id="ud_date_in"  value="<?php echo $date_in; ?>" />
  </div>
  
    <div class="form-group">
    <label for="date_out">Check Out:</label>
    <input type="date" class="form-control" name="ud_date_out" id="ud_date_out"  value="<?php echo $date_out; ?>" />
  </div>
  
  <div class="form-group">
    <label for="price">Price (RM):</label>
    <input type="text" class="form-control" name="ud_price" id="ud_price" value="<?php echo $price; ?>" /> 
  </div>
  
    <div class="form-group">
    <label for="no_room">Num of Room:</label>
    <input type="text" class="form-control" name="ud_no_room" id="ud_no_room"  value="<?php echo $no_room; ?>" />
  </div>
  
    <div class="form-group">
    <label for="no_adult">Num of Adult:</label>
    <input type="text" class="form-control" name="ud_no_adult" id="ud_no_adult"  value="<?php echo $no_adult; ?>" />
  </div>
  
  <div class="form-group">
    <label for="no_child">Num of Children:</label>
    <input type="text" class="form-control" name="ud_no_child" id="ud_no_child"  value="<?php echo $no_child; ?>" />
  </div>
  
  <button  name="SUBMIT" type="SUBMIT" class="btn btn-default">SUBMIT</button>
</form>

<?PHP
++$i;
}
?>
</body>
</html>