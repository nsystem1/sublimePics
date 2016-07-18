<?php
require 'core.inc.php';
require 'connect.inc.php';
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
	$message = "";
	$vote = $_GET['vote'];
	$sequence = $_GET['sequence'];
	$vote_array = explode(",", $vote);
	$sequence_array = explode(",", $sequence);
 	$total = sizeof($vote_array);
	$i=0;
	$query="SELECT `no`, `votes` FROM `photos` ORDER BY `no` ASC LIMIT 50";
	$query_run = mysql_query($query);
	while($query_row = mysql_fetch_assoc($query_run)){
		$new_votes[$i] = $query_row['votes'];
		
		$i++;
	}
	for($i=0;$i<$total;$i++){
		if($new_votes[$sequence_array[$i]-1] != $vote_array[$i]){
			$message .= $i.','.$new_votes[$sequence_array[$i]-1].';';
		}
	}
	
	echo $message ;

echo '</response>';
?>