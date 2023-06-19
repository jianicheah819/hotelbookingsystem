<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Payment</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?PHP
include ('database connected.php'); 
$pay_id=$_GET['pay_id'];
$query="SELECT * FROM payment WHERE pay_id='$pay_id'";
$result=mysqli_query($conn,$query);
$num= mysqli_num_rows($result);

$i=0;
while ($i < $num) {
$show=mysqli_fetch_assoc($result);
$pay_id=$show['pay_id'];
$pay_method=$show['pay_method'];
$pay_date=$show['pay_date'];
$pay_time=$show['pay_time'];
$pay_status=$show['pay_status'];

?>
<div class="container">
<form action="pros_update_pay.php" method="post">
  <div class="form-group">
    <label for="pay_id">Payment ID:</label>
    <input type="text" class="form-control" name="ud_pay_id" id="ud_pay_id" readonly="readonly" value="<?php echo $pay_id; ?>" />
  </div>
  <div class="form-group">
    <label for="pay_method">Payment Method:</label>
    <input type="text" class="form-control" name="ud_pay_method" id="ud_pay_method"  value="<?php echo $pay_method; ?>" />
  </div>
  
  <div class="form-group">
    <label for="pay_date">Date of Payment:</label>
    <input type="date" class="form-control" name="ud_pay_date" id="ud_pay_date"  value="<?php echo $pay_date; ?>" />
  </div>
  
    <div class="form-group">
    <label for="pay_time">Time of Payment:</label>
    <input type="time" class="form-control" name="ud_pay_time" id="ud_pay_time"  value="<?php echo $pay_time; ?>" />
  </div>
  
  <div class="form-group">
    <label for="pay_status">Payment Status:</label>
    <input type="text" class="form-control" name="ud_pay_status" id="ud_pay_status" value="<?php echo $pay_status; ?>" /> 
  </div>
  
  <button  name="SUBMIT" type="SUBMIT" class="btn btn-default">SUBMIT</button>
</form>

<?PHP
++$i;
}
?>
</body>
</html>