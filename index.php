<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Frontend Mentor | NFT Preview Card Component | PHP</title>

	<!-- Core Meta Data -->
	<meta name="description" content="Frontend Mentor - NFT preview card component solution." />
	<meta name="keywords" content="Frontend Mentor, NFT preview card component" />

	<!-- Behavioral Meta Data -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="favicon.png" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap" />

	<!-- Styles -->
	<link rel="stylesheet" href="css/main.css" />
</head>

<body>
	<?php
	define('TITLE', 'NFT preview card component');
	define('CARD', array(
		'title' => 'Equilibrium #3429',
		'description' => 'Our Equilibrium collection promotes balance and calm.',
		'image' => array('src' => 'images/equilibrium.jpg', 'alt' => 'Equilibrium'),
		'status' => array('ethereumAmount' => '0.041 ETH', 'remainingTime' => '3 days left'),
		'author' => array('name' => 'Jules Wyvern', 'image' => 'images/avatar.png')
	));
	?>

	<header>
		<h1 class="sr-only"><?php echo TITLE; ?></h1>
	</header>

	<main>
		<div class="container">
			<article class="card">
				<div class="card__image">
					<img src="<?php echo CARD['image']['src']; ?>" width="302" height="302" alt="<?php echo CARD['image']['alt']; ?>" />
				</div>
				<div class="card__content">
					<h2 class="card__title">
						<a href="#" class="btn btn--link"><?php echo CARD['title']; ?></a>
					</h2>
					<p class="card__desc"><?php echo CARD['description']; ?></p>
					<ul class="card__stats-list">
						<li class="card__stats-list-item">
							<i class="icon-ethereum" aria-hidden="true"></i>
							<span><?php echo CARD['status']['ethereumAmount']; ?></span>
						</li>
						<li class="card__stats-list-item">
							<i class="icon-clock" aria-hidden="true"></i>
							<span><?php echo CARD['status']['remainingTime']; ?></span>
						</li>
					</ul>
					<div class="card__author">
						<img src="<?php echo CARD['author']['image']; ?>" class="card__author-img" width="33" height="33" alt="<?php echo CARD['author']['name']; ?>" />
						<span class="card__author-desc">Creation of
							<a href="#" class="btn btn--link"><?php echo CARD['author']['name']; ?></a></span>
					</div>
				</div>
			</article>
		</div>
	</main>

	<footer>
		<div class="container">
			<p>
				Challenge by
				<a href="https://www.frontendmentor.io?ref=challenge" class="btn btn--link" rel="noopener" target="_blank">Frontend Mentor</a>. Coded by
				<a href="https://github.com/al3xback" class="btn btn--link" rel="noopener" target="_blank">al3xback</a>.
			</p>
		</div>
	</footer>
</body>

</html>
