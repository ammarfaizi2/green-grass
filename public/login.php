<?php

require __DIR__."/../init/web.php";

?><!DOCTYPE html>
<html>
<head>
	<title>Login to Green Grass</title>
<?php loadView("head") ?>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css?w=<?= time() ?>"/>
	<meta property="og:locale" content="en_US"/>
	<meta property="og:url" content="<?= BASE_URL ?>"/>
	<meta property="og:title" content="Login to Green Grass"/>
	<meta property="og:description" content="Login to Green Grass"/>
	<meta property="og:image" content="<?= BASE_URL ?>/assets/img/green_grass_logo.png"/>
	<meta name="twitter:card" content="Login to Green Grass"/>
	<meta name="twitter:site" content="@greengrass"/>
	<meta name="twitter:title" content="Green Grass"/>
	<meta name="twitter:description" content="Login to Green Grass"/>
	<meta name="twitter:image" content="<?= BASE_URL ?>/assets/img/green_grass_logo.png"/>
</head>
<body>
	<div id="login-cg">
		<a href="index.php?ref=login&amp;w=<?= rstr(32) ?>"><button class="btn">Back to Home</button></a>
		<marquee><h2>Green Grass is the solution!</h2></marquee>
		<div>
			<form action="javascript:void(0);" id="login-form">
					<h1>Login to Green Grass</h1>
					<img id="logo" src="assets/img/green_grass_logo.png"/>
					<div class="input-cg">
						<div class="input-label">Username or E-mail:</div>
						<div><input type="text" name="username" required="1"/></div>
					</div>
					<div class="input-cg">
						<div class="input-label">Password:</div>
						<div><input type="password" name="password" required="1"/></div>
					</div>
					<div class="input-cg">
						<div><input class="btn" type="submit" name="login" value="Login"/></div>
					</div>
			</form>
		</div>
	</div>
</body>
</html>
