<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ScoreKeeper - Tennis Menu</title>

    <?php include'../assets/include.html' ?>
  <body ontouchstart>
  <!-- Make sure all your bars are the first things in your <body> -->
  <header class="bar-title">
	<a class="button-prev" href="home.php" data-transition="slide-out">Back</a>
	<h1 class="title">Tennis</h1>
  </header>
	<div class="content">
	  	<form style="padding: 10px;" action="" method="post">
		  <div class="input-group" style="border-radius">
		    <div class="input-row">
		      <label>Home Team</label>
		      <input type="text" id="h-player" name="name" placeholder="Player Name">
		    </div>
		    <div class="input-row divider-container">
		    	<label class="divider">VS.</label>
		    </div>
		    <div class="input-row">
		      <label>Away Team</label>
		      <input type="text" id="a-player" name="name2" placeholder="Player Name">
		    </div>
		    <br><br>
		    <div class="input-row divider-container">
		    	<label class="divider">Time</label>
		    </div>
		    <div class="input-row">
		      <label style="margin-top: 10px;">Set Number:</label>
		      <select id="set" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		    </div>
		  </div>
		    <input class="button-block" type="submit" value="Next">
		</form>
	  </div>
  </body>
</html>