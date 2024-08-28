<!DOCTYPE html>
<html>
<head>
    <title>Inventory</title>
	<link rel="icon" type="image/x-icon" href="images/icon.png">
	<link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
    <link rel="stylesheet" href="inventory.css">
    <link rel="stylesheet" href="admin.css">
</head>
<?php include('order/header.php'); ?>
<body>
<div class="header">
        <a href="#default" class="logo">520 Trading</a>
        <div class="header-right">
            <a  href="inventory.php">Inventory</a>
            <a class="active" href="sales.php">Sales Report</a>
            <a href="index.html">Logout</a>
        </div>
      
    </div>
<div class="container">
	<h1 class="page-header text-center">SALES</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Date</th>
			<th>Total Sales</th>
			<th>Details</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from purchase order by purchaseid desc";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						
						<td class="text-right">&#8369; <?php echo number_format($row['total'], 2); ?></td>
						<td><a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View </a>
							<?php include('sales_modal.php'); ?>
						</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>