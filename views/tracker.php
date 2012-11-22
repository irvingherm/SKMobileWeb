<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ScoreKeeper - Game Tracker</title>

    <?php include'../assets/include.html' ?>
  </head>
  <body>
  <!-- Make sure all your bars are the first things in your <body> -->
  <header class="bar-title game-bar">
  	<div>
		<a class="but-none-left" href="tracker.html" data-transition="slide-in">H</a>
		<div class="team-score">5</div>
	</div>
	<div style="text-align: center; width: 100%; margin-left: -12%; margin-top: 1em;">
		<a class="but-none-center" href="tracker.html" data-transition="slide-in">00:00</a>
	</div>
	<div>
		<a class="but-none-right" href="tracker.html" data-transition="slide-in">A</a>
		<div class="team-score" style="right: 1.1em; float: left;">4</div>
	</div>
  </header>

  <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
	  <div class="content" style="top: 70px; height: 100%">
		<div style="width: 49%; height: auto; float: left; border-right: 1px solid;">
			<ul class="list">
			</ul>
		</div>
		<div style="width: 49%; height: auto; float: left;">
			<ul class="list">
			</ul>
		</div>
	  </div>
	  <div id="myPopover" style="top: 90px;"class="popover">
		  <header class="popover-header">
		    <h3 class="title">Player Name</h3>
		    <a class="button" href="#">
		      Undo
		    </a>
		  </header>
		  <div id="stats" class="pop-body" >
		  </div>
	</div>
  </body>
</html>