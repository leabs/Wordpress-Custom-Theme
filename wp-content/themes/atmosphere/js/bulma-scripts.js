//Navbar hamburger display on mobile
document.addEventListener('DOMContentLoaded', function() {
    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(function($el) {
            $el.addEventListener('click', function() {

                // Get the target from the "data-target" attribute
                var target = $el.dataset.target;
                var $target = document.getElementById(target);

                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });
    }
    var tocListChildren = $('.toc-list-item').children()
    var tocSection = $('#tocs');
    if (tocListChildren.length <= 0) {
        tocSection.hide();
    }
});

//Navbar adjustments on scroll
$(document).ready(function(event) {
    $(window).scroll(function() {
        // 100 = The point you would like to fade the nav in.
        if ($(window).scrollTop() > 34) {
            $('#main-nav').addClass('nav-scrolled');
            $('#main-nav').addClass('nav-scrolled-text');
            $('.navbar-brand').addClass('brand-dark');
            $(".hero-body").css("margin-top", "64px");
            $('.navbar-brand').removeClass('brand-light');
            $('.navbar-brand a img').attr('src', '/images/nav-logo-dark.svg');
            $('.non-parrallax-font nav div div a img').attr('src', '/images/nav-logo-dark.svg');
        } else {
            $('#main-nav').removeClass('nav-scrolled');
            $('#main-nav').removeClass('nav-scrolled-text');
            $('.navbar-brand').removeClass('brand-dark');
            $('.navbar-brand').addClass('brand-light');
            $(".hero-body").css("margin-top", "0");
            $('.navbar-brand a img').attr('src', '/images/nav-logo.svg');
            $('.non-parrallax-font nav div div a img').attr('src', '/images/nav-logo-dark.svg');
        };

    })
});

//Scroll function
$('.scroll').on('click', function(e) {
    e.preventDefault()
    $('html, body').animate({
        scrollTop: $(this.hash).offset().top
    }, 1500);
});

//Price accordion JS
$(document).ready(function() {
    $('.non-parrallax-font nav div div a img').attr('src', '/images/nav-logo-dark.svg');
    var acc = document.getElementsByClassName("price-accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("table-active");
            var panel = document.getElementsByClassName("table-panel");
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
});

//Partner auto scroll carousel
$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 5,
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true
    });
    $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })
});
