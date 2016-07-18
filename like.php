<?php
require 'core.inc.php';
require 'connect.inc.php';
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
	$message = "";
	$like_id = $_GET['like_id'];
	$like_vote = $_GET['like_vote'];
	$owner_name = $_GET['owner_name'];
	$pic_name = $_GET['pic_name'];
	$username = getuserfield('username');
	mysql_query("INSERT INTO likes VALUES ('','$owner_name','$pic_name','$username','now()')");
	mysql_query("UPDATE `photos` SET `votes`= `votes` +1 WHERE `username` = '$owner_name' AND `name` ='$pic_name'");	
	$messsage = $like_id.','.$like_vote.';';
	echo $message ;

echo '</response>';
?>