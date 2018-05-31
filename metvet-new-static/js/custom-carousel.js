    $(document).ready(function($) {
        $("#metvet-silder").owlCarousel({
            singleItem : true,
            
            // Navigation
            navigation : true,
            navigationText : ["",""],
            rewindNav : true,
            scrollPerPage : false,

            pagination : false,
            paginationNumbers : false,

            slideSpeed : 1000,
            
            //Lazy load
            lazyLoad : true,
            lazyFollow : true,
            lazyEffect : "fade",
            
            // Responsive
            responsive: true,
            responsiveRefreshRate : 0,
            responsiveBaseWidth: window,

            // Responsive
            autoPlay : false,
            stopOnHover : true,

            animateOut: 'slideOutLeft',
            animateIn: 'slideOutRight',
            smartSpeed:450
        });


        });


    $("body").data("page", "frontpage");