define(["jquery"],function($){

	var front = {

		init: function(){

			front.controls();

		},
		controls: function(){

			$("#front-projects, #front-notable-past").on("click", ".project", function(){

				console.log("click");

				if($(this).hasClass("active")){

					$(this).removeClass("active");

					$(this).find(".project-title").css({
						webkitTransform: "translate3d(0,0,0)",
						MozTransform: "translate3d(0,0,0)",
						transform: "translate3d(0,0,0)"
					});

					$(this).find(".project-content").css({
						webkitTransform: "translate3d(0,0,0)",
						MozTransform: "translate3d(0,0,0)",
						transform: "translate3d(0,0,0)"
					});

				} else {

					$(this).addClass("active");

					$(this).find(".project-title").css({
						webkitTransform: "translate3d(100%,0,0)",
						MozTransform: "translate3d(100%,0,0)",
						transform: "translate3d(100%,0,0)"
					});

					$(this).find(".project-content").css({
						webkitTransform: "translate3d(100%,0,0)",
						MozTransform: "translate3d(100%,0,0)",
						transform: "translate3d(100%,0,0)"
					});

				}

				

			});

		}

	};

	return front;

});