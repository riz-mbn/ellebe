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

            $(window).scroll(function() {
                var getTop = $('.courses_results').offset().top;
                if ($(this).scrollTop() > getTop){  
                    $('.filter_sticky').addClass("active");
                }
                else{
                    $('.filter_sticky').removeClass("active");
                }

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

            });

            
            //Click event to scroll to top
            $('.btn_scroll_up').click(function(){
                $('html, body').animate({scrollTop : 0},800);
                return false;
            });

            //smooth scroll
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();
                var target = this.hash;
                var $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 150
                }, 900, 'swing', function () {
                    //window.location.hash = target;
                });
            });
            


            $(window).resize(function(){
                var $windowWidth = $(window).width();
                console.log($windowWidth);
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
                            breakpoint: 375,
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
            });

                    
            //smooth scroll
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();
                var target = this.hash;
                var $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 100
                }, 900, 'swing', function () {
                    // window.location.hash = target;
                });
            });

            var $el, $ps, $up, totalHeight;

            $(".col-copy .button").click(function() {
                
            totalHeight = 0

            $el = $(this);
            $p  = $el.parent();
            $up = $p.parent();
            $ps = $up.find("div:not('.btn_read_more')");
            
            // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
            $ps.each(function() {
                totalHeight += $(this).outerHeight();
            });
                    
            $up
                .css({
                // Set height to prevent instant jumpdown when max height is removed
                "height": $up.height(),
                "max-height": '100%'
                })
                .animate({
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
