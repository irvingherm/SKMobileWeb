<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ScoreKeeper - Sport Selector</title>
    <?php include'../assets/include.html' ?>
  </head>
  <body ontouchstart>
  <!-- Make sure all your bars are the first things in your <body> -->
  <header class="bar-title">
    <h1 class="title">ScoreKeeper</h1>
  </header>
  <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
  <div class="content">
  	<div class="content-padded">
      <p class="welcome" style="text-align: center;">Keep track of your game results and stats</p>
    </div>
    <ul class="list inset" style="margin-top: 30px;">
      <li>
        <a href="tennis.php">
        	  <img src="http://icons.iconarchive.com/icons/icons-land/sport/256/Tennis-Ball-icon.png" alt="tennis" />
          	<strong class="sport-name">Tennis</strong>
          	<span class="chevron"></span>
        </a>
      </li>
      <li>
        <!-- A soccer.php link -->
        <a href="#" data-transition="slide-in">
        	  <img src="http://icons.iconarchive.com/icons/icons-land/sport/256/Soccer-Ball-icon.png" alt="soccer" />
          	<strong class="sport-name">Soccer</strong>
          	<span class="chevron"></span>
        </a>
      </li>
      <li>
        <a href="soccer.php">
        	  <img src="http://icons.iconarchive.com/icons/icons-land/sport/256/Basketball-Ball-icon.png" alt="basketball" />
          	<strong class="long-name">Basketball</strong>
          	<span class="chevron"></span>
        </a>
      </li>
    </ul>
  </div>
  </body>
</html>