<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
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
			echo form_open('create');
			 ?>
			<input type="text" name="order_id" placeholder="order id" class="form-control"><br/><br/>
			<input type="text" name="product_id" placeholder="product id" class="form-control"><br/><br/>
			<input type="text" name="user_id" placeholder="user id" class="form-control"><br/><br/>
			<input type="number" name="rating" min="1" max="5" placeholder="rating" class="form-control"><br/><br/>
			<textarea rows="4" cols="30" name="review" style="resize: vertical;" class="form-control">Enter review here...</textarea>
			<br/><br/>
			<a href="<?php echo base_url(); ?>">back</a>
			<input type="submit" name="submit" value="commit create" >
			</form>
		</div>
	</div>
</body>
</html>