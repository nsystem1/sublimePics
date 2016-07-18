<?php
require 'core.inc.php';
require 'connect.inc.php';
if(loggedin()){
header('Location: profile.php');
}

?>
<link href="load_more.css" rel="stylesheet" type="text/css" media="screen" />
<link href="form.css" rel="stylesheet" type="text/css" media="screen" />
<link href="login.css" rel="stylesheet" type="text/css" media="screen" />
<link href="gallery3.css" rel="stylesheet" type="text/css" media="screen" />
<link href="nav1.css" rel="stylesheet" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Stint+Ultra+Condensed' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="jquery.js"></script>

<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
<?php

require 'nav.php';
require 'form.php';
require 'banner.php';
?>

<script type="text/javascript" src="process.js"></script>
<?php
require 'load_more.php';
?>


<div id="main"></div>
<a href="#" id="loadMore" class="el-boton"><lm>Load More</lm></a>