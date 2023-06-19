<?PHP include ('database connected.php'); 
$ud_cust_id=$_POST['ud_cust_id'];
$ud_cust_name=$_POST['ud_cust_name'];
$ud_cust_ic=$_POST['ud_cust_ic'];
$ud_cust_passport=$_POST['ud_cust_passport'];
$ud_cust_gender=$_POST['ud_cust_gender'];
$ud_cust_email=$_POST['ud_cust_email'];
$ud_cust_phone=$_POST['ud_cust_phone'];

$query="UPDATE customer SET cust_name='$ud_cust_name', cust_ic='$ud_cust_ic',cust_passport='$ud_cust_passport',cust_gender='$ud_cust_gender',cust_email='$ud_cust_email',cust_phone='$ud_cust_phone' 
WHERE cust_id='$ud_cust_id'";
mysqli_query($conn,$query);
header("location:edit_delete_cust.php");
mysqli_close($conn);
?>
