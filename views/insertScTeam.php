<?php
    $con = mysql_connect("localhost","root","root");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("ScoreKeeper", $con);

    $insert="INSERT INTO team(name, sport_id) VALUES ('$_POST[name]','3')";
    $sql="INSERT INTO team (name, sport_id) VALUES ('$_POST[name2]', '3')";

    if (!mysql_query($insert, $con)) {
        die('Error: ' . mysql_error());
    } else if (!mysql_query($sql, $con)) {		
    	die('Error: ' . mysql_error());
    }
    mysql_close($con);
    include 'player.php';
?>
