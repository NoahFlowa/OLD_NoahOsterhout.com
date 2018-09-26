<!doctype html>
<html lang="en">

<head>

	<!-- 
      Hey!  You found my source code!  Lucky you!  See my handywork and
      different things I use to create my websites!  I use the PHP include
      so thats why the formatting is a little wonk on here but check out:
      my GitHub or GitLab accounts for the formatted Source Code!
    -->

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Noah Osterhout</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<!-- FontAwesome 4 CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- FontAwesome 5 CDN -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<!-- Google Fonts API | Open Sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="main.css">
	<!-- Custom JS -->
	<script src="main.js"></script>

	<style>
		.card-footer {
			background-color: #22c2fc;
			color: #FFFFFF;
		}
		
		.text-muted {
			background-color: #22c2fc;
			color: #FFFFFF !important;
		}
	</style>

</head>

<body class="container-fluid">
	<div class="row">
		<!-- This Div section is never used, only to create half-wide website -->
		<div class="col-md-1">
		</div>
		<!-- This Div section contains all body content -->
		<div class="col-md-10">

			<!-- Navbar-->
			<?php require 'navbar.php'; ?>

			<!-- Jumbotron-->
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h1 class="display-3"><strong><span style="color: #22c2fc;">B</span>logs</strong></h1>
					<p class="display-4 lead"><strong>Not Just Another <span style="color: #22c2fc;">B</span>log</strong>
					</p>
				</div>
			</div>

			<div class="card-deck">
				<div class="card">
					<!-- <img class="card-img-top" src="/Images/Blog-Images/iPhoneXS.png" style="height:	180px; width: 220px; background-color: #101317" alt="iPhone XS Minimal"> -->
					<div class="card-body">
						<h5 class="card-title"><a href="/ahh-shit.php">iPhone XS Max Review</a></h5>
						<p class="card-text">Does this years iPhone XS Max stand up to all the hype or does it fall short.  Is it really worth the $1100 starting price?  Read more to find out.</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">Published: September 27th, 2018</small>
					</div>
				</div>
				<div class="card">
					<!-- <img class="card-img-top" src="/Images/Blog-Images/iPhoneXS.png" style="height:	180px; width: 220px; background-color: #101317" alt="iPhone XS Minimal"> -->
					<div class="card-body">
						<h5 class="card-title">Apple October Event?</h5>
						<p class="card-text">Apple didn't release any new iPads or even a refreash of their Macs but could a leak in iOS Setup prove their is an October event coming up?  Read more to find out!</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">Published: September 28th, 2018</small>
					</div>
				</div>
				<div class="card">
					<!-- <img class="card-img-top" src="/Images/Blog-Images/iPhoneXS.png" style="height:	180px; width: 220px; background-color: #101317" alt="iPhone XS Minimal"> -->
					<div class="card-body">
						<h5 class="card-title">iPhone XS Max Case Review</h5>
						<p class="card-text">So you just bought that new iPhone, but wait, it's dangerous to go out without a case!  I review a few cases that were early to market and make the Max look good.</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">Published: October 4th, 2018</small>
					</div>
				</div>
			</div>

			<br>
			<br>
			<br>
			<br>
			<br>

			<!-- Footer-->
			<?php require 'footer.php'; ?>

			<br>

		</div>

		<!-- This Div section is never used, only to create half-wide website -->
		<div class="col-md-1">
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>

</html>