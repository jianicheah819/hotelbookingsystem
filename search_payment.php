<html>
<head>
	<title>  Search </title>
 
</head>
<link rel="stylesheet" media="screen" href = "/static/css/bootstrap.min.css">
<body>

<h1 align="center"> Searching </h1>

<form  action="pros_search_payment.php" method="post" >
  <div align="center"><span class="style1">Search for</span>:<br/>
    <Select NAME="searchtype">
         <Option VALUE="pay_id">Payment ID</option>
         <Option VALUE="pay_method">Payment Method</option>
		 <Option VALUE="pay_date">Date of Payment</option>
		 <Option VALUE="pay_time">Time of Payment</option>
		 <Option VALUE="pay_status">Payment Status</option>


        
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
