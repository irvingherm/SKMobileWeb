<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ScoreKeeper - Team Menu</title>

    <?php include'../assets/include.html' ?>
  <body ontouchstart>

  <!-- Make sure all your bars are the first things in your <body> -->
  <header class="bar-title">
	<a class="button-prev" href="home.php" data-transition="slide-out">Back</a>
	<h1 class="title">Soccer</h1>
	<a class="button-next" href="player.php" data-transition="slide-in">Next</a>
  </header>

  <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
	  <div class="content">
		<form style="padding: 10px;">
		  <div class="input-group" style="border-radius">
		    <div class="input-row">
		      <label>Home Team</label>
		      <input type="text" placeholder="Home Team Name">
		    </div>
		    <div class="input-row">
		      <label>Away Team</label>
		      <input type="text" placeholder="Away Team Name">
		    </div>
		    <div class="input-row divider-container">
		    	<label class="divider">Time</label>
		    </div>
		    <div class="input-row">
		      <label>Intervals:</label>
		      <span style="float: right; margin-right: 25px; font-size: 18px; margin-top: 7px;">2</span>
		    </div>
		    <div class="input-row">
		      <label>Interval Time:</label>
		      <select id="time" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		    </div>
		  </div>
		</form>
	  </div>
  </body>
</html>