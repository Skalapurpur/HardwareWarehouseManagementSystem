<?php
	include('connection.php');
	$id=$_GET['id'];
	$query=mysqli_query($conection,"SELECT * from `test` where 'productkey'='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Update</title>
<link rel="stylesheet" href="css/update.css">
</head>
<body>
<div class="center">
    <h1>Update</h1>
    <form action="updates.php" method="POST">
    <div class="txt_field">
          <input type="text" id="list" name="list" required>
		  <input type="text" id="list" name="list" required>
		  <input type="text" id="list" name="list" required>
          <span></span>
        </div>
        <button type="submit" name="update">Update</button>
        <br><br><br>
</div>
	</form>
</body>
</html>