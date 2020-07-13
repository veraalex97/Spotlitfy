<?php
include("includes/config.php");
if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
} else {
	header("Location: register.php");
}
?>
<html>
<head>
	<title>Spotlitfy</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
	<div id="mainContainer">
	
		<div class="topContainer">
			<div id="navBarContainer">
				<nav class="navBar">
					<a href="index.php" class="logo">
						<img src="assets/images/icons/logo.png" alt="">
					</a>

					<div class="group">
						<div class="navItem">
							<a href="search.php" class="navItemLink">Search
								<img src="assets/images/icons/search.png" class="icon" alt="search">
							</a>
						</div>
					</div>
						
					<div class="group">
						<div class="navItem">
							<a href="browse.php" class="navItemLink">Browse</a>
						</div>
						<div class="navItem">
							<a href="yourMusic.php" class="navItemLink">Your Music</a>
						</div>
						<div class="navItem">
							<a href="profile.php" class="navItemLink">Profile</a>
						</div>
					</div>

				</nav>
			</div>
		</div>

		<div id="nowPlayingBarContainer">
			<div id="nowPlayingBar">
				<div id="nowPlayingLeft">
					<div class="content">
						<span class="albumLink">
							<img src="https://jooinn.com/images/square-4.jpg" alt="" class="albumArtwork">
						</span>

						<div class="trackInfo">
							<span class="trackName">
								<span>Deathfire Grasp</span>
							</span>
							<span class="artistName">
								<span>Pentakill</span>
							</span>
						</div>

					</div>
				</div>

				<div id="nowPlayingCenter">
					<div class="content playerControls">
						<div class="buttons">
							<button class="controlButton shuffle" title="shuffle button">
								<img src="assets/images/icons/shuffle.png" alt="shuffle">
							</button>

							<button class="controlButton previous" title="previous button">
								<img src="assets/images/icons/previous.png" alt="previous">
							</button>

							<button class="controlButton play" title="play button">
								<img src="assets/images/icons/play.png" alt="play">
							</button>

							<button class="controlButton pause" title="pause button" style="display:none;">
								<img src="assets/images/icons/pause.png" alt="pause">
							</button>

							<button class="controlButton next" title="next button">
								<img src="assets/images/icons/next.png" alt="next">
							</button>

							<button class="controlButton repeat" title="repeat button">
								<img src="assets/images/icons/repeat.png" alt="repeat">
							</button>
						</div>

						<div class="playbackBar">
							<span class="progressTime current">0.00</span>
							<div class="progressBar">
								<div class="progressBarBg">
									<div class="progress"></div>
								</div>
							</div>
							<span class="progressTime remaining">0.00</span>
						</div>

					</div>
				</div>

				<div id="nowPlayingRight">
					<div class="volumeBar">
						<button class="controlButton volume" title="volume button">
							<img src="assets/images/icons/volume.png" alt="volume">
						</button>
						<div class="progressBar">
								<div class="progressBarBg">
									<div class="progress"></div>
								</div>
							</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>