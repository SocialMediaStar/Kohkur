//LOAD BOTTOM NAVIGATION
$( "#bottom-toolbar" ).load( "bottom-navigation.html", function() {
    var swipernav = new Swiper ('.swiper-toolbar', {
        direction: 'horizontal',
        effect: 'slide',
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 0,
/* 			pagination: {
        el: '.bottom-navigation__pagination'
        }, */
        on: {
        reachEnd: function () {
          $('.bottom-navigation__more').hide();
        },
        reachBeginning: function () {
          $('.bottom-navigation__more').show();
        },
        }
    });
    $(".bottom-navigation").on('click', '.bottom-navigation__more' ,function(){
        swipernav.slideNext();
    });
});

