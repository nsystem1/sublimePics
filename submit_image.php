<?php
require 'core.inc.php';
require 'connect.inc.php';
if(!loggedin()){
header('Location: index.php');
}
 $id = getuserfield('id');
$username = getuserfield('username');
$profile_pic = getuserfield('profile_pic');
$no_of_pics = getuserfield('no_of_pics');
$company_name = mysql_real_escape_string(getuserfield('company_name'));

?>
<head>
  <meta name="viewport" content="width=device-width">


<link href="profile.css" rel="stylesheet" type="text/css" media="screen" />
<link href="gallery2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="login.css" rel="stylesheet" type="text/css" media="screen" />
<link href="nav1.css" rel="stylesheet" type="text/css" media="screen" />
 <script type="text/javascript" src="angular.min.js"></script>
 <script type="text/javascript" src="submit_image.js"></script>
 	
	<meta name="viewport" content="width=device-width">
</head>
<?php
require 'nav_logged.php';
?>
<link href="submit_image.css" rel="stylesheet" type="text/css" media="screen" />
<form action="submit_image.php" method="POST" ng-app="exampleApp" class="body" enctype="multipart/form-data">
  <div ng-controller="MainCtrl" class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-push-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Angular File Directive</h3>
          </div>
          <div class="panel-body">
            <div id="submit_div " class="form-group">
              <label class="btn btn-block" ng-class="{'btn-success': imageFiles, 'btn-warning': !imageFiles }">{{ imageFiles.length || 'No' }} {{ imageFiles.length === 1 && 'File ' || 'Files' }} Selected
              <input id="image" name="pics[]" type="file" file="imageFiles" onChange="CheckFileName()" accept="image/*" multiple style="opacity:0;height: 0;">
              </label>
              <p class="help-block">Select one or multiple images.</p>
            </div>
          </div>
        </div>
        <div class="thumbnail" id="thumbnail" ng-repeat="file in imageFiles">
          <img class="selected_image" id="selected_image" ng-src="data:{{ file.type }};base64,{{ file.body }}" alt="{{ file.name }}">
          <div class="caption">
            <h3>{{ file.name }}</h3>
			<input type="text" name="caption[]" placeholder="Give a caption" class="input_caption"/>
			
          </div>
        </div> 
		
      </div>
			<div id="submit_button"><input class="submit_button" type="submit"></div>
	
    </div>
    
  </div>
</form>

<?php
if(isset($_FILES["pics"]["tmp_name"])){
	$name = $_FILES["pics"]["name"];
	$caption = $_POST['caption'];
	$total = sizeof($name);
	
	for($i=0;$i<$total;$i++){
		$no_of_pics++;
		$caption = $_POST['caption'];
		move_uploaded_file($_FILES["pics"]["tmp_name"][$i], $username.'/'.$no_of_pics.'_'.$_FILES["pics"]["name"][$i]);
		$query = "UPDATE `users` SET `no_of_pics` = '$no_of_pics' WHERE id ='$id'";
		mysql_query($query);
		$name_of_pic = $no_of_pics.'_'.$name[$i];
		$query = "INSERT INTO photos VALUES ('','$name_of_pic','$username','$caption[$i]','now()','0','$company_name')";
		mysql_query($query);
	}
}
?>
<script>
	function CheckFileName() {
	
	var fileName = document.getElementById('image').value;
	
		if(document.getElementById('image').files[0].size/1024 < 1000){
			
		
			
			if (fileName == "") {
				alert("Browse to upload a valid File with png extension");
				return false;
			}
			else if (fileName.split(".")[1].toUpperCase() == "PNG" || fileName.split(".")[1].toUpperCase() == "JPG")
				
				document.getElementById('submit_button').innerHTML = '<input class="submit_button" type="submit">';
				
				return true;
				
			else {
				alert("File with " + fileName.split(".")[1] + " is invalid. Upload a valid file with png or jpg extensions");
				
				return false;
			}
			return true;
		}else{
			alert(  "File is greater than 1MB. Upload a file with max 1MB");
			document.getElementById('submit_div').innerHTML='<label class="btn btn-block" ng-class="{'+'btn-success'+': imageFiles, '+'btn-warning'+': !imageFiles }">{{ imageFiles.length || '+'No'+' }} {{ imageFiles.length === 1 && '+'File'+ ' || '+'Files'+' }} Selected'+
																	  '<input id="image" name="pics[]" type="file" file="imageFiles" onChange="CheckFileName()" accept="image/*" multiple style="opacity:0;height: 0;">'+
																	  '</label>'+
																	  '<p class="help-block">Select one or multiple images.</p>';
			return false;
		}
    }
  </script>