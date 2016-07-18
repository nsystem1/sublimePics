
<?php
	$query="SELECT `company_name`,`username`, `name`,  `votes` FROM `photos` ORDER BY `votes` DESC LIMIT 50";
	$query_run = mysql_query($query);
	$i=0;
	while($query_row = mysql_fetch_assoc($query_run)){
		$name[$i] = $query_row['name'];
		$username_new[$i] = $query_row['username'];
		$company_name_new[$i] = $query_row['company_name'];
		$votes[$i] = $query_row['votes'];
		$i++;
	}
	$total = $i;
	for( ;$i<=50;$i++){
		$name[$i] = '';
		$company_name_new[$i] = '';
		$votes[$i] = '';
		$username_new[$i] = '';
	}
	echo $company_name_new[50];
	$i=0;
	$j=0;
	$k=0;


?>




<script>
(function($){

	// An array with photos to show on the page. In a normal web app
	// you would fetch this array from your server with AJAX.
	
	var i=0;
	var k=0;
	var total= <?php echo $total;?>;
	
	var name_initial = [
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
	var name = new Array;
	for(i=0;i<total;i++){
	name[i] = name_initial[i];
	}
	
	var votes_initial = [
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
	var votes = new Array;
	for(i=0;i<total;i++){
	votes[i] = votes_initial[i];
	}

	var photos_initial = [
		
		
		
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
	var photos = new Array;
	for(i=0;i<total;i++){
	photos[i] = photos_initial[i];
	}
	i=0;
	
	$(document).ready(function(){		

		var page = 0,
			loaded = 0,
			perpage = 8,
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

		var holder = $('<div class="portrait photo">'+
							'<div class="date"> '+name[i++]+'</div> '+
							'<div class="foot">'+
							  '<span id="share_button'+i+'" class="entypo-facebook share">share</span> '+
							  '<span class="entypo-heart heart">'+votes[k++]+'</span>'+
							'</div>'+
						  '</div>').appendTo(elem);

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
</script>