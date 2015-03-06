<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

	<head>
	
		<meta charset="UTF-8">
	
		<title>ERROR 500 - HTML EBAY</title>
	
		<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
		<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
		<script src="<?= base_url('js/prefixfree.min.js') ?>"></script>
	
	</head>

<body id="error_500">

  <div class="body"></div>
		<div class="grad"></div>

		<div class="header">
			<div><strong><span> Ups!!!</span></strong> 500<strong><span> Error interno del servidor</span></strong></div><br />
			<div class="error_500_message"><?php echo $message; ?></div><br />
		</div>
		
		<br>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>