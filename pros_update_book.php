<?PHP include ('database connected.php'); 
$ud_book_id=$_POST['ud_book_id'];
$ud_book_date=$_POST['ud_book_date'];
$ud_date_in=$_POST['ud_date_in'];
$ud_date_out=$_POST['ud_date_out'];
$ud_price=$_POST['ud_price'];
$ud_no_room=$_POST['ud_no_room'];
$ud_no_adult=$_POST['ud_no_adult'];
$ud_no_child=$_POST['ud_no_child'];

$query="UPDATE booking SET book_date='$ud_book_date', date_in='$ud_date_in',date_out='$ud_date_out',price='$ud_price',no_room='$ud_no_room',no_adult='$ud_no_adult',no_child='$ud_no_child'
WHERE book_id='$ud_book_id'";
mysqli_query($conn,$query);
header("location:edit_delete_book.php");
mysqli_close($conn);
?>
