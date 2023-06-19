<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Booking List</title>
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>

<link rel="stylesheet" type="text/css" href="../menu/pro_dropdown_3/pro_dropdown_3.css" />

<script src="../menu/pro_dropdown_3/stuHover.js" type="text/javascript"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
   .inline{   
    display: inline-block;   
    float: right;   
    margin: 20px 0px;   
    }   
  .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
        </style>
</head>
<body>
<?PHP
 //include('../menu/main_menu.php'); 
$per_page_record =5;
 if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
        $start_from = ($page-1) * $per_page_record; 
		
include ('database connected.php');
$sql="SELECT * from booking ORDER BY book_id ASC LIMIT $start_from, $per_page_record";
$result_data = mysqli_query($conn, $sql);

?>

<P><strong><center> Booking Lists</strong></center>
<table class="table table-hover" border="1" width="849" align="center" cellspacing="2" cellpadding="2">
  <thead>
<tr>
<td align="center" bgcolor="#FFB6C1"><strong>Booking ID</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Booking Date</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Check In</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Check Out</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Price (RM)</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Num of Room</strong></td> 
<td align="center" bgcolor="#FFB6C1"><strong>Num of Adult</strong></td> 
<td align="center" bgcolor="#FFB6C1"><strong>Num of Children</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Edit</strong></td>
<td align="center" bgcolor="#FFB6C1"><strong>Delete</strong></td>
</tr>
  </thead>
<?PHP
while ($row=mysqli_fetch_array($result_data))
{
echo "<tr>";
$book_id=$row["book_id"];
echo "<td>" .$row["book_id"]. "</td>";
echo "<td>" .$row["book_date"]. "</td>";
echo "<td>" .$row["date_in"]."</td>";
echo "<td>" .$row["date_out"]."</td>";
echo "<td>" .$row["price"]."</td>";
echo "<td>" .$row["no_room"]."</td>";
echo "<td>" .$row["no_adult"]."</td>";
echo "<td>" .$row["no_child"]."</td>";
echo "<td>","<a href=\"form_update_book.php?book_id=$book_id\">Edit</a>";
echo "<td>","<a href=\"pros_delete_book.php?book_id=$book_id\">Delete</a>";


}
echo "</table>";
echo "<center>";
echo "<br>";

?>

<div class="pagination">
<?php
$total_pages_sql= "SELECT COUNT(*) FROM booking";
$result = mysqli_query($conn, $total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
echo "</br>";   
$total_pages = ceil($total_rows / $per_page_record);   
  $pagLink = "";       
      if($page>=2){   
            echo "<a href='edit_delete_book.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='edit_delete_book.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='edit_delete_book.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='edit_delete_book.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  

 <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>  
  <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'edit_delete_book.php?page='+page;   
    }   
  </script> 
</body>
</html>