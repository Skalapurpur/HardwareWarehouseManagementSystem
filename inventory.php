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
</head>
<?php include('order/header.php'); ?>
<body>
    <div class="header">
        <a href="#default" class="logo">520 Trading</a></a>
        <div class="header-right">
            <a class="active" href="inventory.php">Inventory</a>
            <a  href="sales.php">Sales Report</a>
            <a href="index.html">Logout</a>
        </div>
</div>

<div class="container">
	<h1 class="page-header text-center">PRODUCTS CRUD</h1>
	<div class="row">
		<div class="col-md-12">
			
			<a href="#addproduct" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Product</a><br><br>
      <a href="search.php" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</a>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Product Name</th>
				<th>Price</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					$where = "";
					if(isset($_GET['category']))
					{
						$catid=$_GET['category'];
						$where = " WHERE product.categoryid = $catid";
					}
					$sql="select * from product left join category on category.categoryid=product.categoryid $where order by product.categoryid asc, productname asc";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							
							<td><?php echo $row['productname']; ?></td>
							<td>&#8369; <?php echo number_format($row['price'], 2); ?></td>
							<td>
								<a href="#editproduct<?php echo $row['productid']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deleteproduct<?php echo $row['productid']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('product_modal.php'); ?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include('order/modal.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#catList").on('change', function(){
			if($(this).val() == 0)
			{
				window.location = 'inventory.php';
			}
			else
			{
				window.location = 'inventory.php?category='+$(this).val();
			}
		});
	});
</script>
</body>
</html>


