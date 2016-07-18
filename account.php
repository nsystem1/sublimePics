<?php
require 'core.inc.php';
require 'connect.inc.php';
if(!loggedin()){
header('Location: index.php');
}
?>
<form method="POST" action="account.php" enctype="multipart/form-data">
<div id="profile_div">
<label>Upload your Profile Pic(<1MB)</label>
		<input type="file" id="profile" name="profile" onChange="CheckFileNameProfile()" accept="image/*" required/>
</div>

<div id="cover_div">
<label>Upload your Cover Pic(<1MB)</label>
		<input type="file" id="cover" name="cover" onChange="CheckFileNameCover()" accept="image/*" required/>
</div>

<div id="addr">
<label>Address:</label>
		<textarea type="text" height="200" width="400" name="addr" required> </textarea>
</div>

<div id="about">
<label>About:</label>
		<textarea type="text" height="200" width="400" name="about" required> </textarea>
</div>
<input type="submit" value="submit"/>
</form>




  <script>
	function CheckFileNameProfile() {
	var fileName = document.getElementById('profile').value
		if(document.getElementById('profile').files[0].size/1024 < 1000){
			if (fileName == "") {
				alert("Browse to upload a valid File with png extension");
				return false;
			}
			else if (fileName.split(".")[1].toUpperCase() == "PNG" || fileName.split(".")[1].toUpperCase() == "JPG")
				return true;
			else {
				alert("File with " + fileName.split(".")[1] + " is invalid. Upload a validfile with png or jpg extensions");
				document.getElementById('profile_div').innerHTML='<label>Upload your Profile Pic(<1MB)</label><input type="file" id="passport" name="passport" onChange="CheckFileNameProfile()" accept="image/*" required/>';
				return false;
			}
			return true;
		}else{
			alert(  "File is greater than 1MB. Upload a file with max 1MB");
			document.getElementById('profile_div').innerHTML='<label>Upload your Profile Pic(<1MB)</label><input type="file" id="passport" name="passport" onChange="CheckFileNameProfile()" accept="image/*" required/>';
			return false;
		}
    }
	function CheckFileNameCover() {
	var fileName = document.getElementById('cover').value
		if(document.getElementById('cover').files[0].size/1024 < 1000){
			if (fileName == "") {
				alert("Browse to upload a valid File with png extension");
				return false;
			}
			else if (fileName.split(".")[1].toUpperCase() == "PNG" || fileName.split(".")[1].toUpperCase() == "JPG")
				return true;
			else {
				alert("File with " + fileName.split(".")[1] + " is invalid. Upload a validfile with png or jpg extensions");
				document.getElementById('cover_div').innerHTML='<label>Upload your Cover Pic(<1MB)</label><input type="file" id="cover" name="cover" onChange="CheckFileNameCover()" accept="image/*" required/>';
				return false;
			}
			return true;
		}else{
			alert(  "File is greater than 1MB. Upload a file with max 1MB");
			document.getElementById('cover_div').innerHTML='<label>Upload your Cover Pic(<1MB)</label><input type="file" id="cover" name="cover" onChange="CheckFileNameCover()" accept="image/*" required/>';
			return false;
		}
    }
  </script>
  
  
  
  
  
  
<?php
 $id = getuserfield('id');
$username = getuserfield('username');
if(isset($_FILES["profile"]["tmp_name"])){
	$address = mysql_real_escape_string($_POST['addr']);
	$about = mysql_real_escape_string($_POST['about']);
	$profile = 'profile_'.mysql_real_escape_string($_FILES["profile"]["name"]);
	$cover = 'cover_'.mysql_real_escape_string($_FILES["cover"]["name"]);

	move_uploaded_file($_FILES["profile"]["tmp_name"], $username.'/'.$_FILES["profile"]["name"]);
	move_uploaded_file($_FILES["cover"]["tmp_name"], $username.'/'.$_FILES["cover"]["name"]);

	$query = "UPDATE users SET profile_pic = '$profile' , cover_pic =  '$cover' , address = '$address', about =  '$about' WHERE id = '$id'";
	if(mysql_query($query)){
	
		header('Location: profile.php');
	}
	
}

?>