<?PHP
$book_id = $_GET['book_id'];
include ('database connected.php'); 
$query = "delete from booking where book_id ='$book_id'";
$result = mysqli_query($conn,$query);

if ($result==TRUE)
{	echo "record successfully Deleted";
    header("location:edit_delete_book.php");
 }
if ($result==FALSE) 
{echo "record unsuccessfully Deleted";
  header("location:edit_delete_book.php");}
mysqli_close($conn);
?>