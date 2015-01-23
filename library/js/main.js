var footer = document.getElementsByTagName("footer"),
	templateURL = footer[0].attributes[0].value;

require.config({
    baseUrl: templateURL + "/library/js/",
    paths: {
        jquery: 'vendor/jquery.min'
    }
});

require(["jquery","interface/global"], function($, global){

	global.init();
	
	//
	// Lazyload and infinite scroll if wanted. Probably need to update for each specific site.
	//

	
	// if($(".blog")){

	// 	require(["vendor/jquery.infinitescroll.min"], function(infinitescroll){
			
	// 		$('.posts').infinitescroll({
				
 // 				loading: {
	// 				finishedMsg: "<p><em>No more posts.</em></p>",
	// 				img: "/wp-content/themes/jilldehnert/img/loading.gif",
	// 				msgText: "Loading"
	// 			},
	// 		    navSelector: "div.next-posts",            
	// 		    nextSelector: "div.next-posts a:first",    
	// 		    itemSelector: ".posts div.post" 

	// 		  	}, function(){

	// 			  	$("img.lazy").lazyload({
	// 					effect : "fadeIn"
	// 				});

	// 				// fire GA tracking on loading new set of posts
	// 				_gaq.push(["_trackPageview", window.location.href]);

	// 		});
			
	// 	});

	// }

	// require(["vendor/jquery.lazyload.min"], function(lazyload){

	// 	$(".lazy").lazyload({
	// 		effect : "fadeIn"
	// 	});

	// });

});