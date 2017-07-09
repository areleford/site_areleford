// require all images for now so that for production they can be compressed with img loader
require.context("../img", true, /^\.\//);

$(document).ready(() => {

    let lastScrollTop = 0;
    let delta = 5;
    let $siteNav = $("#siteNav");
    let navBarHeight = $siteNav.height();
    console.log(navBarHeight);

    function handleScroll() {
        let curScrollTop = document.body.scrollTop;

        if(Math.abs(lastScrollTop - curScrollTop) <= delta) {
            return;
        }

        if(curScrollTop > lastScrollTop && curScrollTop > navBarHeight) {
            // scrolling down
            $siteNav.hide(300);
        } else {
            // scrolling up
            $siteNav.show(300);
        }

        lastScrollTop = curScrollTop;
    };

    $(document).on("scroll", () => {
        //handleScroll();
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
});

