<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<div class="col-lg-12 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Preliminary Test - kulina.id</h2>
			</div>
		</div><!--/.row-->

		<div class="form-group">
			<?php 
			echo form_open('update/'.$hasil->id);
			 ?>
			<input type="text" name="order_id" placeholder="order id" class="form-control" value="<?php echo $hasil->order_id; ?>"><br/><br/>
			<input type="text" name="product_id" placeholder="product id" class="form-control" value="<?php echo $hasil->product_id; ?>"><br/><br/>
			<input type="text" name="user_id" placeholder="user id" class="form-control" value="<?php echo $hasil->user_id; ?>"><br/><br/>
			<input type="number" name="rating" min="1" max="5" placeholder="rating" class="form-control" value="<?php echo $hasil->rating; ?>"><br/><br/>
			<textarea rows="4" cols="30" name="review" style="resize: vertical;"><?php echo $hasil->review; ?></textarea>
			<br/><br/>
			<a href="<?php echo base_url(); ?>">back</a>
			<input type="submit" name="submit" value="update">
			</form>
		</div>
	</div>
</body>
</html>