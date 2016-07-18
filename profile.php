<?php
require 'core.inc.php';
require 'connect.inc.php';
if(!loggedin()){
header('Location: index.php');
}
$username = getuserfield('username');
$first_name = getuserfield('first_name');
$last_name = getuserfield('last_name');
$company_name = getuserfield('company_name');
$city = getuserfield('city');
$state = getuserfield('state');
if(getuserfield('no_of_pics')<1){$no_of_pics = 0;};
$no_of_pics = getuserfield('no_of_pics');
$profile_pic = getuserfield('profile_pic');
$cover_pic = getuserfield('cover_pic');
$about = getuserfield('about');
?>
<link href="load_more.css" rel="stylesheet" type="text/css" media="screen" />
<link href="profile.css" rel="stylesheet" type="text/css" media="screen" />
<link href="gallery3.css" rel="stylesheet" type="text/css" media="screen" />
<link href="login.css" rel="stylesheet" type="text/css" media="screen" />
<link href="nav1.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery.js"></script>

<?php
require 'nav_logged.php';
?>
<div class="cover" style="background:url(<?php echo $username.'/'.$cover_pic ;?>) repeat;background-size: 100% 100%;">
<div class="profile_pic" style="background:url(<?php echo $username.'/'.$profile_pic ;?>) repeat;background-size: 100% 100%;">
</div>
<div class="name">
<h1><?php echo $first_name.' '.$last_name; ?></h1><br>
<h2><?php echo $company_name.' - '.$city.','.$state?></h2>
</div>
<div class="no_of_pics">
<b><?php echo $no_of_pics ;?></b><br>IMAGES SUBMITED
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script type="text/javascript" src="process.js"></script>
<?php
require 'load_more.php';
?>


<div id="main"></div>
<a href="#" id="loadMore" class="el-boton"><lm>Load More</lm></a>
