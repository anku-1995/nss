$(document).ready(function () {
console.log($(window).width())

  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 43) {
        $("header").addClass("darkHeader");
    }
    else{
      $("header").removeClass("darkHeader");
    }
}); 



  $('.home-testimonial-slider .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        }
        ,
        767:{
            items:2,
            nav:true,
            loop:false
        }
        ,
        1000:{
            items:2,
            nav:true,
            loop:false
        },
        1100:{
            items:3,
            nav:true,
            loop:false
        }
    },
    
  })







  $('.home-succes-story-slider .owl-carousel').owlCarousel({
    loop:true,
    responsiveClass:true,
    stagePadding:300,
    margin:30,
    responsive:{
        0:{
            items:1,
            nav:false,
            margin:10,
            stagePadding:50
        },
        550:{
            items:1,
            nav:false,
            margin:20,
            stagePadding:100
        },
        750:{
            items:2,
            nav:false,
            margin:20,
            stagePadding:0
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
        ,
        1380:{
            items:1,
            nav:true,
            stagePadding:350,
            loop:true
        },
        1800:{
            items:1,
            nav:true,
            stagePadding:460,
            loop:true
        },
        1920:{
            items:1,
            nav:true,
            stagePadding:600,
            loop:true
        },
        2024:{
            items:1,
            nav:true,
            stagePadding:520,
            loop:true
        },
        2400:{
            items:1,
            nav:true,
            stagePadding:680,
            loop:true
        }
    }
  })







  $('.home-section1-tiles .owl-carousel').owlCarousel({
    loop:true,
    responsiveClass:true,
    margin:30,
    responsive:{
        0:{
            items:1,
            nav:false,
            margin:10,
            stagePadding:50,
        },
        480:{
            items:1,
            nav:false,
            margin:10,
            stagePadding:100,
        },
        600:{
            items:1,
            nav:false,
            margin:10,
            stagePadding:150,
        },
        900:{
            items:3,
            nav:false,
            loop:false
        }
    }
  })


  $('.skill-india-section3-slider .owl-carousel').owlCarousel({
    loop:true,
    responsiveClass:true,
    margin:20,
    responsive:{
        0:{
            items:1,
            nav:false,
            margin:10,
            stagePadding:50,
        },
        480:{
            items:1,
            nav:false,
            margin:10,
            stagePadding:100,
        },
        600:{
            items:2,
            nav:true,
            margin:10,
        },
        800:{
            items:3,
            nav:true,
            loop:true
        },
        900:{
            items:3,
            nav:true,
            loop:true
        }
        ,
        1200:{
            items:4,
            nav:true,
            loop:true
        }
    }
  })

  $('.mass-wedding-sl .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    margin:20,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        480:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:false,
            margin:10,
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
  })

  

  $('.mobile-view-home-section91-inner .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    //autoplay:3000,
   // smartSpeed: 4000,
    margin:20,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
  })


  $('.causes-section3-slider .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    //autoplay:3000,
   // smartSpeed: 4000,
    margin:20,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        990:{
            items:4,
            nav:true
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        },
        1200:{
            items:6,
            nav:true,
            loop:false
        }
    }
  })


  $('#awardpage-section3-slider .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    items:3,
    //autoplay:3000,
    // smartSpeed: 4000,
    margin:0,
    responsive:{
        0:{
            items:1,
            nav:false,
            loop:true,
            margin:10,
            stagePadding:50,

        },
        767:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        },
        1200:{
            items:3,
            nav:true,
            loop:false
        }
    }
  })


  $('.details-bank-slider-main .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    //autoplay:3000,
   // smartSpeed: 4000,
    margin:20,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:6,
            nav:true,
            loop:false
        },
        1200:{
            items:7,
            nav:true,
            loop:false
        }
    }
  })


  $('.woh-page-section6 .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    //autoplay:3000,
   // smartSpeed: 4000,
    margin:5,
    responsive:{
        0:{
            items:1,
            margin:0,
            nav:false,
            stagePadding:50,
            loop:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        },
        1200:{
            items:4,
            nav:true,
            loop:false
        }
    }
  })


  $('.mass-wedding-section3-slider .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    //autoplay:3000,
   // smartSpeed: 4000,
    margin:5,
    responsive:{
        0:{
            items:1,
            margin:0,
            nav:false
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        },
        1200:{
            items:1,
            nav:true,
            loop:false
        }
    }
  })


  $('.changing-slider .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    //autoplay:3000,
   // smartSpeed: 4000,
    margin:20,
    responsive:{
        0:{
            items:1,
            margin:10,
            nav:false,
            loop:true,
            stagePadding:50
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        },
        1200:{
            items:4,
            nav:true,
            loop:false
        }
    }
  })


  $('.covid-page-section5 .owl-carousel').owlCarousel({
    loop:true,
    responsiveClass:true,
    autoplay: true,
    slideTransition: 'linear',
    autoplayTimeout: 3000,
    autoplaySpeed: 3000,
    autoplayHoverPause: true,
   stagePadding:150,
   nav:false,
    margin:20,
    responsive:{
        0:{
            items:1,
            nav:false,
            stagePadding:50
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        },
        1400:{
            items:4,
            nav:true,
            loop:true
        }
    }
  })




  $('.about-page-section4-right .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    margin:20,
    responsive:{
        0:{
            items:1,
            nav:false,
            loop:true,
            margin:10,
            stagePadding:50,

        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
  })


  $('.latest-update-slider .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }
  })


  $('.sucess-story-rep-slider .owl-carousel').owlCarousel({
    loop:false,
    responsiveClass:true,
    margin:20,
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:2,
            nav:true,
            loop:false
        }
    }
  })



  initSlidern();
function initSlidern() {
  $('.ab-page-sec3 .owl-carousel').owlCarousel({
    loop:true,
    items:1,
    center: true,
    responsiveClass:true,
    autoplay:500,
    onInitialized: startProgressBar,
    onTranslate: resetProgressBar,
    onTranslated: startProgressBar,
    URLhashListener:true,
    //autoplayHoverPause:true,
    startPosition: 'URLHash',
    smartSpeed: 750,
    animateOut: 'fadeOut',
    margin:20,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
            loop:true
        }
    }
  })
}


$('.ab-page-sec3 .owl-carousel').on('changed.owl.carousel', function(event) {
    var current = event.item.index;
    var hash = $(event.target).find(".owl-item").eq(current).find(".item").attr('data-hash');
    $('.'+hash).addClass('active');
    history.replaceState(null, null, ' ');
  });

  $('.ab-page-sec3 .owl-carousel').on('change.owl.carousel', function(event) {
    var current = event.item.index;
    var hash = $(event.target).find(".owl-item").eq(current).find(".item").attr('data-hash');
    $('.'+hash).removeClass('active');
    history.replaceState(null, null, ' ');
  });

function startProgressBar() {
    // apply keyframe animation
    $(".slide-progress").css({
      width: "100%",
      transition: "width 5000ms"
    });
  }
  
  function resetProgressBar() {
    $(".slide-progress").css({
      width: 0,
      transition: "width 0s"
    });
  }



  $('.multimmenu').on('click', () =>{
    $('.multimmenu').toggleClass('active');
    $('#mobilemenu').toggleClass('open');
})


$('.mobile-menu a').on('click', () => {
    $('.mobile-menu a .fa').toggleClass('fa-times');
    $('.mobile-menu a .fa').toggleClass('fa-bars');
    $('.navigation').toggleClass('open');
    $('.black-over').toggle();
});

$('.black-over').on('click', () =>{
    $('.navigation').removeClass('open');  
    $('.black-over').hide();
    $('.mobile-menu a .fa').removeClass('fa-times');
    $('.mobile-menu a .fa').addClass('fa-bars');
})


$('.hindivideo').click(function(){
    $(this).addClass('active');
    $('.englishvideo').removeClass('active');
    $('#hindi-video').show();
    $('#english-video').hide();
    //$('#hindi-video video')[0].play();
    //$('#english-video video')[0].pause();
    $('video')[0].pause();
    $('.play').show();
})

$('.play1').click(function(){
    $(this).hide();
    $('#hindi-video video')[0].play();
    $('#english-video video')[0].pause();
})


$('.englishvideo').click(function(){
    $(this).addClass('active');
    $('.hindivideo').removeClass('active');
    $('#english-video').show();
    $('#hindi-video').hide();
    $('video')[0].pause();
    $('.play').show();
    //$('#hindi-video video')[0].pause();
   // $('#english-video video')[0].play();
})

$('.play2').click(function(){
    $(this).hide();
    $('#hindi-video video')[0].pause();
    $('#english-video video')[0].play();
})


$('.play-comman').click(function(){
    $(this).hide();
    $('#comman-video video')[0].play();
})


$('.custom-poster-woh-section-video').click(function(){
    $('#woh-video5')[0].play();
})
$('.close').click(function(){
    $('#woh-video5')[0].pause();
})


$("#browser").treeview({
    collapsed: true
  });


});



$(function(){
	$(".typed").typed({
		strings: [  "'Alone we can do so little;"],
		// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
		stringsElement: null,
		// typing speed
		typeSpeed: 0.1,
		// time before typing starts
		startDelay: 0,
		// backspacing speed
		backSpeed: 20,
		// time before backspacing
		backDelay: 500,
		// loop
		loop: true,
		// false = infinite
		loopCount: 1,
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "|",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
		// call when done callback function
		callback: function() {},
		// starting callback function before each string
		preStringTyped: function() {},
		//callback for every typed string
		onStringTyped: function() {},
		// callback for reset
		resetCallback: function() {}
	});

    $(".typed1").typed({
		strings: [  "Together we can do so much'"],
		// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
		stringsElement: null,
		// typing speed
		typeSpeed: 0.1,
		// time before typing starts
		startDelay: 1000,
		// backspacing speed
		backSpeed: 20,
		// time before backspacing
		backDelay: 500,
		// loop
		loop: true,
		// false = infinite
		loopCount: 1,
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "|",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
		// call when done callback function
		callback: function() {},
		// starting callback function before each string
		preStringTyped: function() {
            
        },
		//callback for every typed string
		onStringTyped: function() {
        },
		// callback for reset
		resetCallback: function() {
    
        }
	});


    $(".home-banner-caption .donate-btn").delay(2000).fadeIn("slow");  



});








$(document).ready(function () {
    updateContainer();
    $(window).resize(function() {
        updateContainer();
    });
});
function updateContainer() {
    var $containerWidth = $(window).width();
    if ($containerWidth > 990) {
    
        var owl = $('.home-succes-story-slider .owl-carousel');
        owl.owlCarousel();
        // Listen to owl events:
        owl.on('changed.owl.carousel', function(event) {
            $(".story1").effect( "shake", {times:1}, 1500  );
            $(".story2").effect( "shake", {times:1}, 1700  );
            $(".story3").effect( "shake", {times:1}, 1900  );
            $(".story4").effect( "shake", {times:1}, 2100  );
        })

        var owln = $('.home-testimonial-slider .owl-carousel');
        owln.owlCarousel();
        // Listen to owl events:
        owln.on('changed.owl.carousel', function(event) {
          $(".sak1").effect( "shake", {times:1}, 1500  );
          $(".sak2").effect( "shake", {times:1}, 1700  );
          $(".sak3").effect( "shake", {times:1}, 1900  );
          $(".sak4").effect( "shake", {times:1}, 2100  );
        })

    }
    else{

    }
}




$(document).ready(function() {
	$('.accordionContent:first').hide();
	/*$('.accordionButton:first').addClass('on');*/
	$('.accordionButton').click(function() {
		$('.accordionButton').removeClass('on');
	 	$('.accordionContent').slideUp('normal');
		if($(this).next().is(':hidden') == true) {
			$(this).addClass('on');
			$(this).next().slideDown('normal');
		 } 
	 });

});


