


// This key was registered by Daniel Howard of Symphony Talent for the free Google Maps service
var googleMapsApiKey = 'AIzaSyBE1I3PHIxKpqcBldBIDa3wjjVlNv8xKbo';



/**** Browser polyfils and utilities *****/

// add no-touch class to non-touch screens, this is used to conditionally add CSS hover rules only on devices which have a mouse pointer
// and avoid the IOS double tab issue
document.documentElement.className += (("ontouchstart" in document.documentElement) ? ' touch' : ' no-touch');


// console.log - dummy replacement to stop IE complaining
if (!window.console) {window.console = {};}
if (!window.console.log) {window.console.log = function(){};}


// trim
if (!String.prototype.trim) {String.prototype.trim = function() {return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');};}
String.prototype.trimSlashes = function() {return this.replace(/^\/+|\/+$/g, '');};


// Array polyfills
if (Array.prototype.map === undefined) {Array.prototype.map = function(fn) {var out = []; for (var i=0; i<this.length; i++) {out.push(fn(this[i]));} return out;};}
if (Array.prototype.filter === undefined) {Array.prototype.filter = function(fn) {var out = []; for (var i=0; i<this.length; i++) {if (fn(this[i], i, this)) {out.push(this[i]);}} return out;};}
if (Array.prototype.indexOf === undefined) {Array.prototype.indexOf = function(ele, start) {if (!start) {start = 0;} for (var i=start; i<this.length; i++) {if (this[i] === ele) {return i;}} return -1;};}

// Modify the UK link on the country selector to add "?noredirect"
// The link is always the first in the list
jQuery(function($) {
	var element = $(".fdm-location-selector-list:first li:first a");
  	var newlink = element.attr("href") + "?noredirect";
  	element.attr("href", newlink);
});

jQuery(function($){
	/***** In page navigation pips *****/
	(function(){

		var fixedHeaderSize = 54;

		var $sections = $('main.l-content').first().children('section.l-section').not('#partner-scroll');
		if ( $sections.length < 2 ) { return; }

		var $nav = $('<div>').addClass('fdm-in-page-nav').appendTo(document.body);

		$sections.each(function(){
			$('<span>').addClass('fdm-in-page-nav-pip').data('section', $(this)).appendTo($nav);
		});

		var $links = $nav.find('.fdm-in-page-nav-pip');

		$nav.on('click','.fdm-in-page-nav-pip',function(){
			$(window).off('scroll',setCurrentPip);
			$links.not(this).removeClass('current');
			$(this).addClass('current');
			$('html, body').animate({
				scrollTop: $(this).data('section').offset().top - fixedHeaderSize
			}, {
				duration: 1200,
				complete: function() {
					$(window).on('scroll',setCurrentPip);
				}
			});
		});

		var setCurrentPip = function() {
			var eyePosition = $(document).scrollTop() + 0.5 * $(window).height();
			var $curr = $links.filter( function() {
				return $(this).data('section').offset().top < eyePosition;
			} ).last();
			$links.not($curr).removeClass('current');
			$curr.addClass('current');
		};

		$(window).on('scroll',setCurrentPip);

	})();


	// Contact form submission to salesforce
	$('.salesforce-contact-form').each(function(){

		var $form = $(this).children('form');
		var $thanks = $(this).children('.scf-thank-you');

		// 'Name' field is a honeypot - hide it from humans
		$form.find('[name=Name]').prop('required',false).parent().hide();

		$form.on('submit', function(e){

			var dataArr = $form.serializeArray();
			var dataObj = {};
			for (var i=0; i<dataArr.length; i++) {
				dataObj[dataArr[i].name] = dataArr[i].value;
			}

			// honeypot
			if (dataObj.Name) {return false;}
			delete dataObj.Name;

			$.ajax({
				type: "POST",
				dataType: "json",
				contentType: "application/json; charset=UTF-8",
				data: JSON.stringify(dataObj),
				processData: false,
				url: "https://applications.fdmgroup.com/services/apexrest/EnquiryService"
			}).done(function(){
				$form.fadeOut(400, function(){
					$thanks.fadeIn(400);
				});
			}).fail(function(jqXHR, textStatus, errorThrown){
				alert('Sorry, we are experiencing some technical issues - your message was not submitted.');
				console.log(jqXHR, textStatus, errorThrown);
			});

			return false;

		});

	});

function setCookie(key, value) {
            var expires = new Date();
            expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
            document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
        }



$(".en #confirmcookies").click(function(event) {
       
 	event.preventDefault();
  	setCookie('acceptcookies','1');
  	$('.cookies_overlay').fadeOut();
});

$(".en #denycookies").click(function(event) {
       
 	event.preventDefault();
  	setCookie('acceptcookies','0');
  	$('.cookies_overlay').fadeOut();
});

	/***** Header Logo *****/
	$('a.fdm-header-logo').each( function() {
		// Make it a link to the homepage for the current language (variabled fdmTranslatedHomeLink set server side)
		$(this).attr('href', window.fdmTranslatedHomeLink ? window.fdmTranslatedHomeLink : '/');
		var $logo = $(this).children('img');
		// For some reason, the logo wasn't animating in IE11 for some people in the FDM office, so use static image for IE, and animation otherwise
		var isInternetExplorer = ( navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0 );
		$logo.attr( 'src', isInternetExplorer ? $logo.attr('data-static-src') : $logo.attr('data-anim-src') );
	} );


	/**** Posts Listing (blog) *****/

	$('.fdm-post-listing-component').each(function(){

		var $section = $(this);
		var ajaxurl = $section.attr('data-ajax-url');
		var $filters = $('.fdm-post-listing-filters', this);
		var $tiles = $('.fdm-post-listing-tiles', this);
		var $noPosts = $('.fdm-post-listing-no-posts', this);
		var $loadMore = $('.fdm-post-listing-load-more', this);
		var loadOnScroll = $section.is('[data-load-on-scroll]');

		var getting = false;
		var getTiles = function( page, region, category, callback ) {
			getting = true;
			$.ajax({
				url: ajaxurl,
				method: 'GET',
				data: {
					page: page,
					region: region,
					category: category
				},
				success: function(response){
					getting = false;
					callback(response);
				},
			});
		};

		var highPage = 1;
		var loadMore = function( reset ) {

			var region = $filters.find('[name=region]').val();
			var category = $filters.find('[name=category]').val();
			highPage = reset ? 1 : highPage + 1;
			if ( reset ) { $tiles.empty(); }

			getTiles( highPage, region, category, function( response ) {
				if ( response.got_posts ) {
					$tiles.append( response.html );
					$noPosts.hide();
					$loadMore[ response.has_more ? 'show' : 'hide' ]();
				} else {
					$noPosts.show();
					$loadMore.hide();
				}
			} );

		};

		$filters.on('change', function() { loadMore(true); });

		$loadMore.on('click', function(){ loadMore(false); return false; });

		if ( loadOnScroll ) {

			$(window).on('scroll', function() {

				if ( ! getting && $loadMore.is(':visible') ) {
					var eyePosition = $(document).scrollTop() + $(window).height() * 0.8;
					var tilesBottom = $tiles.offset().top + $tiles.height();
					console.log( eyePosition, tilesBottom, eyePosition > tilesBottom ? 'get' : 'no' );
					if ( eyePosition > tilesBottom ) {
						loadMore( false );
					}
				}
			});

		}


	});


	/***** Mini Menu *****/

	$('.mini-menu-container').each(function(){

		var $container = $(this).children('.wpb_wrapper').first();
		var $menu = $('<div>').addClass('mini-menu');

		var $currentSection = null;
		var $currentSubSection = null;

		// loop through the elements in the container and arrange them into sections
		// simultaneously constructing the menu
		$container.children().each(function(){

			var $ele = $(this);

			if ($ele.is('.mini-menu-section')) {
				// marks the start of a new major section
				$currentSection = $('<div>').append($ele).appendTo($menu);
				$currentSubSection = null;
				return;
			}

			if ($currentSection && $ele.is('.mini-menu-subsection')) {
				// marks the start of a new minor section
				$currentSubSection = $('<a>').attr('href','#').text($ele.text()).data('contents',$ele).appendTo($currentSection);
				return;
			}

			if ( $currentSubSection ) {
				// add the element to the current section
				$currentSubSection.data('contents', $currentSubSection.data('contents').add($ele));
			}

		});

		$menu.prependTo($container);

		// function to show the given section and hide the others
		var showSection = function($subSection) {
			$menu.find('a').each(function(){
				if (this == $subSection[0]) {
					$(this).addClass('current').data('contents').show();
				} else {
					$(this).removeClass('current').data('contents').hide();
				}
				if ( $(window).width() < 900 ) {
					$('html, body').scrollTop( $subSection.data('contents').offset().top - 10 );					
				}
			});
		};

		//
		$menu.on('click','a',function(){
			showSection($(this));
			return false;
		});

		// start with the first section open
		showSection( $menu.find('a').first() );

	});


	/***** Reports *****/

	$('.fdm-reports-component').each(function(){

		var $container = $(this);
		var $filters = $('.fdm-report-filters', this);
		var $reports = $('.fdm-report-link', this);

		var filterReports = function() {
			var year = $filters.find('[name=year]').val();
			var categories = [];
			$filters.find('[name=category]:checked').each(function(){
				categories.push( $(this).val() );
			});
			// start with all visible
			$reports.show();
			if (year) {
				$reports.filter('[data-year!="'+year+'"]').hide();
			}
			if (categories.length) {
				$reports.filter(function(){
					return categories.indexOf($(this).attr('data-category')) == -1;
				}).hide();
			}
		}

		$filters.on('change', filterReports);

	});



	/***** Our People *****/

	$('.fdm-our-people-component, .fdm-board-of-directors-component').each(function(){

		var baseUrl = location.protocol+'//'+location.host+location.pathname+(location.search?location.search:"");
		var $overlay = $('.fdm-people-overlay', this).detach().appendTo(document.body);
		var $filters = $('.fdm-people-filters select', this);
		var $teasers = $('.fdm-person-teaser', this);
		var $gridblocks = $('.fdm-grid-block', this);

		$teasers.on('click', function(){
			showPerson( $(this).attr('data-person'), true );
		});

		$overlay.on('click', '.fdm-overlay-close', function() {
			$overlay.fadeOut();
			if ( window.history && history.replaceState ) {
				history.replaceState(null, null, baseUrl );
			}
		});

		var showPerson = function(slug, updateHistory) {
			var $profile = $overlay.find('.fdm-person-profile[data-person='+slug+']');
			if ( $profile.length ) {
				$overlay.find('.fdm-person-profile').hide();
				$profile.show();
				$overlay.fadeIn();
				if ( updateHistory && window.history && history.replaceState ) {
					history.replaceState(null, null, baseUrl+'#'+slug );
				}
			}
		};

		var filterPeople = function() {

			var country = $filters.filter('[name=country]').val();
			var role = $filters.filter('[name=role]').val();
			var pathway = $filters.filter('[name=pathway]').val();

			$.when($gridblocks.fadeOut(300)).done(function(){
				$teasers.each( function() {
					var $teaser = $(this);
					var $gridblock = $teaser.parent();
					var countryMatch = ( country == 'all' || $teaser.attr('data-country') == country );
					var roleMatch = ( role == 'all' || ~$teaser.attr('data-role').indexOf('|'+role+'|'));
					var pathwayMatch = ( pathway == 'all' || ~$teaser.attr('data-pathway').indexOf('|'+pathway+'|'));
					var show = countryMatch && roleMatch && pathwayMatch /* && anotherFilterMatch && anotherFilterMatch ... etc */;

					if ( show && !$gridblock.is(':visible') ) {
						$gridblock.fadeIn(500);
					}
				} );

			});

		};

		$filters.on('change', filterPeople);

		if (window.location.hash) {
			showPerson( window.location.hash.replace(/^#/,''), false );
		}

	});






	/**** Interactive Google Maps ****/

	// Helper function to fetch the Google Maps API when required (can be called multiple times and only fetches once)
	// Returns a jQuery promise object which resolves when the API is available and rejects on failure
	var getGoogleMapsApi = function() {
		var dfd = $.Deferred();
		// if maps API is already loaded, resolve the promise immediately
		if (window.google && window.google.maps) {
			dfd.resolve();
			return dfd;
		}
		// otherwise, try to fetch the script
		$.ajax({url:'https://maps.googleapis.com/maps/api/js?key='+googleMapsApiKey+'&libraries=geometry', dataType:'script', timeout: 5000}).always(function(){
			if (window.google && window.google.maps) {
				dfd.resolve();
			} else {
				dfd.reject();
			}
		});
		return dfd;
	};


	$('.fdm-map-component').each(function(){

		var $container = $(this);
		var $legend = $('.fdm-map-legend', this);
		var $locations = $('.fdm-map-location', this).detach();
		var $map = $('.fdm-map', this);
		var failMessage = function(msg) {
			$map.empty().append($('<p>').addClass('error').text(msg));
		};

		getGoogleMapsApi().then(function(){

			// define map styles
			var styles = [
				{
					/* start by turning everything off */
					"stylers": [
						{ "visibility": "off" }
					]
				},{
					/* show water (land mass will be seen as empty space around water) */
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [
						{ "visibility": "on" },
						{ "color": "#ffffff" }
					]
				},{
					/* add administrative boundaries
					"featureType": "administrative",
					"elementType": "geometry.stroke",
					"stylers": [
						{ "visibility": "on" },
						{ "weight": 0.4 }
					]*/
				}
			];

			var options = {
				scrollwheel: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles:styles,
				backgroundColor: "#000000",
				streetViewControl: false,
				mapTypeControl: false,
				minZoom: 1,
				maxZoom: 10,
				draggable: true,
			};

			// create the google map object
			var map = new google.maps.Map($map[0], options);

			var setMapDimensions = (function(){
				var mapWidth = null;
				var mapHeight = null;
				return function() {
					var newMapWidth = Math.min($container.width(), Math.pow(2, map.zoom) * 256);
					var newMapHeight = Math.min($(window).height()*0.7, 512, Math.pow(2, map.zoom) * 128);
					if (mapWidth !== newMapWidth || mapHeight != newMapHeight) {
						var oldCenter = map.getCenter();
						$map.css({width:newMapWidth, height:newMapHeight});
						google.maps.event.trigger(map, "resize");
						map.setCenter(oldCenter);
					}
				};
			})();

			var keepInBounds = (function(){
				var surpressEvent = false;
				return function() {
					var center = map.getCenter();
					var mapBounds = map.getBounds();
					if (!mapBounds || surpressEvent) {return;}
					var northAdjust = Math.max(0, mapBounds.getNorthEast().lat() - 75);
					var southAdjust = Math.min(0, mapBounds.getSouthWest().lat() + 60);
					var adjust = northAdjust + southAdjust;
					if (adjust) {
						surpressEvent = true;
						map.setCenter({lat:center.lat() - adjust, lng:center.lng()});
						surpressEvent = false;
					}
				};
			})();

			map.addListener('zoom_changed', setMapDimensions);
			$(window).on('resize', setMapDimensions);
			map.addListener('center_changed', keepInBounds);

			if ($('html').is('.touch')) {

				var enablePan = function() {
					$map.addClass('touch-pan');
					map.setOptions({draggable:true});
					$(window).on('touchstart.touch-pan', function(e){
						if (!$map.isOrContains(e.target)) {
							disablePan();
						}
					})
				};
				var disablePan = function() {
					$map.removeClass('touch-pan');
					map.setOptions({draggable:false});
					$(window).off('touchstart.touch-pan');
				};
				var togglePan = function() {
					if ($map.is('.touch-pan')) {disablePan();} else {enablePan();}
				};
				map.addListener('click', togglePan);

			}

			// add the locations
			var $infoWindowContent = $('<div class="google-map-info-window">');
			var infoWindow = new google.maps.InfoWindow({content:$infoWindowContent[0]});

			$locations.each(function(){
				var $location = $(this);
				var data = $location.data();
				// create LatLng object for this location's precise point
				data.latlng = new google.maps.LatLng(parseFloat($location.attr('data-latitude')), parseFloat($location.attr('data-longitude')));
				// add a marker to the map
				data.marker = new google.maps.Marker({
					position: data.latlng,
					icon: {url: $location.attr('data-marker-src')},
					clickable: true
				});
				data.marker.addListener('click', function(){
					infoWindow.close();
					$infoWindowContent.children().detach();
					$infoWindowContent.append($location);
					infoWindow.open(map, data.marker);
				});
			});

			var showFilteredMarkers = function() {
				$locations.each(function(){$(this).data('marker').setMap(null);});
				$legend.find('[data-layer]:checked').each( function() {
					var layer = $(this).attr('data-layer');
					$locations.each(function(){
						if ( $(this).attr('data-layer') == layer ) {
							$(this).data('marker').setMap(map);
						}
					});
				} );
			};

			showFilteredMarkers();
			$legend.on('change','[data-layer]', showFilteredMarkers);

			// start just north of center
			map.setCenter({lat:25, lng:0});
			map.setZoom( $container.width() > 1000 ? 2 : 1);


		}).fail(function(){

			failMessage('Error - Google maps failed to load');

		});
	});


	/**** Sticky Apply box ****/

	$('.launchBox, .fdm-follow-column').each(function(){

		if ( $(this).is('.launchBox') && $(this).closest('.fdm-follow-column').length > 0 ) {
			// sticky effect applied to .launchBox or .fdm-follow-column
			// in the event that the .launchBox is actually CONTAINED within a .fdm-follow-column, then quit so as not to duplicate the effect
			return;
		}

		// Note, in the following, 'viewbox' refers to the part of the page content which is visible on screen, IE under the fixed header

		var $box = $(this).is('.launchBox') ? $(this) : $(this).children('.vc_column-inner').children('.wpb_wrapper'); // The content which will follow you down the screen
		var $wrapper = $box.parent(); // The container for the box is a single column
		var $section = $box.closest('.g-cols'); // The page section containing the columns
		var $header = $('.l-header').first(); // The fixed header

		var setBoxPosition = function(){

			var viewBoxPosition = $header.offset().top + $header.outerHeight();
			var break1 = $wrapper.offset().top;
			var break2 = $section.offset().top + $section.outerHeight() - $box.outerHeight();
			$wrapper.css('height','auto');

			if ( viewBoxPosition < break1 ) {
				// haven't got to the columns yet, so leave in normal document flow position
				$box.css({position:'relative', top: 0});
			} else if ( viewBoxPosition < break2 ) {
				// scrolling through the columns, keep fixed at top of viewbox
				$box.css({position:'fixed', top: viewBoxPosition - $(document).scrollTop()});
			} else {
				// past the columns, keep at bottom of columns
				$box.css({position:'relative', top: $section.outerHeight() - $box.outerHeight() });
			}
		};
		$(window).on('scroll', setBoxPosition);
		setBoxPosition();
	});


	/**** Icon Carousel Height ****/

	$('.fdm-icon-carousel').each(function(){

		var $carousel = $(this);
		var $descriptions = $('.aio-icon-description', this);

		var fitHeight = function() {
			var maxHeight = 0;
			$descriptions.css('height','auto').each(function(){
				maxHeight = Math.max( maxHeight, $(this).height() );
			}).css('height',maxHeight);
		};

		$(window).on('load', fitHeight);
		$(window).on('resize', fitHeight);

	});


	/**** Client carousel  ****/
	/*
	var currentPage = 1;
	var $slider = $('.clients-list');
	var $slides = $slider.find('.client-name');

	var numPerPage = function() {
		return Math.floor( $(window).width() / $slides.first().width() );
	};

	var numPages = function() {
		return Math.ceil( $slides.length / numPerPage() );
	};

	var goToPage = function(p) {
		goToSlide( p * numPerPage() );
		currentPage = p;
	};

	var goToSlide = function(n) {
		$slider.css('left', $slides.eq(n).position().left);
		currentSlide = n;
	}

	// reposition slider if the window changes
	$(window).on('resize', function() {goToPage(currentPage); });
	$('.carousel-arrow.prev').on('click', function() {goToPage( ( currentPage - 1 + numPages() ) % numPages() );});
	$('.carousel-arrow.next').on('click', function() {goToPage( ( currentPage + 1 ) % numPages() );});
	goToPage(0);
	*/



	/**** Heading banner background video  ****/
	$(window).on('load resize', function() {
		var $video = $('.upb_video-src');
		if( $video.length > 0 ) {
			var windowWidth = $(window).width();
			$video.each(function() {
				var videoContHeight = $(this).parents('.upb_video-wrapper').height();
				$(this).css({'min-width':windowWidth, 'min-height':videoContHeight, 'width':'auto'});
			});
		}
	});
	
	$('.client-carousel-container').each(function(){
		
		$viewport = $('.viewport', this);
		$track = $('.track', this);
		$slides = $('.carousel-part', this);
		$next = $('.next', this);
		$prev = $('.prev', this);
		
		var currentPage;
		var numPerPage = function() {
			console.log('numPerPage', Math.floor( $viewport.width() / $slides.eq(0).width() ) );
			return Math.floor( $viewport.width() / $slides.eq(0).width() );
		};
		var numPages = function() {
			console.log('numPages', Math.ceil( $slides.length / numPerPage() ) );
			return Math.ceil( $slides.length / numPerPage() );
		};
		var goToPage = function(p) {
			goToSlide( p * numPerPage() );
			currentPage = p;
		};
		var goToSlide = function(n) {
			$track.css('left', -$slides.eq(n).position().left);
		}
		// reposition slider if the window changes
		$(window).on('resize', function() {goToPage(currentPage); });
		$next.on('click', function() {goToPage( ( currentPage + 1 ) % numPages() );});
		$prev.on('click', function() {goToPage( ( currentPage - 1 + numPages() ) % numPages() );}); 
		goToPage(0);
		
		
	
	});
	
	
	/**** Remove Xing if not Germany *****/
	if ( window.fdmCurrentLang != 'de' ) {
		$('footer .w-socials-item.xing').remove();
	}
	
});
