<?PHP
$cust_id = $_GET['cust_id'];
include ('database connected.php'); 
$query = "delete from customer where cust_id ='$cust_id'";
$result = mysqli_query($conn,$query);

if ($result==TRUE)
{	echo "record successfully Deleted";
    header("location:edit_delete_cust.php");
 }
if ($result==FALSE) 
{echo "record unsuccessfully Deleted";
  header("location:edit_delete_cust.php");}
mysqli_close($conn);
?>