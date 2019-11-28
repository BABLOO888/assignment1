<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">

</head>
<body>
	<h1 id="dash-head">Welcome to Dashboard</h1>
	<div class="text"><p><?php echo $this->session->flashdata('msg')?></p></div>

		<div id="container">
			<?php echo form_open('admin/formdata'); ?>
			<div class="text"><h1>Login Form</h1></div>
			<div class="text"><p><?php //echo $this->session->flashdata('msg')?></p></div>
			<div class="text"><h2>Email</h2></div>
			<input class="f-data" type="email" name="email" placeholder="Email">
			<div class="text"><h2>Password</h2></div>
	        <input class="f-data" type="password" name="pswd" placeholder="Password">
	        <button id="submit-btn" type="submit">Submit</button>
	        
	        <?php echo form_close(); ?>
		</div>
	</div>
</body>
</html>