<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{nocoderestricted - Movies} </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/style.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico">
	<link rel="apple-touch-icon" type="image/png" href="../assets/icons/movies-57.png"><!-- iPhone -->
	<link rel="apple-touch-icon" type="image/png" sizes="../72x72" href="assets/icons/movies-72.png"><!-- iPad -->
	<link rel="apple-touch-icon" type="image/png" sizes="../114x114" href="assets/icons/movies-114.png"><!-- iPhone4 -->
	<link rel="icon" type="image/png" href="../assets/icons/movies-114.png"><!-- Opera Speed Dial, at least 144×114 px -->
</head>
<body>
	<header class="">
		<nav id="nav">
			<div class="btn">
				<h1><a href="#"><span>N.C.R</span></br>nocoderestricted</a></h1>
				<div class="bg"></div>
			</div>
			<section id="main-navigation" class="navigation">
				<ul>
					<li><a href="#" class="close mobilea"><i class="fa fa-close"></i>Close</a></li>
					<li><a href="#">Code Zone</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Start a Project</a></li>
					
				</ul>
			</section>
			<div id="mobile">
				<a href="#" class="mobilea"><i class="fa fa-bars fa-3x"></i></a>
			</div>
		</nav>
		<section id="slogan">
			<h2 id="headSlogan">Top Box Office!</h2>
			<p id="subSlogan">Meet / Code / Send. Opportunities are endless.</p>
		</section>
	</header>

	<section id="movies">
		<section id="moviesearch">
			<div class="container">
				<form action="#" method="post" id="moviesearchform">
					<label for="moviesearchinput">Search for your favorite movie!</label>
					<input type="text" placeholder="What's the name of your movie?" name="moviesearchinput" id="moviesearchinput"/>
					<input type="submit" value="Submit" />
				</form>
				<section class="searchdata">
					<h3 id="results"></h3>
					<ul class="searchlist">

						<!-- <li>
							<img src="http://placekitten.com/g/120/180"/>
						</li> -->
					</ul>
				</section>
			</div>
		</section>
		<div class="container">
		</div>
		<!-- <section class="movieTile">
			
             <div class="movieinfo">
             	<img src= 'http://placekitten.com/120/177' class="movieImage">
             	<div class="movieabout">
             		<h2 class="movieTitle">Denzel Wasginton<br/><span>Runtime ( 130 minutes )</span></h2>
                	<h3 class="mpaa">MPAA Rating<br/><span>PG</span></h3>
             	</div> 
                <div class="score">
                	<div>
                		<h4>Critics Rating:</h4>
                		<span class="score-rating">Certified Fresh: 96%</span>
                	</div>
                	<div>
                		<h4>User Rating:</h4>
                		<span class="score-rating">Upright: 88%</span>
                	</div>
                </div>
        	</div>
        </section> -->
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
			a triple feaure! That's just something I enjoy doing! I apologize in advance if you're offend by this. Movie tickets is to expensive! <a href="mailto:donte@nocoderestricted.com">Feel free to e-mail me here.</a>
			</p>
			<img src="../assets/images/ada_logo_wide_b.png" alt="American Diabetes"/>
			<p>One more thing you should know about me is I'm a huge supporter of finding a cure to Diabetes (Type-1 to be exact). If you would like to donate
			to help <a href="https://donations.diabetes.org/site/Donation2?df_id=2540&2540.donation=form1&loc=wtg-slabnav&s_src=dorg&s_subsrc=one-timewtgslabnav" target="blank">please follow this link.</a> It would mean the world to me if they ever found one. </p>
		</div>
	</section>
<script src="http://cdn.jsdelivr.net/jquery/1.11.1/jquery.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/movie.js"></script>
</body>
</html>