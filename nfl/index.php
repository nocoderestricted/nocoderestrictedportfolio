<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='NFL' />
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>{nocoderestricted}</title>
    <meta name="description" content="{nocoderestricted}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 8]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<meta name="author" content="Donte'Trumble">
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
</head>
<body class="">
 <!-- Begin of yurlWrap -->
<div id="yurlWrap">
	<header class="">
		<nav id="nav">
			<div class="btn">
				<h1><a href="#"><span>N.C.R</span></br>nocoderestricted</a></h1>
				<div class="bg"></div>
			</div>
			<section>
				<ul>
					<li><a href="#">Code Zone</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Start a Project</a></li>
				</ul>
			</section>
		</nav>
		<section id="slogan">
			<h2 id="headSlogan">Who doesn‘t want to be on the Internet?</h2>
			<p id="subSlogan">Meet / Code / Send. Opportunities are endless.</p>
		</section>
	</header>
	
	<section id="nfl">
		<section>
			<div>
				<h3><span>Raven</span> v. <span>Steelers</span></h3>
			</div>
			
		</section>
	</section>
</div>
 <!-- End of yurlWrap -->
<!-- scripts -->

<script src="http://cdn.jsdelivr.net/jquery/1.11.1/jquery.js"></script>
<script src="../assets/js/nfl.js"></script>
</body>
</html>
<?php COUCH::invoke(); ?>