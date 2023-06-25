jQuery(document).ready(function($) {


    
    $('.nav-pills li').click(function() {
    $(this).addClass('active').siblings().removeClass('active');
});

$("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
  $(e.target)
    .prev()
    .find("i:last-child")
    .toggleClass("fa-minus fa-plus");
});


});

// Our Product Slider
$('.ourProductSlider').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1,
            margin: 10,
        },
        768: {
            items: 2,
            margin: 20
        },
        992: {
            items: 3,
            margin: 20
        },
        1200: {
            items: 4,
            margin: 20
        }
    }
})

// What Our Client Say
$('.whatOurClientSaySlider').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    responsive: {
        0: {
            items: 1,
            margin: 20,
        },
        768: {
            items: 2,
            margin: 20,
        },
        992: {
            items: 2,
            margin: 20
        },
        1200: {
            items: 3,
            margin: 20
        }
    }
})