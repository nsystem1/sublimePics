(function($){

	// An array with photos to show on the page. In a normal web app
	// you would fetch this array from your server with AJAX.

	var photos = [
		'pics/1.jpg',	'pics/2.jpg',
		'pics/3.jpg',	'pics/4.jpg',
		'pics/5.jpg',	'pics/6.jpg',
		'pics/7.jpg',	'pics/8.jpg',
		'pics/9.jpg',	'pics/10.jpg',
		'pics/11.jpg',	'pics/12.jpg',
		'pics/1.jpg',	'pics/2.jpg',
		'pics/3.jpg',	'pics/4.jpg',
		'pics/5.jpg',	'pics/6.jpg',
		'pics/7.jpg',	'pics/8.jpg',
		'pics/9.jpg',	'pics/10.jpg',
		'pics/11.jpg',	'pics/12.jpg',
		'pics/1.jpg',	'pics/2.jpg',
		'pics/3.jpg',	'pics/4.jpg',
		'pics/5.jpg',	'pics/6.jpg',
		'pics/7.jpg',	'pics/8.jpg',
		'pics/9.jpg',	'pics/10.jpg',
		'pics/11.jpg',	'pics/12.jpg',
		'pics/1.jpg',	'pics/2.jpg',
		'pics/3.jpg',	'pics/4.jpg',
		'pics/5.jpg',	'pics/6.jpg',
		'pics/7.jpg',	'pics/8.jpg',
		'pics/9.jpg',	'pics/10.jpg',
		'pics/11.jpg',	'pics/12.jpg',
	];

	$(document).ready(function(){		

		var page = 0,
			loaded = 0,
			perpage = 5,
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

		var holder = $('<div class="photo item item-type-line" >'+
									'<div class="item-hover" href="#" target="_blank">'+
										'<div class="item-info">'+
											'<div class="headline">Living Stream</div>'+
											'<div class="line"></div>'+
											'<div class="caption">February 29, 2014</div>'+
										'</div>'+
										'<div class="mask"></div>'+
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