/*
 *
 *		CUSTOM.JS
 *
 */

(function($){
	
	"use strict";
	
	// DETECT TOUCH DEVICE //
	function is_touch_device() {
		return !!('ontouchstart' in window) || ( !! ('onmsgesturechange' in window) && !! window.navigator.maxTouchPoints);
	}
	
	
	// PAGE LOADER //
	function page_loader() {
		
		$(".page-loading").fadeIn(0, function() {
			$(".page-loading").animate({opacity: 1}, 0, function() {
				$(".page-loading").css('z-index', 0).fadeOut(0);
			});
		});

	}
	
	
	// SHOW/HIDE MOBILE MENU //
	function show_hide_mobile_menu() {
		
		$("#mobile-menu-button").on("click", function(e) {
            
			e.preventDefault();
			
			$("#mobile-menu").slideToggle(300);
			
        });	
		
	}
	
	
	// MOBILE MENU //
	function mobile_menu() {
		
		if ($(window).width() < 992) {
			
			if ($("#menu").length < 1) {
			
				$("#header").append('<ul id="menu">');

				$("#menu-left").clone().children().appendTo($("#menu"));
				$("#menu-right").clone().children().appendTo($("#menu"));
			
			}
			
			if ($("#menu").length > 0) {
			
				if ($("#mobile-menu").length < 1) {
					
					$("#menu").clone().attr({
						id: "mobile-menu",
						class: ""
					}).insertAfter("#header");
					
					$("#mobile-menu .megamenu > a").on("click", function(e) {
                        
						e.preventDefault();
						
						$(this).toggleClass("open").next("div").slideToggle(300);
						
                    });
					
					$("#mobile-menu .dropdown > a").on("click", function(e) {
                        
						e.preventDefault();
						
						$(this).toggleClass("open").next("ul").slideToggle(300);
						
                    });
				
				}
				
			}
				
		} else {
			
			$("#mobile-menu").hide();
			$("#menu").hide();
			
		}
		
	}
	
	
	// STICKY //
	function sticky() {
		
		var sticky_point = $("#header-top").innerHeight() + $("#header").innerHeight() + 20;
		
		$("#header").clone().attr({
			id: "header-sticky",
			class: ""
		}).insertAfter("header");
		
		$(window).scroll(function(){
			
			if ($(window).scrollTop() > sticky_point) {  
				$("#header-sticky").slideDown(300).addClass("header-sticky");
				$("#header .menu ul, #header .menu .megamenu-container").css({"visibility": "hidden"});
				$("#header-sticky #logo img").attr("src", "http://dev.eg.travelcenter.kz/wp-content/themes/travel-center/assets/images/logo-small.png");
			} else {
				$("#header-sticky").slideUp(100).removeClass("header-sticky");
				$("#header .menu ul, #header .menu .megamenu-container").css({"visibility": "visible"});
				$("#header-sticky #logo img").attr("src", "http://dev.eg.travelcenter.kz/wp-content/themes/travel-center/assets/images/logo-eg.png");
			}
			
		});
		
	}
	
	
	// HEADER SEARCH //
	function header_search() {	
		
		$(".search a").on("click", function(e) { 
	
			e.preventDefault();
			
			if(!$(".search a").hasClass("open")) {
			
				$("#search-form-container").addClass("open-search-form").fadeIn(300)
				
			} else {
				
				$("#search-form-container").removeClass("open-search-form").fadeOut(100);
			
			}
			
		});
		
		$("#search-form").after('<a class="search-form-close" href="#">x</a>');
		
		$("#search-form-container a.search-form-close").on("click", function(event){
			
			event.preventDefault();
			$("#search-form-container").removeClass("open-search-form").fadeOut(100);
			
		});
		
	}
	
	
	// CHANGE LOGO //
	function change_logo() {
		
		if ($(window).width() < 992) {
			$("#header #logo img").attr("src", "http://dev.eg.travelcenter.kz/wp-content/themes/travel-center/assets/images/logo-small.png");
		} else {
			$("#header #logo img").attr("src", "http://dev.eg.travelcenter.kz/wp-content/themes/travel-center/assets/images/logo-eg.png");
		}
		
	}
	
	
	// LOAD MORE PROJECTS //
	function load_more_projects() {
	
		var number_clicks = 0;
		
		$(".load-more").on("click", function(e) {
			
			e.preventDefault();
			
			if (number_clicks == 0) {
				$.ajax({
					type: "POST",
					url: $(".load-more").attr("href"),
					dataType: "html",
					cache: false,
					msg : '',
					success: function(msg) {
						$(".isotope").append(msg);	
						$(".isotope").imagesLoaded(function() {
							$(".isotope").isotope("reloadItems").isotope();
							$(".fancybox").fancybox({
								prevEffect: 'none',
								nextEffect: 'none'
							});
						});
						number_clicks++;
						$(".load-more").html("Nothing to load");
					}
				});
			}
			
		});
		
	}
	
	
	// SHOW/HIDE SCROLL UP //
	function show_hide_scroll_top() {
		
		if ($(window).scrollTop() > $(window).height()/2) {
			$("#scroll-up").fadeIn(300);
		} else {
			$("#scroll-up").fadeOut(300);
		}
		
	}
	
	
	// SCROLL UP //
	function scroll_up() {				
		
		$("#scroll-up").on("click", function() {
			$("html, body").animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		
	}
	
	
	// WIDGET LANGUAGE //
	function widget_languages() {
		
		$(".widget-languages > a").on("click", function(event){
			
			event.preventDefault();
			$(".widget-languages ul").slideToggle(300);
			
		})
		
	}
	
	
	// FULL SCREEN //
	function full_screen() {

		if ($(window).width() > 767) {
			$(".full-screen").css("height", $(window).height() + "px");
		} else {
			$(".full-screen").css("height", "auto");
		}

	}
	
	
	// ANIMATIONS //
	function animations() {
        
		animations = new WOW({
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 100,
			mobile: false,
			live: true
		})
		
		animations.init();
		
	}
	
	
	// DOCUMENT READY //
	$(document).ready(function(){
		
		// PAGE LOADER //
		if(typeof $.fn.queryLoader2 !== 'undefined'){
		
			$("body").queryLoader2({
				barColor: "#9f8c5f",
				backgroundColor: "#fff",
				percentage: true,
				barHeight: 1,
				minimumTime: 500
			});
			
		}
		
		page_loader();
		
		
		// STICKY //
		sticky();
		
		
		// MENU //
		if (typeof $.fn.superfish !== 'undefined') {
			
			$(".menu").superfish({
				delay: 500,
				animation: {
					opacity: 'show',
					height: 'show'
				},
				speed: 'fast',
				autoArrows: false
			});
			
		}
		
		
		// SHOW/HIDE MOBILE MENU //
		show_hide_mobile_menu();
		
		
		// MOBILE MENU //
		mobile_menu();
		
		
		// CHANGE LOGO //
		change_logo();
		
		
		// HEADER SEARCH //
		header_search();
		
		
		// FANCYBOX //
		if (typeof $.fn.fancybox !== 'undefined') {
		
			$(".fancybox").fancybox({
				prevEffect: 'none',
				nextEffect: 'none'
			});
		
		}
		
		// REVOLUTION SLIDER //
		if (typeof $.fn.revolution !== 'undefined') {
			
			$(".rev_slider").revolution({
				sliderType: "standard",
				sliderLayout: "auto",
				delay: 5000,
				navigation: {
					arrows:{
						style: "custom",
						enable: true,
						hide_onmobile: true,
						hide_onleave: false,
						hide_delay: 200,
						hide_delay_mobile: 1200,
						hide_under: 0,
						hide_over: 9999,
						tmp: '',
						left: {
							h_align: "left",
							v_align: "center",
							h_offset: 20,
							v_offset: 0
						 },
						 right: {
							h_align: "right",
							v_align: "center",
							h_offset: 20,
							v_offset: 0
						 }
					},
					bullets:{
						style: "custom",
						enable: true,
						hide_onmobile: false,
						hide_onleave: false,
						hide_delay: 200,
						hide_delay_mobile: 1200,
						hide_under: 0,
						hide_over: 9999,
						tmp: '', 
						direction: "horizontal",
						space: 10,       
						h_align: "center",
						v_align: "bottom",
						h_offset: 0,
						v_offset: 90
					},
					touch:{
						touchenabled: "on",
						swipe_treshold: 75,
						swipe_min_touches: 1,
						drag_block_vertical: false,
						swipe_direction: "horizontal"
					}
				},			
				gridwidth: 1170,
				gridheight: 730		
			});
			
		}
	
	
		// OWL Carousel //
		if (typeof $.fn.owlCarousel !== 'undefined') {
			
			// GALLERY SLIDER //
			if ($(window).width() > 767) {
				
				$(".owl-carousel.gallery-slider").owlCarousel({
					items: 1,
					autoplay: false,
					autoplayTimeout: 3000,
					autoplayHoverPause: true,
					loop: true,
					nav: true,
					smartSpeed: 1200,
					navText: false,
					dots: false,
					stagePadding: 150, 
					mouseDrag: true,
					touchDrag: true
				});
				
			} else {
				
				$(".owl-carousel.gallery-slider").owlCarousel({
					items: 1,
					autoplay: false,
					autoplayTimeout: 3000,
					autoplayHoverPause: true,
					loop: true,
					nav: true,
					smartSpeed: 1200,
					navText: false,
					dots: false,
					stagePadding: 0, 
					mouseDrag: true,
					touchDrag: true
				});
				
			}
			
			
			// TESTIMONIALS SLIDER //
			$(".owl-carousel.testimonials-slider").owlCarousel({
				items: 1,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				smartSpeed: 1200,
				loop: true,
				nav: false,
				navText: false,
				dots: true,
				mouseDrag: true,
				touchDrag: true
			});
			
			
			// ROOMS SLIDER //
			$(".owl-carousel.rooms-slider").owlCarousel({
				items: 1,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				smartSpeed: 1200,
				loop: true,
				nav: true,
				navText: false,
				dots: true,
				mouseDrag: true,
				touchDrag: true
			});
			
			
			// ROOM IMAGES SLIDER //
			var room_images_slider = $(".owl-carousel.room-images-slider").owlCarousel({
				items: 1,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				loop: true,
				nav: true,
				smartSpeed: 1200,
				navText: false,
				dots: true,
				mouseDrag: true,
				touchDrag: true
			});
			
			room_images_slider.on('translate.owl.carousel', function(event) {
				$(".room-images-slider .caption").delay(200).addClass("animated");
			});
			
			room_images_slider.on('translated.owl.carousel', function(event) {
				$(".room-images-slider .caption").removeClass("animated");
			});
			
			
			// IMAGES SLIDER //
			$(".owl-carousel.images-slider").owlCarousel({
				items: 1,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				smartSpeed: 1200,
				loop: true,
				nav: true,
				navText: false,
				dots: true,
				mouseDrag: true,
				touchDrag: true
			});
			
			
			$(".owl-carousel.images-slider-2").owlCarousel({
				items: 1,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				smartSpeed: 1200,
				loop: true,
				nav: false,
				navText: false,
				dots: true,
				mouseDrag: true,
				touchDrag: true
			});
			
			
			$(".owl-carousel.images-slider-3").owlCarousel({
				items: 1,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				smartSpeed: 1200,
				loop: true,
				nav: false,
				navText: false,
				dots: true,
				mouseDrag: true,
				touchDrag: true,
				animateIn: 'slideInDown',
				animateOut: 'slideOutDown'
			});
			
			
			// LOGOS SLIDER //
			$(".owl-carousel.logos-slider").owlCarousel({
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				smartSpeed: 1200,
				loop: true,
				nav: true,
				navText: false,
				dots: false,
				mouseDrag: true,
				touchDrag: true,
				responsive: {
					0:{
						items: 1
					},
					480:{
						items: 2
					},
					768:{
						items: 3
					},
					992:{
						items: 4
					},
					1200:{
						items: 5
					}
				}
			});
		
		}
		
		
		// GOOGLE MAPS //
		if (typeof $.fn.gmap3 !== 'undefined') {
		
			$(".map").each(function() {
				
				var data_zoom = 15,
					data_height;
				
				if ($(this).attr("data-zoom") !== undefined) {
					data_zoom = parseInt($(this).attr("data-zoom"),10);
				}	
				
				if ($(this).attr("data-height") !== undefined) {
					data_height = parseInt($(this).attr("data-height"),10);
				}	
				
				$(this).gmap3({
					marker: {
						values: [{
							address: $(this).attr("data-address"),
							data: $(this).attr("data-address-details")
						}],
						options:{
							draggable: false
						},
						events:{
							mouseover: function(marker, event, context){
								var map = $(this).gmap3("get"),
								infowindow = $(this).gmap3({get:{name:"infowindow"}});
								if (infowindow){
									infowindow.open(map, marker);
									infowindow.setContent(context.data);
								} else {
									$(this).gmap3({
										infowindow:{
											anchor:marker, 
											options:{content: context.data}
										}
									});
								}
							},
							mouseout: function(){
								var infowindow = $(this).gmap3({get:{name:"infowindow"}});
								if (infowindow){
									infowindow.close();
								}
							}
						}
					},
					map: {
						options: {
							mapTypeId: google.maps.MapTypeId.ROADMAP,
							zoom: data_zoom,
							scrollwheel: false
						}
					}
				});
				
				$(this).css("height", data_height + "px");
				
			});
			
		}
		
		
		// ISOTOPE //
		if ((typeof $.fn.imagesLoaded !== 'undefined') && (typeof $.fn.isotope !== 'undefined')) {
		
			$(".isotope").imagesLoaded( function() {
				
				var container = $(".isotope");
				
				container.isotope({
					itemSelector: '.isotope-item',
					layoutMode: 'masonry',
					transitionDuration: '0.8s'
				});
				
				$(".filter li a").on("click", function() {
					$(".filter li a").removeClass("active");
					$(this).addClass("active");
		
					var selector = $(this).attr("data-filter");
					container.isotope({
						filter: selector
					});
		
					return false;
				});
		
				$(window).resize(function() {
					container.isotope();
				});
				
				$(".isotope.masonry").imagesLoaded( function() {

					var container_masonry = $(".isotope.masonry");

					container_masonry.isotope({
						itemSelector: '.isotope-item',
						layoutMode: 'masonry',
						masonry: {
							columnWidth: 1,
							gutter: 1
						},
						transitionDuration: '0.8s'
					});

					$(".filter li a").on("click", function() {
						$(".filter li a").removeClass("active");
						$(this).addClass("active");

						var selector = $(this).attr("data-filter");
						container_masonry.isotope({
							filter: selector
						});

						return false;
					});

					$(window).resize(function() {
						container_masonry.isotope();
					});

				});
				
			});
			
		}
		
		
		// LOAD MORE PORTFOLIO ITEMS //
		load_more_projects();
		
		
		// PLACEHOLDER //
		if (typeof $.fn.placeholder !== 'undefined') {
			
			$("input, textarea").placeholder();
			
		}
		
		
		// CONTACT FORM VALIDATE & SUBMIT //
		// VALIDATE //
		if (typeof $.fn.validate !== 'undefined') {
		
			$("#contact-form").validate({
				rules: {
					name: {
						required: true
					},
					email: {
						required: true,
						email: true
					},
					subject: {
						required: true
					},
					message: {
						required: true,
						minlength: 3
					}
				},
				messages: {
					name: {
						required: "Please enter your name!"
					},
					email: {
						required: "Please enter your email!",
						email: "Please enter a valid email address"
					},
					subject: {
						required: "Please enter the subject!"
					},
					message: {
						required: "Please enter your message!"
					}
				},
					
				// SUBMIT //
				submitHandler: function(form) {
					var result;
					$(form).ajaxSubmit({
						type: "POST",
						data: $(form).serialize(),
						url: "assets/php/send.php",
						success: function(msg) {
							
							if (msg == 'OK') {
								result = '<div class="alert alert-success">Your message was successfully sent!</div>';
								$("#contact-form").clearForm();
							} else {
								result = msg;
							}
							
							$("#alert-area").html(result);
		
						},
						error: function() {
		
							result = '<div class="alert alert-danger">There was an error sending the message!</div>';
							$("#alert-area").html(result);
		
						}
					});
				}
			});
			
		}
		
		
		// PARALLAX //
		if (typeof $.fn.stellar !== 'undefined') {
		
			if (!is_touch_device()) {
				
				$(window).stellar({
					horizontalScrolling: false,
					verticalScrolling: true,
					responsive: true
				});
				
			}
		
		}
		
		
		// SHOW/HIDE SCROLL UP
		show_hide_scroll_top();
		
		
		// SCROLL UP //
		scroll_up();
		
		
		// YOUTUBE PLAYER //
		if (typeof $.fn.mb_YTPlayer !== 'undefined') {
			
			$(".youtube-player").mb_YTPlayer();
		
		}
		
		
		// COUNTDOWN //
		if (typeof $.fn.countdown !== 'undefined') {
			
			$(".countdown").countdown('2017/12/31 00:00', function(event) {
				$(this).html(event.strftime(
					'<div><div class="count">%-D</div> <span>Days</span></div>' +
					'<div><div class="count">%-H</div> <span>Hours</span></div>' +
					'<div><div class="count">%-M</div> <span>Minutes</span></div>' +
					'<div><div class="count">%S</div> <span>Seconds</span></div>'
				));
			});
		
		}
		
		
		// WEATHER //
		if (typeof $.fn.openWeather !== 'undefined') {
			
			$('.weather-temperature').openWeather({
				key: 'c9d49310f8023ee2617a7634de23c2aa',
				city: 'Almaty',
				units: 'c',
				placeTarget: '.weather-place',
				iconTarget: '.weather-icon',
				customIcons: 'http://dev.eg.travelcenter.kz/wp-content/themes/travel-center/assets/plugins/weather/icons/'
			});
			
		}



        function myFunction() {
            var x = document.getElementsByClassName("weather-place-destination")[0].innerHTML;
            return x;

        }

        // WEATHER DESTINATION//
        if (typeof $.fn.openWeather !== 'undefined') {

            $('.weather-temperature-destination').openWeather({
                key: 'c9d49310f8023ee2617a7634de23c2aa',
                city: myFunction(),
                units: 'c',
                placeTarget: '.weather-place-destination',
                iconTarget: '.weather-icon-destination',
                customIcons: 'http://dev.eg.travelcenter.kz/wp-content/themes/travel-center/assets/plugins/weather/icons/'
            });

        }


		
		
		// TWITTER //
		if(typeof twitterFetcher !== 'undefined' && ($('.widget-twitter').length > 0)) {
			
			$('.widget-twitter').each(function(index){
			
				var account_id = $('.tweets-list', this).attr('data-account-id'),
					items = $('.tweets-list', this).attr('data-items'),
					newID = 'tweets-list-' + index;
				
				$('.tweets-list', this).attr('id', newID);
				
				var config = {
				  "id": account_id,
				  "domId": newID,
				  "maxTweets": items,
				  "showRetweet": false,
				  "showTime": false,
				  "showUser": true,
				  "showInteraction": false
				};
				
				twitterFetcher.fetch(config);
			});
			
		}
		
		
		// WIDGET LANGUAGE //
		widget_languages();
		
		
		// FULL SCREEN //
		full_screen();
		
		
		// ANIMATIONS //
		animations();
		
	});

	
	// WINDOW SCROLL //
	$(window).scroll(function() {
		
		show_hide_scroll_top();
		
	});
	
	
	// WINDOW RESIZE //
	$(window).resize(function() {

		mobile_menu();
		change_logo();
		full_screen();
		
	});
	
})(window.jQuery);