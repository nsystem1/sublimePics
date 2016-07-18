
<div class="signform">

<div class="right">

  <div class="headit">
<h>login here or </h><a href="#" class="slide1">sign up now</a>
  </div>
<form  method="POST" action="index.php" >
<div class="input-group margin-bottom-sm">
  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
  <input name="login_username" class="entypo-user form-control" type="text" placeholder="Username" required>
</div>
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input name="login_pwd" class="form-control" type="password" placeholder="Password" required>
</div>
<input class="subbt" type="submit" value="login" />
</form>

<a href="#">Forgot your password?</a>
<div class="bts">
<a href="#" class="fblogin"><i class="fa fa-facebook"></i><span>Sign in with facebook</span></a>
</div>
</div>
  <!-- end left side -->
</div>
<?php
if(isset($_POST['login_username'])&&isset($_POST['login_pwd'])){
	$username = mysql_real_escape_string($_POST['login_username']);
	$password = md5(mysql_real_escape_string($_POST['login_pwd']));
	if(!empty($username)){
	
	$query = "SELECT id FROM users WHERE username = '$username' AND password = '$password' "; 
	
	if($query_run = mysql_query($query)){
		$query_num_rows = mysql_num_rows($query_run);
		if ($query_num_rows==0){
			$error= 'Invalid username/password combination.';
		}else if($query_num_rows==1){
			echo $user_id=mysql_result($query_run, 0, 'id');
			$_SESSION['user_id']=$user_id;
			header('Location:profile.php');
		}
	}
	}else{
		$error= 'give a username and password';
	}
}

?>