<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Customer</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?PHP
include ('database connected.php'); 
$cust_id=$_GET['cust_id'];
$query="SELECT * FROM customer WHERE cust_id='$cust_id'";
$result=mysqli_query($conn,$query);
$num= mysqli_num_rows($result);

$i=0;
while ($i < $num) {
$show=mysqli_fetch_assoc($result);
$cust_id=$show['cust_id'];
$cust_name=$show['cust_name'];
$cust_ic=$show['cust_ic'];
$cust_passport=$show['cust_passport'];
$cust_gender=$show['cust_gender'];
$cust_email=$show['cust_email'];
$cust_phone=$show['cust_phone'];
?>
<div class="container">
<form action="pros_update_cust.php" method="post">
  <div class="form-group">
    <label for="cust_id">Customer ID:</label>
    <input type="text" class="form-control" name="ud_cust_id" id="ud_cust_id" readonly="readonly" value="<?php echo $cust_id; ?>" />
  </div>
  <div class="form-group">
    <label for="cust_name">Name:</label>
    <input type="text" class="form-control" name="ud_cust_name" id="ud_cust_name"  value="<?php echo $cust_name; ?>" />
  </div>
  
  <div class="form-group">
    <label for="cust_ic">IC:</label>
    <input type="text" class="form-control" name="ud_cust_ic" id="ud_cust_ic"  value="<?php echo $cust_ic; ?>" />
  </div>
  
    <div class="form-group">
    <label for="cust_passport">Passport:</label>
    <input type="text" class="form-control" name="ud_cust_passport" id="ud_cust_passport"  value="<?php echo $cust_passport; ?>" />
  </div>
  
  <div class="form-group">
    <label for="cust_gender">Gender:</label>
    <input type="text" class="form-control" name="ud_cust_gender" id="ud_cust_gender" readonly="readonly" value="<?php echo $cust_gender; ?>" /> 
  </div>
  
    <div class="form-group">
    <label for="cust_email">Email:</label>
    <input type="text" class="form-control" name="ud_cust_email" id="ud_cust_email"  value="<?php echo $cust_email; ?>" />
  </div>
  
    <div class="form-group">
    <label for="cust_phone">Phone:</label>
    <input type="text" class="form-control" name="ud_cust_phone" id="ud_cust_phone"  value="<?php echo $cust_phone; ?>" />
  </div>
  
  <button  name="SUBMIT" type="SUBMIT" class="btn btn-default">SUBMIT</button>
</form>

<?PHP
++$i;
}
?>
</body>
</html>