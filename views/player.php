<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ScoreKeeper - Team Player Menu</title>

    <?php include'../assets/include.html' ?>
  </head>
  <body>

  <!-- Make sure all your bars are the first things in your <body> -->
  <header class="bar-title">
	<a href="soccer.html" class="button-prev" data-transition="slide-out">Back</a>
	<h1 class="title">Team A</h1>
	<a class="button-next" href="tracker.html" data-transition="slide-in">Next</a>
  </header>

  <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
	  <div class="content">
		<form style="padding: 10px;">
		  <div class="input-group" style="border-radius">
		    <div class="input-row">
		      <label>Player Name </label>
		      <select id="player1" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		      <select id="postions1" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		    </div>
		    <div class="input-row">
		      <label>Player Name </label>
		      <select id="player2" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		      <select id="postions2" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		    </div>
		    <div class="input-row">
		      <label>Player Name </label>
		      <select id="player3" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		      <select id="postions3" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		    </div>
		    <div class="input-row">
		      <label>Player Name </label>
		      <select id="player4" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		      <select id="postions4" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		    </div>
		    <div class="input-row">
		      <label>Player Name </label>
		      <select id="player5" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		      <select id="postions5" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		    </div>
		  </div>
		</form>
		<a style="margin: 10px;" class="button button-block">Start Game</a>
	  </div>
  </body>
</html>