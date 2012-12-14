<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ScoreKeeper - Game Tracker</title>
    <?php include'../assets/include.html' ?>
    <style type="text/css">
    	.center {
    		text-align: center; 
    		width: 100%;
    		margin-left: -12%; 
    		margin-top: 1em;
    	}
    </style>
  </head>
  <body ontouchstart>
  <!-- Make sure all your bars are the first things in your <body> -->
  <header class="bar-title game-bar">
  	<div>
		<a class="but-none-left" href="tracker.html" data-transition="slide-in">H</a>
	</div>
	<div class="center">
		<a class="but-none-center" id="score" href="tracker.html" data-transition="slide-in">00:00</a>
	</div>
	<div>
		<a class="but-none-right" href="tracker.html" data-transition="slide-in">A</a>
	</div>
  </header>
  <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
	  <div class="content" style="top: 70px; height: 100%">
		<div style="width: 49%; height: 100%; float: left; border-right: 1px solid;">
			<div class="player-container">
				<img src="">
				<div class="player-name"></div>
			</div>
		</div>
		<div style="width: 49%; height: 100%; float: left;">
			<div class="player-container"></div>
			<img src="" alt="">
			<div class="player-name"></div>
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