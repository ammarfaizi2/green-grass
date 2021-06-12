<?php

require __DIR__."/../init/web.php";

?><!DOCTYPE html>
<html>
<head>
	<title>Green Grass</title>
<?php loadView("head") ?>
	<link rel="stylesheet" type="text/css" href="assets/css/index.css?w=<?= time() ?>"/>
	<meta property="og:locale" content="en_US"/>
	<meta property="og:url" content="<?= BASE_URL ?>"/>
	<meta property="og:title" content="Green Grass"/>
	<meta property="og:description" content="Our business is cost driven, because we need to gather the resources at the beginning of steps. This takes a lot of money and to build trust between us and farmers, we need to assure that we have enough funding to continue distribute their vegetables, fruits, etc."/>
	<meta property="og:image" content="<?= BASE_URL ?>/assets/img/green_grass_logo.png"/>
	<meta name="twitter:card" content="Our business is cost driven, because we need to gather the resources at the beginning of steps. This takes a lot of money and to build trust between us and farmers, we need to assure that we have enough funding to continue distribute their vegetables, fruits, etc."/>
	<meta name="twitter:site" content="@greengrass"/>
	<meta name="twitter:title" content="Green Grass"/>
	<meta name="twitter:description" content="Our business is cost driven, because we need to gather the resources at the beginning of steps. This takes a lot of money and to build trust between us and farmers, we need to assure that we have enough funding to continue distribute their vegetables, fruits, etc."/>
	<meta name="twitter:image" content="<?= BASE_URL ?>/assets/img/green_grass_logo.png"/>
</head>
<body>
	<div id="main-cage">
		<marquee><h2>Green Grass is the solution!</h2></marquee>
		<div>
			<img id="logo" src="assets/img/green_grass_logo.png"/>
		</div>
		<div>
			<div class="idxbtn-cg">
				<a href="register.php?w=<?= rstr(64) ?>"><button class="btn idxbtn">Create an account</button></a>
			</div>
			<div class="idxbtn-cg">
				<a href="login.php?w=<?= rstr(64) ?>"><button class="btn idxbtn">Login</button></a>
			</div>
		</div>
		<h1>Welcome to Green Grass!</h1>
		<div class="cdesc">
			<h3>Customer Segments</h3>
			<p>Our important customers are large parties like hotel, catering, etc. We also have general customer who order for private purpose like housewife, general teens, etc.</p>
		</div>
		<div class="cdesc">
			<h3>Key Partners</h3>
			<p>We have farmers as key partners. Farmers have the critical point for our business. Without them, our business won't run.</p>
		</div>
		<div class="cdesc">
			<h3>Revenue Streams</h3>
			<p>Our revenue streams will be dynamic pricing, because every single item has its own price. So our revenue completely depends on how much an item is sold.</p>
		</div>
		<div class="cdesc">
			<h3>Cost Structure</h3>
			<p>Our business is cost driven, because we need to gather the resources at the beginning of steps. This takes a lot of money and to build trust between us and farmers, we need to assure that we have enough funding to continue distribute their vegetables, fruits, etc.</p>
		</div>
		<div class="cdesc">
			<h3>Who are behind the Green Grass?</h3>
			<table>
				<tr><td>1.</td><td>Ammar (CEO/Founder)</td></tr>
				<tr><td>2.</td><td>Pramudia (CO-Founder)</td></tr>
				<tr><td>3.</td><td>Farezky (Business Analysis)</td></tr>
				<tr><td>4.</td><td>Nayaqiza (Marketing)</td></tr>
				<tr><td>5.</td><td>Faturrahman (Production Review)</td></tr>
				<tr><td>6.</td><td>Ari (Quality Assurance)</td></tr>
			</table>
		</div>
		<div>
			<a href="tips_dan_tutorial.php"><h1>Tips And Tutorial</h1></a>
			<a href="tips_dan_tutorial2.php"><h1>Tips And Tutorial 2</h1></a>
		</div>
		<div id="table-cage">
			<h2>Contacts and Social Media Accounts</h2>
			<table style="text-align:left;">
				<tr>
					<td>Facebook</td>
					<td>:</td>
					<td><a target="_blank" href="https://web.facebook.com/GG-Company-GreenGrass99-100309798958971?_rdc=1&_rdr">GG Company - GreenGrass99</a></td>
				</tr>
				<tr>
					<td>Twitter</td>
					<td>:</td>
					<td><a target="_blank" href="https://twitter.com/green_grass99">@green_grass99</a></td>
				</tr>
				<tr>
					<td>WhatsApp</td>
					<td>:</td>
					<td><a target="_blank" href="http://wa.me/+6288801435018">+6288801435018</a></td>
				</tr>
				<tr>
					<td>Instagram</td>
					<td>:</td>
					<td><a target="_blank" href="https://www.instagram.com/green.grass02">green.grass02</a></td>
				</tr>
				<tr>
					<td>TikTok</td>
					<td>:</td>
					<td><a target="_blank" href="https://www.tiktok.com/@green.grass02">@green.grass02</a></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
