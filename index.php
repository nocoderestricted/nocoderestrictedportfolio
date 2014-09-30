<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home Page' />
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800,300' rel='stylesheet' type='text/css'>

	<!-- Facebook Stuff -->
	<meta property="og:site_name" content="nocoderestricted" />
	<meta property="og:type" content="HomePage" />
	<meta property="og:title" itemprop="name" content="{nocoderestricted} Learning and Coding is I do!" />
	<meta property="og:description" itemprop="description" content="#" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:image" itemprop="image" content="#" />
	<meta property="og:url" itemprop="url" content="<cms:show k_site_link />" />

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', '', 'auto');
	  ga('send', 'pageview');
	</script>
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
	<section id="verbiage">
		<div class="container">
			<cms:editable name='home_page_verbiage_content' type='richtext'>
				<p></p>
			</cms:editable>
		</div>
	</section>

	<section id="work">
		<h3>Work</h3>
		<div>
			<ul>
				<li>
					
					<a href="#">
						<img src="assets/images/temp2.jpg" title="#" alt="hi">
						<div>
							<h4><i class="fa fa-globe"></i>futurehitsonline.com</h4>
							<p><span>Type:</span>Photography</p>
							<p><span>Colors:</span><span class="coloredsquare"></span><span class="coloredsquare"></span><span class="coloredsquare"></span></p>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/images/temp.jpg" title="#" alt="hi">
						<div>
							<h4><i class="fa fa-globe"></i>empoweringwomenschatchew.com</h4>
							<p><span>Type:</span>Photography</p>
							<p><span>Colors:</span><span class="coloredsquare"></span><span class="coloredsquare"></span><span class="coloredsquare"></span></p>
						</div>

					</a>
				</li>
				<!-- <li>
					<a href="#">
						<img src="assets/images/temp.jpg" title="#" alt="hi">
							<div>
								<h4><i class="fa fa-globe"></i>nocoderestricted.com</h4>
								<p><span>Type:</span>Photography</p>
								<p><span>Colors:</span><span class="coloredsquare"></span><span class="coloredsquare"></span><span class="coloredsquare"></span></p>

							</div>
					</a -->>
				</li>
			</ul>
		</div>
	</section>
	

	<section id="steps">
		<div class="container">
			<div class="moresteps color-1">
				<i class="fa fa-eye"></i>
				<h3>The Stare Down</h3>
				<p>Meeting with you to get a general idea of what you’re looking for in the project. Have about a 30 minute to an hour conference call.</p>
			</div>

			<div class="moresteps color-2">
				<i class="fa fa-code"></i>
				<h3>The Development</h3>
				<p>This is where the magic happens. Gather up all the information that you provided to me and put and put together wireframe for you to approve. Then we'll do a design composition for you to approve as well.</p>
			</div>

			<div class="moresteps color-3">
				<i class="fa fa-file-code-o"></i>
				<h3>The Turn Out</h3>
				<p>The Final Product! Let you see the project to make sure everything is fine and up running to your standards. Once you give the OK. I'll hand over the files to you.</p>
			</div>
		</div>
	</section>

	<section id="contact-form">
	<h3>Start A Project</h3>
	<div id="errors">
		<div class="container">
			<p>You messed up somewhere! Let's try again.</p>
		</div>
		
	</div>
	<div id="succuess-errors">
		<div class="container">
			<p>I have recieved your message! Give me up to 24 hours for a response.</p>
		</div>
		
	</div>
		<div class="container">
			
			<cms:editable name="contact_intro" label="intro text" type="richtext">
				<p>Plese contact me</p>
			</cms:editable>
			
			<form id="contact" action="#" method="post">
					<div>
						<span><i class="fa fa-user"></i></span>
						<input type="text" name="name" id="name" placeholder='Name*'/>

					</div>
					
					<div>
						<span><i class="fa fa-envelope"></i></span>
						<input type="text" name="email" id="email" placeholder="Email*"/>

					</div>

					<div>
						<span><i class="fa fa-file-code-o"></i></span>
						<input type="text" name="website" id="website" placeholder="Your Current Website"/>
					</div>
					<div>
						<span><i class="fa fa-money"></i></span>
						<input type="text" name="budget" id="budget" placeholder="Your Projects Budget*"/>
					</div>

					<textarea placeholder="Tell us about your project!" name="comment" id="comment"></textarea>
					
					<input type="submit" id="submit" value="Submit" />
			</form>
		</div>
		
	</section>

	<section id="friends">
		<h4><span class="fa fa-comment-o"></span>Wanna Just talk?</h4>
		<div class="container">
			<p>Feel free to! I'm not anti-social. But, I'm probably sitting in the movie theater for 6 or more hours  seeing a double or 
			a triple feaure! That's just something I enjoy doing! I apologize in advance if you're offend by this. Movie tickets is to expensive! <a href="#">Feel free to e-mail me here.</a>
			</p>
		</div>
	</section>
</div>
 <!-- End of yurlWrap -->
<!-- scripts -->

<script src="http://cdn.jsdelivr.net/jquery/1.11.1/jquery.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>
<?php COUCH::invoke(); ?>