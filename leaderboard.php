<?php
require 'core.inc.php';
require 'connect.inc.php';

?>

<link href="load_more.css" rel="stylesheet" type="text/css" media="screen" />
<link href="form.css" rel="stylesheet" type="text/css" media="screen" />
<link href="login.css" rel="stylesheet" type="text/css" media="screen" />
<link href="gallery3.css" rel="stylesheet" type="text/css" media="screen" />
<link href="nav1.css" rel="stylesheet" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Stint+Ultra+Condensed' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="jquery.js"></script>

<?php
if(loggedin()){
$username = getuserfield('username');
$first_name = getuserfield('first_name');
$last_name = getuserfield('last_name');
$company_name = getuserfield('company_name');
$profile_pic = getuserfield('profile_pic');
require 'nav_logged.php';
}else{
require 'nav.php';
require 'form.php';
}
?>
<script type="text/javascript" src="process.js"></script>
<?php
require 'load_more_leaderboard.php';
require 'banner.php';
?>
<div id="main"></div>
<a href="#" id="loadMore" class="el-boton"><lm>Load More</lm></a>







