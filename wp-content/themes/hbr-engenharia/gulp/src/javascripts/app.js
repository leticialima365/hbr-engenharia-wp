var App = function () {

    function scrollBPage(){
        $(window).scroll(function(){
            if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
               $('.buttons-fixed').addClass('bottomFix');
            }else{
                $('.buttons-fixed').removeClass('bottomFix');
            }
        });
    }
    function openSubmenu(){
        $('.submenu').on('click',function(){
            $(this).toggleClass('open-sub');
        });
    }

    function menuMobile(){
        $('.menu-mobile').on('click',function(){
            $('.menu-line').stop().slideToggle();
        });
    }
    function tabs(){
        $('ul.tabs li:first-child').addClass('current');
        $('.content-tabs-full .tab-content').first().addClass('current');
        $('ul.tabs li').click(function(){
            var tab_id = $(this).attr('data-tab');
    
            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');
    
            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
        })
    }

    function slideTopo() {
        $('.slide-topo.owl-carousel').owlCarousel({
            loop: false,
            margin: 0,
            nav: true,
            items:1
        })
    }
    function slideGaleria() {
        $('.slide-galeria.owl-carousel').owlCarousel({
            loop:true,
            margin:15,
            mouseDrag:true,
            touchDrag:true,
            nav:true,
            responsive:{
                0:{
                    items:1.5
                },
                600:{
                    items:2.5
                },
                1000:{
                    items:3.5
                }
            }
        })
    }


    return {
        init: function () {
            slideTopo();
            slideGaleria();
            tabs();
            // openSubmenu();
            menuMobile();
            // slideUnidades();
            // scrollButtons();
            // scrollBPage();
            // headerColors();
        }
    }


}()
