<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>ScoreKeeper - Game Tracker</title>

	    <?php include'../assets/include.html' ?>
  </head>
  <body>
	  	<!-- Make sure all your bars are the first things in your <body> -->
	  	<header class="bar-title">
	  		<a class="button-prev" href="#">
				Back
			</a>
	  		<h1 class="title">Team A Stats</h1>
	  	</header>

	  	<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
		<div class="content" style="height: auto;">
			<div class="stats">
				<div>
					<span class="count">4</span>
				</div>
				<div>
					<p> Stats 1 </p>
				</div>
				<div>
					<span class="count">4</span>
				</div>
			</div>
			<div class="stats-b">
				<div>
					<span class="count">4</span>
				</div>
				<div>
					<p> Stats 1 </p>
				</div>
				<div>
					<span class="count">4</span>
				</div>
			</div>
		</div>
  </body>
</html>