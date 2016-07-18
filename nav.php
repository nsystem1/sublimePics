<nav class="second">
  <ul>
    <li><a href="leaderboard.php">Leaderboard</a></li>
    <li><a href="popular.php">Most Popular</a></li>
    <li><a href="recent.php">Recent Uploads</a></li>
    <li><a href="rules.php">Rules</a></li>
    <li><a href="contact.php">Contact</a></li>
	<div class="showhim" >
  <li ><a  style="width:62px;" href=""><span style="margin-left:-10px;">Signin</span></a></li>
   <div style="height:280px; width:330px;padding-top:2px;margin-top:48px;margin-left:739px;float:right;position:absolute"class="showme">
<?php
require 'login.php';
?>
</div>
</div>
	
  </ul>
</nav>


<style>
.showme{ 
display: none;
}
.showhim:hover .showme{
display : block;
}
</style>
