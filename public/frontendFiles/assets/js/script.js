// isotope categorywise product filtering
var $grid = $('.category-grid').isotope({
});

$grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
  });

$('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
});


// isotope filter buttons scripts
const categoryBtns = $('.category-btn');
const resetActiveBtns = () => {
    jQuery.each(categoryBtns, function(i, item){
        $(item).removeClass('category-btn-active');
    })
}

// setting the active isotope filtering button
jQuery.each(categoryBtns, function(i, item){
    $(item).bind('click', function(event){
        if($(event.target).is('button')){
            resetActiveBtns();
            $(item).addClass('category-btn-active');
        }
    })
});

// New Nav Bar 

$('.sw-navbar-show-btn').click(function(){
    $('.sw-navbar-cnt .sw-navbar-l').toggleClass('show-navlist');
    $('.sw-navbar-cnt .sw-navbar-r').toggleClass('show-navlist')
});

$(document).ready(function(){
    // aos initialization
    AOS.init({
        disable: false, 
        startEvent: 'DOMContentLoaded', 
        initClassName: 'aos-init', 
        animatedClassName: 'aos-animate', 
        useClassNames: false, 
        disableMutationObserver: false, 
        debounceDelay: 50, 
        throttleDelay: 99, 
        offset: 120, 
        delay: 0, 
        duration: 1400, 
        easing: 'ease', 
        once: false, 
        mirror: false, 
        anchorPlacement: 'top-bottom', 
      });

      // owl carousel slider - explore
      $('.header-slider').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        dots: true,
        items: 1,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        video:true,
        navText: ["<i class = 'fas fa-chevron-left'></i>", "<i class = 'fas fa-chevron-right'></i>"],
    });

      // owl carousel slider - explore
      var $carousel = $(".explore-slider");
      $('.explore-slider').owlCarousel({
        loop: true,
        margin: 40,
        nav: true,
        dots: false,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout: 3000,
        smartSpeed: 2000,
        autoplayHoverPause:true,
        slideBy:4,
        // rtl:true,
        navText: ["<i class = 'fas fa-chevron-left'></i>", "<i class = 'fas fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
            },
            992:{
                items:3,
            },
            1200: {
                items: 4,
            },
            1400:{
                items:4,
            }
        }
    });
    setTimeout(() => {
        var carouselData = $carousel.data();
        var carouselOptions = carouselData['owl.carousel'].options;
          carouselOptions.autoplayTimeout = 6000;
        $carousel.trigger('refresh.owl.carousel');
      }, 1000);


      // owl carousel slider - offer
      $('.offer-slider').owlCarousel({
        loop: true,
        margin: 40,
        nav: true,
        dots: true,
        items: 1,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        rtl:true,
        navText: ["<i class = 'fas fa-chevron-left'></i>", "<i class = 'fas fa-chevron-right'></i>"],
    });


    // product preview section
    const TH_IMG = 'th-img';
    const TH_VID = 'th-vid';
    const previewZoomContainer = $('#preview-zoom');
    const allThumbnails = $('.thumbnail-item');
    jQuery.each(allThumbnails, function(idx, thumbnailItem){
        $(thumbnailItem).click(function(){
            let thumbType = $(this).attr('data-thumb-type');
            if(thumbType == TH_IMG){
                let thumbSrc = $(this).children('img').attr('src');
                previewZoomContainer.html(`
                    <img src = "${thumbSrc}" class = "img-fluid">
                `);
            }
            if(thumbType == TH_VID){
                let thumbSrc = $(this).children('video').children('source').attr('src');
                previewZoomContainer.html(`
                    <video style = "height: 100%; width: 100%; object-fit: cover; padding: 8px 2px;" controls autoplay muted>
                        <source src = "${thumbSrc}" type = "video/mp4">
                    </video>
                `);
            }
        });
    });

    

    // about us page video player
    $("#play-pause-btn").click(function(){
        let videoElem = $('.about-block.video-block video');
        videoElem[0].paused ? videoElem.trigger('play') : videoElem.trigger('pause');
    });

    const navLinkSm = $('.nav-link-sm .nav-link');
    $.each(navLinkSm, function(idx, linkItem){
        $(linkItem).click(function(e){
            console.log($(e.target).parent().children('.sub-nav-items'));
            $(e.target).parent().children('.sub-nav-items').toggleClass('show-sub-nav-items');
        });
    });
});