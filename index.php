<?php
include("lib/lgn.php");
var_dump($_POST);
?>
<html>
	<head>
		<title>FeenyWireless</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/fwjs.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div id="loginbox">
			<form method="post" name="postForm">
				<ul>
					<li>
            <label>Name</label>
            <input type="text" name="name" id="name" placeholder="Bruce Wayne">
            <span class="throw_error"></span>
					</li>
				</ul>
				<input type="submit" value="Send" />
			</form>
			<div id="result"></div>
			<div id="php_data"><?php echo $data; ?></div>
		</div>
	</body>
</html>
