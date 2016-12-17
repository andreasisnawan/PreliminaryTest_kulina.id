<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>

	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div class="col-lg-12 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Preliminary Test - kulina.id</h2>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<a href="<?php echo base_url(); ?>index.php/kulina/create">
					create
				</a>
				<br/><br/>
			</div>
		</div>

		<?php
		if (empty($item->result())) {
		    echo "Tidak ada data barang";
		}
		else {
		?>
		<div class="row">
		<div class="col-lg-12">
		<div class="panel panel-default">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="text-left" width="30px">id</th>
					<th class="text-left" width="70px">order id</th>
					<th class="text-left" width="80px">product id</th>
					<th class="text-left" width="70px">user id</th>
					<th class="text-left" width="50px">rating</th>
					<th class="text-left" width="170px">review</th>
					<th class="text-left" width="150px">created at</th>
					<th class="text-left" width="150px">updated at</th>
					<th class="text-left" width="120px">action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($item->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id; ?></td>
					<td><?php echo $row->order_id; ?></td>
					<td><?php echo $row->product_id; ?></td>
					<td><?php echo $row->user_id; ?></td>
					<td><?php echo $row->rating; ?></td>
					<td><?php echo $row->review; ?></td>
					<td><?php echo $row->created_at; ?></td>
					<td><?php echo $row->updated_at; ?></td>
					<td class="text-center">
						<a href="<?php echo site_url('kulina/update/'.$row->id);?>">edit</a>
						<a href="<?php echo site_url('kulina/delete/'.$row->id);?>">delete</a>
						</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
		</div>
		</div>
		<?php 
		}
		 ?>
			
	</div><!--/.main-->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
