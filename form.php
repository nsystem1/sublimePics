<span id="second" class="content1" style="width:0px; height:0px;display:none; overflow:hidden;  white-space:nowrap;">
<form  class="container_form" method="POST" action="index.php">
  <p class="banner">FILL THE FOLLOWING DETAILS <a class="slide2">----X</a></p>
  <div class="wrapper">
    <label for="tbUName" class="tbLabel common"><i class="fa fa-user fa-fw"></i> Username <span class="asterisk">*</span></label><input id="tbUName" placeholder="john_mathew"  name="username" type="text" class="tb common" spellcheck="false" required/>
  </div>

  <div class="wrapper">
    <label for="tbFName" class="tbLabel common"><i class="fa fa-pencil-square-o fa-fw"></i> FIRST NAME <span class="asterisk">*</span></label><input id="tbFName" placeholder="John" name="first_name" type="text" class="tb common"  spellcheck="false" required/>
  </div>
	
  <div class="wrapper">
    <label for="tbFName" class="tbLabel common"><i class="fa fa-pencil-square-o fa-fw"></i> LAST NAME <span class="asterisk">*</span></label><input id="tbFName" placeholder="Mathew" name="last_name" type="text" class="tb common"  spellcheck="false" required/>
  </div>
  
  <div class="wrapper">
    <label for="tbLName" class="tbLabel common"><i class="fa fa-pencil-square-o fa-fw"></i> BUSINESS NAME <span class="asterisk">*</span></label><input id="tbLName" placeholder="John's Photography" name="company_name" type="text" class="tb common" spellcheck="false" required/>
  </div>

  <div class="wrapper">
    <label for="tbEmail" class="tbLabel common"><i class="fa fa-envelope-square fa-fw"></i> EMAIL ADDRESS <span class="asterisk">*</span></label><input id="tbEmail" placeholder="johnmathew@mail.com" name="email" type="email" class="tb common" spellcheck="false" required/>
  </div>

  <div class="wrapper">
    <label for="tbPwd1" class="tbLabel common"><i class="fa fa-lock fa-fw"></i> PASSWORD <span class="asterisk">*</span></label><input id="tbPwd1" placeholder="Password" name="pwd" type="password" class="tb common" spellcheck="false" required/>
  </div>

  <div class="wrapper">
    <label for="tbPwd2" class="tbLabel common"><i class="fa fa-lock fa-fw"></i> RETYPE PASSWORD <span class="asterisk">*</span></label><input id="tbPwd2" placeholder="Password_Again" name="pwd2" type="password" class="tb common" spellcheck="false" required/>
  </div>

  <div class="wrapper">
    <label for="tbCellNo" class="tbLabel common"><i class="fa fa-mobile-phone fa-fw"></i> CONTACT NO.<span class="asterisk">*</span></label><input id="tbCellNo" placeholder="cell no" name="contact1" type="text" class="tb common" spellcheck="false" required/>
  </div>

   <div class="wrapper">
    <label for="tbCellNo" class="tbLabel common"><i class="fa fa-mobile-phone fa-fw"></i> CONTACT NO.(2)</label><input id="tbCellNo" placeholder="landline" name="contact2" type="text" class="tb common" spellcheck="false" />
  </div> 
  
  <div class="wrapper">
    <label for="tbCity" class="tbLabel common"><i class="fa fa-map-marker fa-fw"></i> CITY <span class="asterisk">*</span></label><input id="tbCity" placeholder="" name="city" type="text" class="tb common" spellcheck="false" required/>
  </div>

  <div class="wrapper">
    <label for="tbState" class="tbLabel common"><i class="fa fa-map-marker fa-fw"></i> STATE <span class="asterisk">*</span></label><input id="tbState" placeholder="" name="state" type="text" class="tb common" spellcheck="false" required/>
  </div>

  <div class="wrapper">
    <label for="tbWebsite" class="tbLabel common"><i class="fa fa-globe fa-fw"></i> WEBSITE</label><input id="tbWebsite" placeholder="www.johnphotography.com" name="website" type="text" class="tb common" spellcheck="false" />
  </div>  
  <div class="wrapper">
    <button class="btn">REGISTER</button>
  </div>
</form>
</span>
<script>
   $(document).ready(function () {
       $('.slide1').click(function () {
           $('#second').animate({
               width: '1200px',
			   height:'1000px',
           }, 1000);
       });
	    $('.slide2').click(function () {
           $('#second').animate({
               width: '0px',
			   height: '0px',
           }, 1000);
       });
   });
   </script>
   
<?php

if(isset($_POST['first_name'])){
		$username = mysql_real_escape_string($_POST['username']);
		$first_name = mysql_real_escape_string($_POST['first_name']);
		$last_name = mysql_real_escape_string($_POST['last_name']);
		$company_name = mysql_real_escape_string($_POST['company_name']);
		$email = mysql_real_escape_string($_POST['email']);
		$pwd = md5(mysql_real_escape_string($_POST['pwd']));
		$pwd2 = md5(mysql_real_escape_string($_POST['pwd2']));
		$contact1 = mysql_real_escape_string($_POST['contact1']);
		$contact2 = mysql_real_escape_string($_POST['contact2']);
		$city = mysql_real_escape_string($_POST['city']);
		$state = mysql_real_escape_string($_POST['state']);
		$website = mysql_real_escape_string($_POST['website']);

		if($pwd!=$pwd2){
				$error= 'Passwords do not match.Try again.';
			}else{
				$query = "SELECT id FROM users WHERE username = '$username' "; 
				$query_run = mysql_query($query);
				$query_num_rows = mysql_num_rows($query_run);
				if ($query_num_rows==1){
					echo $error= 'username exists';
				}else{
					$query = "INSERT INTO users VALUES ('','$username','$company_name','$first_name','$last_name','$email','$pwd','$contact1','$contact2','$city','$state','$website','now()','0','','','','')";
					if($query_run = mysql_query($query)){
						mkdir($username);
						$username_store = '$username';
						$contents = "
									<?php
									".$username_store." = '".$username."';
									require '../profile.php';
									
									
									?>
						
						";
						$filename = $username.'/index.php';
						$file = fopen($filename, "w" );
						fwrite($file, $contents);
						fclose($file);
						 $error= 'registered successfully';
						 
						header('Location: account.php');
					}else{
						 $error= $username.'There was an error in our server. Please try again.';
					}
				}
			}
	}
?>