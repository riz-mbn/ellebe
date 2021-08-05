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

            $(window).scroll(function() {                
                //stick on main menu
                var button_up;
                var sticky = false;
                var top = $(window).scrollTop();
                    
                if ( $(".sticky-container").offset().top < top ) {
                    $('.sticky').addClass('is-stuck');
                    $('.sticky').removeClass('is-anchored');
                    sticky = true;
                } else {
                        $('.sticky').addClass('is-anchored');
                        $('.sticky').removeClass('is-stuck');
                }                
                    
                // sticky on submenu services and services on scroll mobile
                if ( $('.sticky-container').offset().top < top ) {
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
                $('html, body').animate({scrollTop : 0},800);
                return false;
            });            

            //smooth scroll on anchor links
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  var $windowWidth = $(window).width();
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

                  var offset = 0;

                    if ($windowWidth < 1023) {
                        offset = 160;
                    }

                  if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top
                    }, 1000);
                    return false;
                  }
                }
              });
            
            //active item on submenu services
            $('.subnav .menu .menu_item').each(function(){
                var menu_item = $(this);
                if (menu_item.is(":first-child")) {
                    menu_item.addClass('is_active');
                }
                menu_item.on('click', function(e) {
                    e.preventDefault();
                    $(this).addClass('is_active').siblings('.menu_item').removeClass('is_active');  
          
                    return false;                    
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
