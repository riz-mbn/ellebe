(function($){

    var app = {
        onReady: function(){
            app.customDropdown();
        },	
        onLoad: function(){

            $(document).foundation();
            app.utils();
        },


		utils: function(){


            //preloader            
            $('#preloader').fadeOut('slow');

            $('.navbar .btn-user').click(function(){
                $('#header').toggleClass('show-account');
                $('#header').removeClass('show-classes');
                $('#header').removeClass('show-menu');
            });
            
            $('.navbar .btn-classes').click(function(){
                $('#header').toggleClass('show-classes');
                $('#header').removeClass('show-account');
                $('#header').removeClass('show-menu');
            });

            $('.mobmenu .menu li.menu_item a').click(function(){
                $('.navicon').click();
            });

            var lastId, topMenu = $('.services_menu'),
            topMenuHeight = topMenu.outerHeight()+15,
            // All list items
            menuItems = topMenu.find('a'), 
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function(){
                var url = $(this).attr("href");
                var hash = url.substring(url.indexOf("#"));
                var item = $(hash);
                if (item.length) { return item; }
            });   

            $(window).scroll(function() {  

                // Get container scroll position
                var fromTop = $(this).scrollTop() + topMenuHeight;

                // Get id of current scroll item
                var cur = scrollItems.map(function(){
                    var offset = $(this).offset().top - 200;
                    if (offset < fromTop)
                    return this;
                });
                
                // Get the id of the current element
                cur = cur[cur.length-1];
                var id = cur && cur.length ? cur[0].id : "";
                if (lastId !== id) {
                    lastId = id;                    

                        $('.services_menu .menu_item.' + id).addClass('is_active').siblings('.menu_item').removeClass('is_active');     
                        
                    if( !$('.services_nav .nav_item.' + id).hasClass('is_active') ) {
                        $('.services_nav .nav_item.is_active').removeClass('is_active slick-current');
                        $('.services_nav .nav_item.' + id).addClass('is_active slick-current');
                    }
                }
            


                //stick on main menu
                var button_up;
                var sticky = false;
                var top = $(window).scrollTop();
                    
                if ( top > 100 ) {
                    $('.sticky').addClass('is-stuck');
                    $('.sticky').removeClass('is-anchored');
                    sticky = true;
                } else {
                        $('.sticky').addClass('is-anchored');
                        $('.sticky').removeClass('is-stuck');
                }                
                    
                // sticky on submenu services and services on scroll mobile
                if ( $(".sticky-container").offset().top < top ) {
                    $('.services_nav, .services').addClass('is_sticky');
                    sticky = true;

                } else {

                    $('.services_nav, .services').removeClass('is_sticky');

                }

                /* Button Scroll Up */
                (button_up = function() {
                    var button;
                    button = $('.btn_scroll_up');
                    if (top > $(window).offset().top){
                        return button.fadeIn('slow');
                    } else {
                        return button.fadeOut('slow');
                    }
                })();   
            
                //submenu services on scroll desktop
                var getTop = $('.sticky-container').offset().top;                            
                var scrollTop = $(window).scrollTop();
                if ( scrollTop > 180) {
                    $('.subnav').addClass('is_sticky');
                    sticky = true;
                } else {
                    $('.subnav').removeClass('is_sticky');
                }



            });
            //Click event to scroll to top
            $('.btn_scroll_up').click(function(){
                $('html, body').animate({scrollTop : 0});
                return false;
            });            

            
            // *only* if we have anchor on the url
            if(window.location.hash) {

                var scroll = $(window.location.hash).offset().top - 200;
                scroll  = scroll + 'px';
                // smooth scroll to the anchor id
                $('html, body').animate({
                    scrollTop: scroll
                });


                var url  = window.location.hash;
                var hash = url.substring(url.indexOf("#")+1);
                $('.services_nav .nav_item.' + hash).addClass('is_active slick-current').siblings('.nav_item').removeClass('is_active slick-current');     
                $('.subnav .menu .' + hash).addClass('is_active').siblings('.menu_item').removeClass('is_active');    
            }            
            else {
                
                $('.services_nav .nav_item.botox').addClass('is_active slick-current');
                $('.subnav .menu .menu_item.botox').addClass('is_active');
            }
                        
            $('.submenu .menu_item').click(function(e){

                var anchor = $(this).attr('data-anchor');
                $('.subnav .menu .menu_item.' + anchor).addClass('is_active').siblings('.menu_item').removeClass('is_active'); 
                $('.services_nav .nav_item.' + anchor).addClass('is_active slick-current').siblings('.slick-slide').removeClass('is_active slick-current');  

                if( !$('.services_nav .nav_item.' + anchor).hasClass('is_active') ) {
                    $('.services_nav .nav_item.is_active').removeClass('is_active slick-current');
                    $('.services_nav .nav_item.' + anchor).addClass('is_active slick-current');
                }
                e.preventDefault();

            });      

            $('.subnav .menu .menu_item').click(function(e){
                $(this).addClass('is_active').siblings('.menu_item').removeClass('is_active'); 
                e.preventDefault();
            });           
            
            $('.services_nav .nav_item').click(function(e){
                $('.services_nav .nav_item.is_active').removeClass('is_active slick-current');
                $(this).addClass('is_active slick-current');
                e.preventDefault();
            });            
                        
            //smooth scroll
            $('a[href^="#"]').click(function (e) {
                e.preventDefault();
                var target = this.hash;
                var $target = $(target);
                var name = this.hash.slice(1);
                var offset = 0;
    
                target = target.length ? target : $('[name=' + name +']');
    
                if( $windowWidth <= 1023 ){
                    offset = 250
                }
                else {
                    offset = 200
                }
    
                $('html, body').stop().animate({
                    scrollTop: $target.offset().top - offset
                }, function () {
                    window.location.hash = target;
                });
            });

            

            //submenu services slick on mobile
            var $windowWidth = $(window).width();
            if ($windowWidth <= 1023) {                
                $('.services_nav').slick({                        
                    dots: false,
                    arrow: true,
                    speed: 300,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    variableWidth: true,
                    infinite: true,
                    draggable: true,
                    focusOnSelect: true                    
                });

                $('.services_nav.slick-slider .nav_item').each(function(){
                    var nav_item = $(this);
                    if (nav_item.is(":first-child")) {
                        nav_item.addClass('is_active');
                    }
                    nav_item.on('click', function(e) {

                        e.preventDefault();

                        var target = $(this).data('anchor'); 
                        var $target = $(target);      

                        $(this).addClass('is_active').siblings('.nav_item').removeClass('is_active');     

                        $('html, body').stop().animate({
                        'scrollTop': $target.offset().top - 160
                        }, function() {
                            window.location.hash = target;       
                            return false;                     
                        });
                    
                    });
                    
                });
            }

            //enable slick services section on homepage mobile
            if ($windowWidth <= 1400) {                
                $('.services_info_items').slick({
                    dots: false,
                    arrow: true,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    variableWidth: true,
                    focusOnSelect: true,
                    draggable: true,
                    asNavFor: '.services_info_contents',
                    responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1
                        }
                    },
                        {
                        breakpoint: 320,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1
                        }
                        }
                    ]                    
                });
                $('.services_info_contents').slick({
                    dots: false,
                    arrow: false,
                    infinite: true,
                    speed: 300,
                    asNavFor: '.services_info_items',                 
                });
            }

            //read more button on foundation section in homepage
            var $el, $ps, $up, totalHeight;
            $(".col-copy .button").click(function() {
                totalHeight = 0
                $el = $(this);
                $p  = $el.parent();
                $up = $p.parent();
                $ps = $up.find("div:not('.btn_read_more')");            
                $ps.each(function() {
                    totalHeight += $(this).outerHeight();
                });                    
                $up.css({
                    // Set height to prevent instant jumpdown when max height is removed
                    "height": $up.height(),
                    "max-height": '100%'
                }).animate({
                    "height": '100%'
                });                    
                // fade out read-more
                $p.fadeOut();                
                // prevent jump-down
                return false;                    
            });
        },

        customDropdown: function() {
            $('.custom_dropdown > li').hover(function(){
                $(this).addClass('hover');
            }, function(){
                $(this).removeClass('hover');
            })

            $('.custom_dropdown > li').click(function(){
                $(this).toggleClass('hover');
            });
        }
    }

    document.addEventListener('DOMContentLoaded', app.onReady);
    window.addEventListener('load', app.onLoad);

})(jQuery);
