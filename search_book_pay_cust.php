<html>
<head>
	<title>  Search </title>
 
</head>
<link rel="stylesheet" media="screen" href = "/static/css/bootstrap.min.css">
<body>

<h1 align="center"> Searching </h1>

<form  action="pros_search_book_pay_cust.php" method="post" >
  <div align="center"><span class="style1">Search for</span>:<br/>
    <Select NAME="searchtype">
         <Option VALUE="cust_id">Customer ID</option>
         <Option VALUE="cust_name">Name</option>
         <Option VALUE="cust_email">Email</option>
		 <Option VALUE="cust_phone">Phone</option> 
         <Option VALUE="book_id">Booking ID</option>
        <Option VALUE="date_in">Check In</option>
       <Option VALUE="date_out">Check Out</option>
        
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
