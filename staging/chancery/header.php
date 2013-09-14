<?php 

//$path = "http://localhost:8888/chancery-law/v3/"
//$path = "http://macserver:8888/chancery-law/v3/"
$path = "http://minitheory.com/staging/chancery/"
?>

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width initial-scale=1" />

	<title><?php echo $title; ?></title>

	<!-- Included CSS Files -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700italic,300,400,700,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $path; ?>stylesheets/app.css">
	<!--[if IE 8]>
	<link rel="stylesheet" href="<?php echo $path; ?>stylesheets/lt-ie9.css">
	<![endif]-->

	<script src="<?php echo $path; ?>javascripts/foundation/modernizr.foundation.js"></script>



</head>
<body class="<?php if (isset($bodyClass)): echo $bodyClass; endif ?>">
	<header class="contain-to-grid">
		<nav class="top-bar">
			<ul>
				<li class="name"><a href="<?php echo $path; ?>"><img src="<?php echo $path; ?>images/logo.png" alt="Chancery Law Corporation"></a></li>
				<li class="toggle-topbar"><a href="#"></a></li>
			</ul>

			<ul class="main-nav right">
				<li class="<?php if ($thisPage == 'home') echo 'active' ?>"><a href="<?php echo $path; ?>index.php">Home</a></li>
				<li class="<?php if ($thisPage == 'about') echo 'active' ?>"><a href="<?php echo $path; ?>about.php">About us</a></li>
				<li class="<?php if ($thisPage == 'practice') echo 'active' ?>"><a href="<?php echo $path; ?>practice.php">Practice areas</a></li>
				<li class="<?php if ($thisPage == 'profiles') echo 'active' ?> has-dropdown"><a href="<?php echo $path; ?>profiles.php">Profiles</a>
					<ul class="dropdown profiles">
						<li><label>Directors</label></li>
						<li><a href="<?php echo $path; ?>profiles/chua-kern.php">Chua Kern</a></li>
						<li><a href="<?php echo $path; ?>profiles/tian-luh.php">Tan Tian Luh</a></li>
						<li><label>Associate Directors</label></li>
						<li><a href="<?php echo $path; ?>profiles/chang-min.php">Chew Chang Min</a></li>
						<li><label>Associates</label></li>
						<li><a href="<?php echo $path; ?>profiles/zixian.php">Lin Zixian</a></li>
						<li><label>Corporate Legal Executive</label></li>
						<li><a href="<?php echo $path; ?>profiles/vincent.php">Vincent Tan</a></li>
						<li class="btm"></li>
					</ul>
				</li>
				<li class="<?php if ($thisPage == 'careers') echo 'active' ?> has-dropdown"><a href="<?php echo $path; ?>careers/internship.php">Careers</a>
					<ul class="dropdown careers">
						<li><a href="<?php echo $path; ?>careers/internship.php">Internships</a></li>
						<li><a href="<?php echo $path; ?>careers/practice-trainee.php">Practice Trainees</a></li>
						<li><a href="<?php echo $path; ?>careers/dispute-associate.php">Dispute Associates</a></li>
						<li class="btm"></li>
					</ul>
				</li>
				<li class="<?php if ($thisPage == 'contact') echo 'active' ?>"><a href="<?php echo $path; ?>contact.php">Contact</a></li>
				<!-- <li class=""><a href="http://chancerylaw.tumblr.com" target='_blank'>Blog</a></li> -->
			</ul>
			<!-- <div class="right contact">(65) 6236 9350<a href="mailto:info@chanceryllc.com">info@chanceryllc.com</a></div> -->

		</nav>
	</header>