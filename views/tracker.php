<?php 
	$con = mysql_connect("localhost","root","root");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("ScoreKeeper", $con);
	$players = mysql_query('SELECT id FROM player ORDER BY id DESC  LIMIT 50'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ScoreKeeper - Game Tracker</title>

    <?php include'../assets/include.html' ?>
  </head>
  <body ontouchstart>
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
		<div style="width: 49%; height: 100%; float: left; border-right: 1px solid #000;">
			<ul class="list">
				<?php 
                    for($i=0; $i<=5; $i++) { 
                        $row = mysql_fetch_array($players);
                        include("playerHolder.php"); 
                    } 
                ?>
			</ul>
		</div>
		<div style="width: 49%; height: 100%; float: left;">
			<ul class="list">
				<?php 
                    for($i=0; $i<=5; $i++) { 
                        $row = mysql_fetch_array($players);
                        include("playerHolder.php"); 
                    } 
                ?>
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
<?php 
	mysql_close($con);
?>