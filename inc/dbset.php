<?php
$dbuser = "root";
$dbpass = ""; //Yeah, I'm running MYSQL unprotected! [insert "what a badass" here]
$dbhost = "localhost";
$dbname = "AdvancedTalk";

mysql_connect("$dbhost", "$dbuser","$dbpass")or die("Cannot connect");
mysql_select_db($dbname)or die("Cannot select DB");

?>
