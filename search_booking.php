<html>
<head>
	<title>  Search </title>
 
</head>
<link rel="stylesheet" media="screen" href = "/static/css/bootstrap.min.css">
<body>

<h1 align="center"> Searching </h1>

<form  action="pros_search_booking.php" method="post" >
  <div align="center"><span class="style1">Search for</span>:<br/>
    <Select NAME="searchtype">
         <Option VALUE="book_id">Booking ID</option>
         <Option VALUE="book_date">Booking Date</option>
		 <Option VALUE="date_in">Check In</option>
		 <Option VALUE="date_out">Check Out</option>
		 <Option VALUE="price">Price (RM)</option>
         <Option VALUE="no_room">Num of Room</option>
		 <Option VALUE="no_adult">Num of Adult</option> 
		 <Option VALUE="no_child">Num of Child</option> 

        
    </Select>
    <br />
Enter Search Term:<br />
<input name="searchterm" type="text" >
<br />

<input type="submit" name="search" value="Search" >
  </div>
</form>
</body>
</html>
