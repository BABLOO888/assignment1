<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login page</title>
	<style type="text/css">
		body{
			background-image: url(<?php echo base_url(); ?>/assets/image/fall.jpg);
			background-size: cover;
			background-repeat: no-repeat;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">

</head>
<body>
	    
		<div id="container">
			<?php echo form_open('admin/formdata'); ?>
			<div class="text"><h1>Form</h1></div>
			<div class="text"><p><?php echo $this->session->flashdata('msg')?></p></div>
			<div class="text"><h2>Name</h2></div>
			<input class="f-data" type="text" name="name" placeholder="Name">
			<div class="text"><h2>Mobile</h2></div>
			<input class="f-data" type="number" name="mobile" placeholder="Mobile">
			<div class="text"><h2>Email</h2></div>
			<input class="f-data" type="email" name="email" placeholder="Email">
			<div class="text"><h2>Password</h2></div>
	        <input class="f-data" type="password" name="pswd" placeholder="Password">
	        <button id="submit-btn" type="submit">Submit</button>
	        <?php echo form_close(); ?>
		</div>
</body>
</html>