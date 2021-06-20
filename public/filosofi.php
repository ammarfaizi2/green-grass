<?php

require __DIR__."/../init/web.php";

?><!DOCTYPE html>
<html>
<head>
	<title>Filosofi Logo Green Grass</title>
<?php loadView("head") ?>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css?w=<?= time() ?>"/>
	<meta property="og:locale" content="en_US"/>
	<meta property="og:url" content="<?= BASE_URL ?>"/>
	<meta property="og:title" content="Filosofi Logo Green Grass"/>
	<meta property="og:description" content="Filosofi Logo Green Grass"/>
	<meta property="og:image" content="<?= BASE_URL ?>/assets/img/green_grass_logo.png"/>
	<meta name="twitter:card" content="Filosofi Logo Green Grass"/>
	<meta name="twitter:site" content="@greengrass"/>
	<meta name="twitter:title" content="Green Grass"/>
	<meta name="twitter:description" content="Filosofi Logo Green Grass"/>
	<meta name="twitter:image" content="<?= BASE_URL ?>/assets/img/green_grass_logo.png"/>
</head>
<body>
	<div id="login-cg" style="background-image: url(assets/img/bg.png);">
		<a href="index.php?ref=login&amp;w=<?= rstr(32) ?>"><button class="btn">Back to Home</button></a>
		<marquee><h2>Green Grass is the solution!</h2></marquee>
		<img id="logo" style="border-radius:100%;background:#fff;" src="assets/img/green_grass_logo.png"/>
		<div style="text-align:left;background:#fff;padding:10px 30px 10px 30px;margin-top:30px;">
			<h1 style="text-align:center;">Filosofi Logo Green Grass</h1>
			<div>
				<h3>Warna Hijau:</h3>
				<ol>
					<li>Melambangkan ketenangan.</li>
					<li>Melambangkan kesejukan.</li>
					<li>Melambangkan kesegaran.</li>
					<li>Melambangkan keaslian.</li>
				</ol>

				<h3>Warna Biru Dongker:</h3>
				<ol>
					<li>Melambangkan keunggulan.</li>
					<li>Menciptakan pemikiran yang jernih untuk para customers.</li>
					<li>Memberikan kesan solutif.</li>
					<li>Memberikan kesan ketegasan.</li>
				</ol>

				<h3>Lambang Rumah</h3>
				<ol>
					<li>Mengayomi masyarakat melalui sayur segar.</li>
					<li>Melambangkan perlindungan.</li>
				</ol>

				<h3>Daun Hijau</h3>
				<ol>
					<li>Memberikan kesan alami.</li>
					<li>Melambangkan kenyamanan dan indah dipandang.</li>
					<li>Melambangkan kesuburan dan kehidupan.</li>
				</ol>
			</div>
		</div>
	</div>
</body>
</html>
