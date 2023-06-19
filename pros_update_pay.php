<?PHP include ('database connected.php'); 
$ud_pay_id=$_POST['ud_pay_id'];
$ud_pay_method=$_POST['ud_pay_method'];
$ud_pay_date=$_POST['ud_pay_date'];
$ud_pay_time=$_POST['ud_pay_time'];
$ud_pay_status=$_POST['ud_pay_status'];


$query="UPDATE payment SET pay_method='$ud_pay_method', pay_date='$ud_pay_date',pay_time='$ud_pay_time',pay_status='$ud_pay_status'
WHERE pay_id='$ud_pay_id'";
mysqli_query($conn,$query);
header("location:edit_delete_pay.php");
mysqli_close($conn);
?>
