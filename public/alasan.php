<?php

require __DIR__."/../init/web.php";

?><!DOCTYPE html>
<html>
<head>
	<title>Alasan Memilih Nama Green Grass</title>
<?php loadView("head") ?>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css?w=<?= time() ?>"/>
	<meta property="og:locale" content="en_US"/>
	<meta property="og:url" content="<?= BASE_URL ?>"/>
	<meta property="og:title" content="Alasan Memilih Nama Green Grass"/>
	<meta property="og:description" content="Alasan Memilih Nama Green Grass"/>
	<meta property="og:image" content="<?= BASE_URL ?>/assets/img/green_grass_logo.png"/>
	<meta name="twitter:card" content="Alasan Memilih Nama Green Grass"/>
	<meta name="twitter:site" content="@greengrass"/>
	<meta name="twitter:title" content="Green Grass"/>
	<meta name="twitter:description" content="Alasan Memilih Nama Green Grass"/>
	<meta name="twitter:image" content="<?= BASE_URL ?>/assets/img/green_grass_logo.png"/>
</head>
<body>
	<div id="login-cg" style="background-image: url(assets/img/bg.png);">
		<a href="index.php?ref=login&amp;w=<?= rstr(32) ?>"><button class="btn">Back to Home</button></a>
		<marquee><h2>Green Grass is the solution!</h2></marquee>
		<img id="logo" style="border-radius:100%;background:#fff;" src="assets/img/green_grass_logo.png"/>
		<div style="text-align:left;background:#fff;padding:10px 30px 10px 30px;margin-top:30px;">
			<h1 style="text-align:center;">Alasan Memilih Nama Green Grass</h1>
			<ol>
				<li>Grass yang berarti rumput, mewakilkan tumbuh-tumbuhan, hal teresbut sejalan dengan produk kami yaitu sayur dan buah.</li>
				<li>Green yang berarti hijau, mewakilkan kesegaran produk.</li>
				<li>Penggunaan bahasa Inggris agar menarik perhatian internasional.</li>
			</ol>
		</div>
	</div>
</body>
</html>
