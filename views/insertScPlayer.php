<?php
    $con = mysql_connect("localhost","root","root");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("ScoreKeeper", $con);

    $insert0="INSERT INTO player(name, position, team_id) VALUES ('$_POST[name1]', '$_POST[position1]', '4')";
    $insert1="INSERT INTO player(name, position, team_id) VALUES ('$_POST[name2]', '$_POST[position2]', '4')";
    $insert2="INSERT INTO player(name, position, team_id) VALUES ('$_POST[name3]', '$_POST[position3]', '4')";
    $insert3="INSERT INTO player(name, position, team_id) VALUES ('$_POST[name4]', '$_POST[position4]', '4')";
    $insert4="INSERT INTO player(name, position, team_id) VALUES ('$_POST[name5]', '$_POST[position5]', '4')";

    if (!mysql_query($insert0, $con)) {
        die('Error: ' . mysql_error());
    } else if (!mysql_query($insert1, $con)) {
        die('Error: ' . mysql_error());
    } else if (!mysql_query($insert2, $con)) {
        die('Error: ' . mysql_error());
    } else if (!mysql_query($insert3, $con)) {
        die('Error: ' . mysql_error());
    } else if (!mysql_query($insert4, $con)) {
        die('Error: ' . mysql_error());
    } else { echo 'ERROR';}

    mysql_close($con);
    include 'tracker.php'
?>
