<!DOCTYPE html>
<html>

	<head>
	
		<meta charset="UTF-8">
	
		<title>Acceder - HTML EBAY</title>
	
		<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
		<link rel="stylesheet" href="<?= base_url('font-awesome-4.3.0/css/font-awesome.min.css') ?>">
		<script src="<?= base_url('js/prefixfree.min.js') ?>"></script>
	
	</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>
		
		<?php if(validation_errors() OR isset($error)): ?>
		
			<div class="error">
				
				<div>
					houston tenemos un problema <span><i class="fa fa-rocket"></i></span>
					<?= validation_errors(); ?>
					<?php if(isset($error)) echo $error; ?>
				</div>
				
			</div>
		
		<?php endif; ?>
		
		<div class="header">
			<div>HTML<strong><span>ebay</span></strong></div>
		</div>
		
		<br>
		<div class="login">
			
			<form method="post">
				
				<input type="text" placeholder="usuario" name="login" value="<?= set_value('login'); ?>"><br>
				<input type="password" placeholder="contraseña" name="password"><br>
				<input type="submit" value="Acceder" name="submit_login">
				
			</form>
			
		</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>