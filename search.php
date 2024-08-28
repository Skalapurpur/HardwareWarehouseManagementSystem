
<DOCTYPE! html>
<html>
	<head>
		<title>PHP Search Form</title>
    <link href='https://fonts.googleapis.com/css?family=Arya' rel='stylesheet'>
		<link rel="icon" type="image/x-icon" href="images/icon.png">
	<style>
		#q {
    width: 290px;
    height: 30px;
    margin-left: 8px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;
    font-family: 'Arya';
	border-bottom: 1px solid blue;
}

#log {
    width: 7%;
    height: 30px;
    margin-left: 50px;
    border: none;
    border-radius: 17px;
    padding-left: 20px;
    color: aliceblue;
    cursor: pointer;
    background-color: #8ecae6;
    font-family: 'Arya';
}
#inventory {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#inventory td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#inventory tr:nth-child(even){background-color: #C5C5C5;}

#inventory tr:hover {background-color: #8ecae6;}

#inventory th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #023047;
  color: white;
}
	</style>
	</head>
	<body>
		<form method="post" action="search.php">
			<input type="text" name="q" id="q" placeholder="Search Query...">
			<select name="column">
				<option value="">Select Filter</option>
				<option value="productid">Product ID</option>
				<option value="productname">Product</option>
				<option value="price">Price</option>
			</select>
			<input type="submit" name="submit" id="log" value="Find">
			<a href="inventory.php"><button type="submit" id="log" class="delete"> Back</a></button>
			<table id='inventory' align='center'>
    <div id="wrapper">
<tr>
<th>Product ID</th>
<th>Product</th>
<th>Price</th>
</tr>
</div>
		</form>
	</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$connection = new mysqli("localhost", "root", "", "my_db");
		$q = $connection->real_escape_string($_POST['q']);
		$column = $connection->real_escape_string($_POST['column']);

		if ($column == "" || ($column != "productid" && $column != "productname"&& $column != "price"))
			$column = "productid";

		$sql = $connection->query("SELECT `productid`, `productname`,`price` FROM product WHERE $column LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			while ($data = $sql->fetch_array())
			echo "<tr><td>".$data["productid"]."</td><td>".$data["productname"]."</td><td>".$data["price"]."</td>";
		} else
			echo "Your search query doesn't match any data!";
	}
?>