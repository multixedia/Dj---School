$(document).ready(function() {
	
	// Slideshow
	$(".slideshow").swipeshow({
	  autostart: true,    /* Set to `false` to keep it steady */
	  interval: 3000,     /* Time between switching slides (ms) */
	  initial: 0,         /* First slide's index */
	  speed: 700,         /* Animation speed (ms) */
	  friction: 0.3,      /* Bounce-back behavior; use `0` to disable */
	  mouse: true,        /* enable mouse dragging controls */
	  keys: true,         /* enable left/right keyboard keys */
	
	  onactivate: function(){},
	  onpause: function(){},
	  $dots: $("div.dots")
	});
	
	
	$('.nav-collapse ul li a').click(function() {
		$('.nav-collapse').animate({
			height: 0
		},0, function() {
			$('.nav-collapse').removeClass('in');
		});
		
	});
	
	$('.menu li.active').scrollspy();

	
	// Scroll
    $('a[href=#top]').click(function(){
		$('html, body').animate({ scrollTop: '0px'}, 'slow');
        return false;
    });


    $('a[href=#startseite]').click(function(){
		//$('html, body').animate({ scrollTop: $(document).height()}, 1500);
		$('html,body').animate({ scrollTop: $("body").offset().top}, 'slow');
        return false;
    });

    $('a[href=#service]').click(function(){
		//$('html, body').animate({ scrollTop: $(document).height()}, 1500);
		$('html,body').animate({ scrollTop: $("#service").offset().top }, 'slow');
        return false;
    });

    $('a[href=#preise]').click(function(){
		//$('html, body').animate({ scrollTop: $(document).height()}, 1500);
		$('html,body').animate({ scrollTop: $("#preise").offset().top }, 'slow');
        return false;
    });

    $('a[href=#kontakt]').click(function(){
		//$('html, body').animate({ scrollTop: $(document).height()}, 1500);
		$('html,body').animate({ scrollTop: $("#kontakt").offset().top }, 'slow');
        return false;
    });
    
    // Navigation
$('.menu li a').click(function (e) {
  $('.menu li.active').removeClass('active')
  $(this).parent('li').addClass('active')
})
	
	
});
