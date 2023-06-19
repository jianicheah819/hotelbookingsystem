<?PHP
$pay_id = $_GET['pay_id'];
include ('database connected.php'); 
$query = "delete from payment where pay_id ='$pay_id'";
$result = mysqli_query($conn,$query);

if ($result==TRUE)
{	echo "record successfully Deleted";
    header("location:edit_delete_pay.php");
 }
if ($result==FALSE) 
{echo "record unsuccessfully Deleted";
  header("location:edit_delete_pay.php");}
mysqli_close($conn);
?>