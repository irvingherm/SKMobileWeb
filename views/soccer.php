<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ScoreKeeper - Team Menu</title>

    <?php include'../assets/include.html' ?>
  <body ontouchstart>
  <!-- Make sure all your bars are the first things in your <body> -->
  <header class="bar-title">
	<a class="button-prev" href="main.php" data-transition="slide-out">Back</a>
	<h1 class="title">Basketball</h1>
  </header>
	  <div class="content">
	  	<form style="padding: 10px;" action="insertScTeam.php" method="post">
		  <div class="input-group" style="border-radius">
		    <div class="input-row">
		      <label>Home Team</label>
		      <input type="text" name="name" placeholder="Home Team Name">
		    </div>
		    <div class="input-row">
		      <label>Away Team</label>
		      <input type="text" name="name2" placeholder="Away Team Name">
		    </div>
		    <div class="input-row divider-container">
		    	<label class="divider">Time</label>
		    </div>
		    <div class="input-row">
		      <label>Intervals:</label>
		      <span style="float: right; margin-right: 25px; font-size: 18px; margin-top: 7px;">4</span>
		    </div>
		    <div class="input-row">
		      <label>Interval Time:</label>
		      <select id="time" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		    </div>
		  </div>
		    <input class="button-block" type="submit" value="Next">
		</form>
	  </div>
  </body>
</html>