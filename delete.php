<?php
include "connection.php";

if (isset($_GET['productkey'])){
    $productkey=$_GET['productkey'];
    $delete=mysqli_query($conection,"DELETE FROM `test` WHERE `productkey` = '$productkey'");
}
$select ="SELECT * FROM test";
$query=mysqli_query($conection,$select);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Inventory</title>
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
    <link rel="stylesheet" href="inventory.css">
    <link rel="stylesheet" href="admin.css">
    <script src="admin.js"></script>
    <script src="try.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
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
.add {
    border-radius: 8px;
    background-color: #8ecae6;
    display: inline-block;
    padding: 15px 30px;
    font-size: 8px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    border: none;
    border-radius: 15px;
    box-shadow: 0 5px #999;
  }
  
  .add:hover {
    background-color: #8B0000;
}
  
  .add:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
  input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid blue;
}
input[type=text]:focus {
  width: 100%;
}
.btn{
    border-radius: 8px;
    background-color: #8ecae6;
    display: inline-block;
    padding: 15px 25px;
    font-size: 8px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
}
.add:hover {background-color: #3e8e41}
.delete {
    border-radius: 8px;
    background-color: #8ecae6;
    display: inline-block;
    padding: 15px 30px;
    font-size: 8px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    border: none;
    border-radius: 15px;
    box-shadow: 0 5px #999;
  }
  
  .delete:hover {background-color: #023047}
  
  .delete:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
</style>
</head>
<body>
    <div class="header">
        <a href="#default" class="logo">CompanyLogo</a>
        <div class="header-right">
            <a class="active" href="inventory.php">Inventory</a>
            <a  href="sales.php">Sales Report</a>
            <a href="index.html">Logout</a>
        </div>
      
    </div>
    <h1>Manage Inventory (DELETE)</h1>
    <button type="submit"class="delete"> <a href="delete.php"> Delete</a></button>
    <button type="submit"class="delete"><a href="update.php"> Edit</a></button>
    <a href="search.php"><button type="submit"class="delete"> Search</a></button>
    <table id='inventory' align='center'>
    <div id="wrapper">
<tr>
<th>Product Key</th>
<th>Product</th>
<th>Quantity</th>
<th>Price</th>
<th>Action </th>
</tr>
<?php
$num=mysqli_num_rows($query);

if ($num> 0){
    while ($result=mysqli_fetch_assoc($query)){
        echo "
        <tr>
        <td>".$result['productkey']."</td>
        <td>".$result['product']."</td>
        <td>".$result['quantity']."</td>
        <td>".$result['price']."</td>
        <td>
        <a href ='delete.php?productkey=".$result['productkey']."' class='btn'>Delete</a>
        </td>
        ";
    }
}
?>
</table>
</div>
</form>
</body>

</html>