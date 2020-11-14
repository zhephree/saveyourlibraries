<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/css/reboot.css">
	<link rel="stylesheet" href="https://use.typekit.net/jxw8ztc.css">
	<link rel="stylesheet" type="text/css" href="/css/site.css">
	<script src="https://kit.fontawesome.com/437c873b60.js" crossorigin="anonymous"></script>
	<title><?= !empty($page_title)? $page_title . ' - ': '' ?>#SaveYourLibraries</title>
</head>
<body class="page-<?= $active_page ?>">
	<header class="blue">
		<nav>
			<img src="/img/logo.png" id="subpage-logo">
			<a href="/">Home</a>
			<a href="/toolkit">Toolkit</a>
			<a href="/comment">Public Comment</a>
			<a href="/facts">Facts</a>
			<a href="/resources">Resources</a>
			<a href="/about">About</a>
		</nav>

		<nav id="mobile-nav">
			<a href="#" class="btn btn-white full-width text-blue" id="mobile-nav-toggle"><i class="fad fa-bars"></i> Menu</a>
			<div id="mobile-nav-menu">
				<a href="/">Home</a>
				<a href="/toolkit">Toolkit</a>
				<a href="/comment">Public Comment</a>
				<a href="/facts">Facts</a>
				<a href="/resources">Resources</a>
				<a href="/about">About</a>
			</div>
		</nav>
		<div id="mobile-nav-scrim"></div>
		<img src="/img/logo.png" id="logo">
	</header>
	<main>