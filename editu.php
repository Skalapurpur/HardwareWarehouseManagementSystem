<?php
	include('connection.php');
    $id=$_GET['id'];
	$product=$_POST['product'];
	$quantity=$_POST['quantity'];
	$price=$_POST['price'];
 
	mysqli_query($conection,"UPDATE `test` SET product='$product', quantity='$quantity',price='$price' where productkey='$id'");
	header('location:update.php');
?>