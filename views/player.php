<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ScoreKeeper - Team Player Menu</title>

    <?php include'../assets/include.html' ?>
  </head>
  <body ontouchstart>
  <!-- Make sure all your bars are the first things in your <body> -->
  <header class="bar-title">
	<a href="soccer.html" class="button-prev" data-transition="slide-out">Back</a>
	<h1 class="title">Team A</h1>
  </header>
  <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
	  <div class="content">
		<form style="padding: 10px;" action="insertScPlayer.php" method="post">
		  <div class="input-group" style="border-radius">
		    <div class="input-row">
		      <label>Player Name </label>
		      <select name="position1" id="postions1" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		      <input type="text" name="name1" placeholder="Player Name">
		    </div>
		    <div class="input-row">
		      <label>Player Name </label>
		      <select name="position2" id="postions2" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		      <input type="text" name="name2" placeholder="Player Name">
		    </div>
		    <div class="input-row">
		      <label>Player Name </label>
		      <select name="position3" id="postions3" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		      <input type="text" name="name3" placeholder="Player Name">
		    </div>
		    <div class="input-row">
		      <label>Player Name </label>
		      <select name="position4" id="postions4" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		      <input type="text" name="name4" placeholder="Player Name">
		    </div>
		    <div class="input-row">
		      <label>Player Name </label>
		      <select name="position5" id="postions5" style="width: 40px; float: right; margin-right: 10px; margin-top: 10px;">
		  	  </select>
		      <input type="text" name="name5" placeholder="Player Name">
		    </div>
		  </div>
		  <input class="button-block" type="submit" value="Next">
		</form>
	  </div>
  </body>
</html>