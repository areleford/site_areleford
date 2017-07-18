// require all images for now so that for production they can be compressed with img loader
require.context("../img", true, /^\.\//);

$(document).ready(() => {

    // Fixed nav showing on scroll up
    let lastScrollTop = 0;
    let delta = 4;
    let $siteNav = $("#siteNav");
    let navBarHeight = $siteNav.height();
    console.log(navBarHeight);

    function handleScroll() {
        let curScrollTop = document.body.scrollTop;

        if(Math.abs(lastScrollTop - curScrollTop) <= delta) {
            return;
        }

        if(curScrollTop > lastScrollTop && curScrollTop > navBarHeight) {
            // scrolling down - hide
            $siteNav.css({"transform":"translateY(-200px)"});
        } else {
            // scrolling up - show
            $siteNav.css({"transform":"translateY(0px)"});
        }

        lastScrollTop = curScrollTop;
    };

    $(document).on("scroll", () => {
        handleScroll();
    });

    // Mobile Hamburger
    $("#hamburger").click(() => {
        $("#mobileNavLinks").slideToggle();
    });

    // Smooth scroll to top
    $('a[href="#top"]').click(() => {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });

    // SLIDER
    $('.slider .right').click(() => {
        let $curSlide = $('.slide.active');
        let $nextSlide = $curSlide.next('.slide');

        // hide current slide
        if($nextSlide.length) {
            $curSlide.removeClass('active');
            $curSlide.addClass('exit-left');
            if($nextSlide.hasClass('exit-right')) {
                $nextSlide.removeClass('exit-right');
            }
            $nextSlide.addClass('active');
        }
    });
    $('.slider .left').click(() => {
        let $curSlide = $('.slide.active');
        let $prevSlide = $curSlide.prev('.slide');

        // hide current slide
        if($prevSlide.length) {
            $curSlide.removeClass('active');
            $curSlide.addClass('exit-right');
            if($prevSlide.hasClass('exit-left')) {
                $prevSlide.removeClass('exit-left');
            }
            $prevSlide.addClass('active');
        }
    });
});

