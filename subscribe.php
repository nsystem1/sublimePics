<?php
require 'connect.inc.php';
if(isset($_POST['first_name'])){
		$first_name = mysql_real_escape_string($_POST['first_name']);
		$company_name = mysql_real_escape_string($_POST['company_name']);
		$email = mysql_real_escape_string($_POST['email']);
		$contact1 = mysql_real_escape_string($_POST['contact1']);
		$city = mysql_real_escape_string($_POST['city']);
		$state = mysql_real_escape_string($_POST['state']);
		$website = mysql_real_escape_string($_POST['website']);

				$query = "SELECT id FROM users WHERE email = '$email' "; 
				$query_run = mysql_query($query);
				$query_num_rows = mysql_num_rows($query_run);
				if ($query_num_rows==1){
					echo $error= 'email exists';
				}else{
					$query = "INSERT INTO users VALUES ('','$first_name','$company_name','$email','$contact1','$city','$state','$website','now()')";
					if($query_run = mysql_query($query)){
						header('Location: parallax.html');
					}else{
						 $error= 'There was an error in our server. Please try again.';
					}
				}
	}
	
?>