
<?php
	$query="SELECT `no`,`company_name`,`username`, `name`, `caption`,  `votes` FROM `photos` ORDER BY `votes` DESC LIMIT 50";
	$query_run = mysql_query($query);
	$i=0;
	while($query_row = mysql_fetch_assoc($query_run)){
		$name[$i] = $query_row['name'];
		$username_new[$i] = $query_row['username'];
		$profile_pic_new[$i] = mysql_result(mysql_query("SELECT `profile_pic` FROM `users` WHERE `username` = '$username_new[$i]'"), 0, 'profile_pic');
		$company_name_new[$i] = $query_row['company_name'];
		$votes[$i] = $query_row['votes'];
		$caption[$i] = $query_row['caption'];
		$no[$i] = $query_row['no'];
		
		$i++;
	}
	$total = $i;
	for( ;$i<=50;$i++){
		$name[$i] = '';
		$company_name_new[$i] = '';
		$votes[$i] = '';
		$username_new[$i] = '';
		$no[$i] = '';
		$caption[$i] = '';
	}
	echo $company_name_new[50];
	$i=0;
	$j=0;
	$k=0;
	$n=0;
	$l=0
?>




<script>
i = 0;
k = 0;
total = <?php echo $total;?>;
name_initial = [
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
		"<?php echo $company_name_new[$i++]  ?>",	"<?php echo $company_name_new[$i++]?>",
	];
	names = new Array;
	for(i=0;i<total;i++){
	names[i] = name_initial[i];
	}
no_initial = [
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		"<?php echo $no[$n++]  ?>",	"<?php echo $no[$n++]?>",
		
		
	];
	no = new Array;
	for(i=0;i<total;i++){
	no[i] = no_initial[i];
	}
	 votes_initial = [
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
		"<?php echo $votes[$k++]  ?>",	"<?php echo $votes[$k++]?>",
	];
	 vote = new Array;
	for(i=0;i<total;i++){
	vote[i] = votes_initial[i];
	}
	 photos_initial = [
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
		"<?php echo $username_new[$j]."/".$name[$j++]  ?>",	"<?php echo $username_new[$j]."/".$name[$j++]?>",
	];
	 photos = new Array;
	for(i=0;i<total;i++){
	photos[i] = photos_initial[i];
	}
	
	owner_name_initial = [
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
		"<?php echo $username_new[$l++] ?>",	"<?php echo $username_new[$l++] ?>",
	
	];
	 owner_name = new Array;
	for(i=0;i<total;i++){
	owner_name[i] = owner_name_initial[i];
	}

	i=0;
	k=0;
(function($){

	// An array with photos to show on the page. In a normal web app
	// you would fetch this array from your server with AJAX.
	
	$(document).ready(function(){		
		
		var page = 0,
			loaded = 0,
			perpage = 16,
			main = $('#main'),
			expected = perpage,
			loadMore = $('#loadMore');

		// Listen for custom events

		main.on('image-loaded', function(){

			// When such an event occurs, advance the progress bar

			loaded++;

			// This function takes a number between 0 and 1
			NProgress.set(loaded/expected);

			if(page*perpage >= photos.length){

				// If there are no more photos to show,
				// remove the load button from the page

				loadMore.remove();
			}
		});

		// When the load button is clicked, show 10 more images 
		// (controlled by the perpage variable)

		loadMore.click(function(e){

			e.preventDefault();

			loaded = 0;
			expected = 0;

			var deferred = $.Deferred().resolve();

			// Get a slice of the photos array, and show the photos. Depending
			// on the size of the array, there may be less than perpage photos shown:

			$.each(photos.slice(page*perpage, page*perpage + perpage), function(){
				deferred = main.showImage(this, deferred);
				expected++;
			});

			// Start the progress bar animation
			NProgress.start();
	
			page++;
		});

		loadMore.click();
	});

	// Create a new jQuery plugin, which takes two arguments:
	//	  src - the URL of an image
	//	  deferred - a jQuery deferred object, created by the previously shown photo

	$.fn.showImage = function(src, deferred){

		var elem = $(this);

		// The deferred that this function will return
		var result = $.Deferred();

		// Construct the markup

		var holder = $('<a href="#img'+i+'" class="portrait photo">'+
							'<div class="date"> '+names[i]+'</div> '+
							'<div class="foot">'+
							  '<span  id="share_button'+i+'" class="entypo-facebook share">share</span> '+
							  '<span id="votes'+i +'" onclick="like('+ i++ +','+ vote[k] +')"  class="entypo-heart heart">'+vote[k++]+'</span>'+
							'</div>'+
						'</a>').appendTo(elem);

		// Start loading the the image

		var img = $('<img>');

		img.load(function(){

			// The photo has been loaded! Use the always method of the deferred
			// to get notified when the previous image has been loaded. When this happens,
			// show the current one.

			deferred.always(function(){

				// Trigger a custom event on the #main div:
				elem.trigger('image-loaded');

				// Append the image to the page and reveal it with an animation

				img.hide().appendTo(holder).delay(100).fadeIn('fast', function(){

					// Resolve the returned deferred. This will notifiy
					// the next photo on the page and call its always callback

					result.resolve()
				});
			});

		});

		img.attr('src', src);

		// Return the deferred (it has not been resolved at this point)
		return result;
	} 

})(jQuery);

var xmlHttp = createXmlHttpRequestOject();
function createXmlHttpRequestOject(){// create http request object.
	var xmlHttp;
	if(window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("Microsoft.XMLHttp");// object for internet explorer.
		}catch(e){
			xmlHttp = false;
		}
	}else{
		try{
			xmlHttp = new XMLHttpRequest();
		}catch(e){
			xmlHttp = false;
		}
	}
	if(!xmlHttp)
		alert("can't creat xml object..:(");
	else
		return xmlHttp;// returns the http request object when called.
	
}
function update(){

	if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){ //readystate 0 or 4 that shows that the object is free(not communicating right now).
		xmlHttp.open("GET" , "check.php?vote=" + vote + "&sequence=" + no, true); //sends in values of the present maximum id for checking of updates.
		xmlHttp.onreadystatechange = handleServerResponse;
		xmlHttp.send(null);
	}	else{
		setTimeout(function() {
				update();
				},1000);
	}
}

function handleServerResponse(){
	if(xmlHttp.readyState==4){
		if(xmlHttp.status==200){
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			//document.getElementById("show").innerHTML += message;
			if( message != ""){
				//window.location.replace("timeline.php");//when update is found redirected back to timeline.php page to refresh and add up new posts.
				//document.getElementById("votes"+pic_id_global).innerHTML = message;
				changes = message.split(';');
				total_changes = 0;
				for(i=0;i<50;i++){
					if(changes[i]){
						total_changes++;
					}
				}
				for(i=0; i < total_changes ;i++){
					details = changes[i].split(',');
					
					id = details[0];
					new_votes = details[1];
					
					document.getElementById('votes'+id).innerHTML = new_votes;
					vote[id] = new_votes;
				}
	
			}
		}
	}
}
setInterval(function(){
	update();
	}
,1000);
function like(like_id, like_vote){
	pic_name = photos[like_id].split('/');
	if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){ //readystate 0 or 4 that shows that the object is free(not communicating right now).
		xmlHttp.open("GET" , "like.php?like_id=" + like_id + "&pic_name=" + pic_name[1] + "&owner_name=" +owner_name[like_id] + "&like_vote=" + like_vote , true); //sends in values of the present maximum id for checking of updates.
		xmlHttp.onreadystatechange = handleServerResponse;
		xmlHttp.send(null);
	}	else{
		setTimeout(function() {
				like(like_id,like_vote);
				},1000);
	}
}
function comment(comment_on, comment){
	pic_name = photos[like_id].split('/');
	if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){ //readystate 0 or 4 that shows that the object is free(not communicating right now).
		xmlHttp.open("GET" , "comment.php?like_id=" + like_id + "&pic_name=" + pic_name[1] + "&owner_name=" +owner_name[like_id] + "&like_vote=" + like_vote , true); //sends in values of the present maximum id for checking of updates.
		xmlHttp.onreadystatechange = handleServerResponse;
		xmlHttp.send(null);
	}	else{
		setTimeout(function() {
				like(like_id,like_vote);
				},1000);
	}
}
</script>


<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId  : '221629518003778',
      status : true, // check login status
      cookie : true, // enable cookies to allow the server to access the session
      xfbml  : true  // parse XFBML
    });
  };

  (function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
<?php for($i=0;$i<16;$i++){?>
$(document).ready(function(){
$('#share_button'+<?php echo $i?>).live('click', function(e){
e.preventDefault();
FB.ui(
{
method: 'feed',
name: '<?php echo $company_name_new[$i]?>',
link: 'http://pickdpic.in/',
picture: '',
caption: '',
description: 'TabPress -- Gotta love it!',
message: 'sdfasdf'
});
});
});
<?php }?>
</script>

<link href="lightbox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="twitter.css" rel="stylesheet" type="text/css" media="screen" />
<?php 
for($i=0;$i<$total;$i++){
if($i==0){
$next = 1;
$previous = '#';
}
$next = $i+1;
$prev = $i-1;
?>
<div class="lightbox" id="<?php echo 'img'.$i ?>">
    	<div class="image" >		
            <img src="<?php echo $username_new[$i]."/".$name[$i]  ?>">			
			<div class="info">
                <a href="<?php echo '#img'.$prev ?>" class="prev">&#171;</a>
                <a href="#" class="close">+</a>
                <a href="<?php echo '#img'.$next ?>" class="next">&#187;</a>
				<br>
				<h1 class="caption"><?php echo $caption[$i] ?></h1>
            </div>
			
        </div>
		<div class="side_box" >
		<img id="user_pic" class="profile_pic" src="<?php echo $username_new[$i]."/".$profile_pic_new[$i]  ?>">
					
						<h> <?php echo $company_name_new[$i]?></h>
				<br>
				<br>
				<p href="#" class="pop_buttons">Vote</p>
				<p href="#" class="pop_buttons">Facebook</p>
				<p href="#" class="pop_buttons">Instagram</p>
				<p href="#" class="pop_buttons">Goolge+</p>
				<p href="#" class="pop_buttons details" >Details</p>
			<div class="container">
				
				<div class="notification-box">
			
					<form action="#" method="POST" >
					Your Message:<br><img id="username_comment_pic" class="profile_pic" src="<?php echo $username."/".$profile_pic  ?>"><textarea class="inp-text" name="message"></textarea>
					<input class="tweet-btn" type="submit" />
					</form>
					<?php
						$pic_name = $name[$i];
						$comment_query=mysql_query("SELECT `comment`, `comment_by`, `comment_by_company` FROM `comments` WHERE `pic_owner`='$username_new[$i]' AND `pic_name`='$pic_name'");
						while($row = mysql_fetch_assoc($comment_query)){
							$comment = $row['comment'];
							$comment_by = $row['comment_by'];
							$comment_by_company = $row['comment_by_company'];
							$profile_pic_comment = mysql_result(mysql_query("SELECT `profile_pic` FROM `users` WHERE `username` = '$comment_by'"), 0, 'profile_pic');
					?>
					<div class="list">				
						<div class="content">
							
							<img id="comment_pic" class="profile_pic" src="<?php echo $comment_by.'/'.$profile_pic_comment?>">
							<n><b><?php echo $comment_by_company ?></b></n>
							<c><?php echo $comment ?></c>					
							<br>
							<t>2014-06-03 10:26:27</t>
						</div>			
					</div>
					
					<?php
					}
					?>
				</div>
			</div>
		</div>
    </div>

<?php
}

?>
